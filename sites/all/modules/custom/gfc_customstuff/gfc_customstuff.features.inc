<?php
/**
 * @file
 * gfc_customstuff.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function gfc_customstuff_ctools_plugin_api($module = NULL, $api = NULL) {
  if ($module == "page_manager" && $api == "pages_default") {
    return array("version" => "1");
  }
}

/**
 * Implements hook_views_api().
 */
function gfc_customstuff_views_api($module = NULL, $api = NULL) {
  return array("api" => "3.0");
}

/**
 * Implements hook_eck_bundle_info().
 */
function gfc_customstuff_eck_bundle_info() {
  $items = array(
    'team_members_team_members' => array(
      'machine_name' => 'team_members_team_members',
      'entity_type' => 'team_members',
      'name' => 'team_members',
      'label' => 'Team Members',
    ),
  );
  return $items;
}

/**
 * Implements hook_eck_entity_type_info().
 */
function gfc_customstuff_eck_entity_type_info() {
  $items = array(
    'team_members' => array(
      'name' => 'team_members',
      'label' => 'Team Members',
      'properties' => array(
        'created' => array(
          'label' => 'Created',
          'type' => 'integer',
          'behavior' => 'created',
        ),
        'changed' => array(
          'label' => 'Changed',
          'type' => 'integer',
          'behavior' => 'changed',
        ),
      ),
    ),
  );
  return $items;
}

/**
 * Implements hook_node_info().
 */
function gfc_customstuff_node_info() {
  $items = array(
    'match' => array(
      'name' => t('Match'),
      'base' => 'node_content',
      'description' => t('A two team battle within a tournament'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
    'team' => array(
      'name' => t('Team'),
      'base' => 'node_content',
      'description' => t('Teams include 1 or more players'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
    'tournaments' => array(
      'name' => t('Tournament'),
      'base' => 'node_content',
      'description' => t('Describes tournament information and status.'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  drupal_alter('node_info', $items);
  return $items;
}
