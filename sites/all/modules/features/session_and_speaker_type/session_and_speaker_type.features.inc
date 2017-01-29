<?php
/**
 * @file
 * session_and_speaker_type.features.inc
 */

/**
 * Implements hook_node_info().
 */
function session_and_speaker_type_node_info() {
  $items = array(
    'session' => array(
      'name' => t('Session'),
      'base' => 'node_content',
      'description' => '',
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  drupal_alter('node_info', $items);
  return $items;
}
