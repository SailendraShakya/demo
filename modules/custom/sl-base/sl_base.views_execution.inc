<?php

function sl_base_views_query_alter(\Drupal\views\ViewExecutable $view, \Drupal\views\Plugin\views\query\QueryPluginBase $query)
{
    if ($view->id() == 'case_notes') {
        foreach ($query->where as &$condition_group) {
            foreach ($condition_group['conditions'] as &$condition) {
                if (strstr($condition['field'], "node_field_data.created")) {
                    $created = $view->exposed_raw_input['created'];
                    if ($created) {
                        $start = mktime(0, 0, 01, 01, 0, $created);
                        $end = strtotime('+1 years', $start);
                    }
                    $condition = array(
                        'field' => 'node_field_data.created',
                        'operator' => 'between',
                        'value' => array(
                            'min' => $start,
                            'max' => $end,
                        ),
                    );
                }
            }
        }
    }
}
