<?php

/**
 * @file
 * Contains \Drupal\dg_styleguide\Controller\StyleguideController.
 */

namespace Drupal\dg_styleguide\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class StyleguideController.
 *
 * @package Drupal\dg_styleguide\Controller
 */
class StyleguideController extends ControllerBase {

  public function section(Request $request, $section, $title) {
    $sections = [];
    $styleguide = _dg_styleguide();
    foreach($styleguide as $section => $section_atts) {
      foreach ($section_atts['components'] as $component_id => $component_label) {
        $sections[$section][$component_id] = [
          '#theme' => 'styleguide_component',
          '#title' => $component_label,
          '#component' => ['#theme' => 'styleguide_' . $section . '_' . $component_id]
        ];
      }
    }
    return [
      '#theme' => 'styleguide_section',
      '#title' => $title . ' - ' . $styleguide[$section]['title'],
      '#section' => $sections[$section]
    ];
  }

}
