<?php

/**
 * @file
 * Contains \Drupal\dg_base\Plugin\Block\BackLinkBlock.
 */

namespace Drupal\dg_base\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'BackLinkBlock' block.
 *
 * @Block(
 *  id = "back_link_block",
 *  admin_label = @Translation("Back Link"),
 * )
 */
class BackLinkBlock extends BlockBase {

  /**
   * Build render array.
   *
   * @return array
   */
  public function build() {
    $build = [];
    // Load breadcrumb manager.
    $breadcrumb = \Drupal::service('breadcrumb');
    // Get links.
    $links = $breadcrumb->build(\Drupal::routeMatch())->getLinks();
    // Ensure there are 2 or more breadcrumb items.
    if ($links && sizeof($links >= 2)) {
      $links = array_reverse($links);
      foreach ($links as $link) {
        $url = $link->getUrl()->toString();
        if ($url) {
          $link->setText(t('Back to List'));
          $build['#markup'] = $link->toString();
          return $build;
        }
      }
    }
    return $build;
  }

}
