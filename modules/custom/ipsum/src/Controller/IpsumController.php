<?php

namespace Drupal\ipsum\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class IpsumController.
 *
 * @package Drupal\ipsum\Controller
 */
class IpsumController extends ControllerBase {

  /**
   * Index.
   *
   * @return string
   *   Return Hello string.
   */
  public function index() {
    return [
      '#type' => 'markup',
      '#markup' => $this->t('Implement method: index')
    ];
  }

  public function generate($paragraphs, $phrases) {

    $config = \Drupal::config('ipsum.settings');

    // Page title and source text.
    $page_title = $config->get('ipsum.page_title');
    $source_text = $config->get('ipsum.source_text');
    $element['#source_text'] = array();
    var_dump($paragraphs);
    die('testing');
    // Generate X paragraphs with up to Y phrases each
    for ($i = 1; $i <= $paragraphs; $i++) {

      $this_paragraph = '';
      // When we say "up to Y phrases each", we can't mean "from 1 to Y".
      // So we go from halfway up.
      $random_phrases = mt_rand(round($phrases/2), $phrases);
      // Also don't repeat the last phrase.
      $last_number = 0;
      $next_number = 0;
      for ($j = 1; $j <= $random_phrases; $j++) {
        do {
          $next_number = floor(mt_rand(0, count($repertory)-1));
        } while ($next_number === $last_number);
        $this_paragraph .= $repertory[$next_number] . ' ';
        $last_number = $next_number;
      }

      $element['#source_text'][] = SafeMarkup::checkPlain($this_paragraph);
    }

    $element['#title'] = SafeMarkup::checkPlain($page_title);

    // Theme function
    $element['#theme'] = 'loremipsum';

    return $element;
  }

  

}
