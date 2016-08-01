<?php
/**
 * @file
 * Contains \Drupal\sl_base\Plugin\DsField\ContentTypeLabel.
 */

namespace Drupal\sl_base\Plugin\DsField;

use Drupal\Core\Form\FormStateInterface;
use Drupal\ds\Plugin\DsField\DsFieldBase;
use Drupal\node\Entity\NodeType;

/**
 * @DsField(
 *   id = "sl_base_content_type_label",
 *   title = @Translation("Content Type Label"),
 *   entity_type = "node"
 * )
 */
class ContentTypeLabel extends DsFieldBase {

  /**
   * Build field.
   *
   * @return array
   */
  public function build() {
    $types = NodeType::loadMultiple();
    $current_type = $this->entity()->getType();
    if (isset($types[$current_type])) {
      return array(
        '#markup' => $types[$current_type]->label()
      );
    }
  }

  /**
   * {@inheritdoc}
   */
  public function settingsForm($form, FormStateInterface $form_state) {
    return array();
  }

  /**
   * {@inheritdoc}
   */
  public function defaultConfiguration() {
    return array();
  }

  /**
   * {@inheritdoc}
   */
  public function formatters() {
    return array();
  }

  /**
   * {@inheritdoc}
   */
  public function isAllowed() {
    return TRUE;
  }

}
