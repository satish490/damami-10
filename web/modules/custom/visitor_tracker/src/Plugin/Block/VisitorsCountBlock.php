<?php

namespace Drupal\visitor_tracker\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * @Block(
 *   id = "visitorscountblock",
 *   admin_label = @Translation("Visitors Count Block"),
 * )
 */
class VisitorsCountBlock extends BlockBase {
  public function getCacheMaxAge() {
    return 0;
  }

public function build() {
  $connection = \Drupal\Core\Database\Database::getConnection();
  $lang = \Drupal::languageManager()->getCurrentLanguage()->getId();
  $col = $lang == 'en' ? 'english_counter' : 'hindi_counter';
  $count = $connection->select('visitor_counter', 'v')
    ->fields('v', [$col])
    ->execute()->fetchField();

  return [
    '#markup' => '<p>' . $this->t('Visitors Count') . ' : <span class="counterPerDay">' . ($count ?: 0) . '</span></p>',
    '#attached' => [
      'library' => [
        'visitor_tracker/visitor-tracker',
      ],
      'drupalSettings' => [
        'visitor_tracker' => [
          'base_url' => \Drupal::request()->getSchemeAndHttpHost() . '/',
        ],
      ],
    ],
  ];
}
}