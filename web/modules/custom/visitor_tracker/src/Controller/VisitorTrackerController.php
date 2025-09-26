<?php

namespace Drupal\visitor_tracker\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class VisitorTrackerController extends ControllerBase {

  public function insert(Request $request) {
    global $base_url;
    $location = str_replace($base_url, '', $request->get('location') ?? '');
    $ipaddress = $request->getClientIp();
    $user = \Drupal::currentUser();
    $uid = $user->id();
    $langcode = \Drupal::languageManager()->getCurrentLanguage()->getId();
    $time_value = \Drupal::time()->getCurrentTime();
    $vurl = $request->get('location') ?? '';
    $vpath = $location;

    if (str_contains($vpath, '.css') || str_contains($vpath, 'member') || str_contains($vpath, 'admin') || str_contains($vpath, 'themes')) {
      return new Response('false');
    }

    $user_agent = $request->server->get('HTTP_USER_AGENT');
    $ctime = $time_value - 604800;
    $connection = \Drupal\Core\Database\Database::getConnection();
    $query = $connection->select('visitors', 'v')
      ->condition('visitors_uid', $uid)
      ->condition('visitors_ip', $ipaddress)
      ->condition('visitors_url', $vurl)
      ->condition('visitors_path', $vpath)
      ->condition('visitors_date_time', $ctime, '>=')
      ->fields('v');
    $results = $query->execute()->fetchAll();

    if (!empty($results)) {
      foreach ($results as $row) {
        $connection->update('visitors')
          ->fields([
            'visitors_uid' => $uid,
            'visitors_ip' => $ipaddress,
            'language' => $langcode,
            'visitors_date_time' => $time_value,
            'visitors_url' => $vurl,
            'visitors_path' => $vpath,
            'visitors_user_agent' => $user_agent,
            'counter' => $row->counter + 1,
          ])
          ->condition('visitors_id', $row->visitors_id)
          ->execute();
      }
    } else {
      $connection->insert('visitors')
        ->fields([
          'visitors_uid' => $uid,
          'visitors_ip' => $ipaddress,
          'language' => $langcode,
          'visitors_date_time' => $time_value,
          'visitors_url' => $vurl,
          'visitors_path' => $vpath,
          'visitors_user_agent' => $user_agent,
          'counter' => 1,
        ])
        ->execute();
    }

    // ✅ Language-wise visitor_counter table update
    $lang_column = $langcode == 'en' ? 'english_counter' : 'hindi_counter';

    $connection->merge('visitor_counter')
     ->key('id', 1) 
      ->fields([
        $lang_column => 1,
      ])
      ->expression($lang_column, "$lang_column + 1")
      ->execute();

    return new Response('true');
  }

  public function update() {
    $connection = \Drupal\Core\Database\Database::getConnection();
    $current_language = \Drupal::languageManager()->getCurrentLanguage()->getId();
    $lang_column = $current_language == 'en' ? 'english_counter' : 'hindi_counter';

    $result = $connection->select('visitor_counter', 'v')
      ->fields('v', [$lang_column])
      ->execute()
      ->fetchField();

    return new Response($result);
  }
}
