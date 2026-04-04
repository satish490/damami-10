<?php

namespace Drupal\visitor_counter\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * @Block(
 *   id = "visitor_counter_block",
 *   admin_label = @Translation("Visitor Counter Block"),
 *   category = @Translation("Custom")
 * )
 */
class VisitorCounterBlock extends BlockBase {

  public function build() {
    // Kill page cache so block is never served from cache
    \Drupal::service('page_cache_kill_switch')->trigger();

    // ✅ Render empty placeholder only — JS will fill it via AJAX
    // This is the KEY fix: block no longer shows stale PHP-rendered count
    return [
      '#type'   => 'markup',
      '#markup' => "<div class='visitCounter'>
                      <span class='spinner-border' style='visibility:hidden;'></span>
                   </div>",
      '#cache'  => ['max-age' => 0],
    ];
  }

  public function getCacheMaxAge() {
    return 0;
  }

}