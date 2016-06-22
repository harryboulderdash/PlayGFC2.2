<?php
/**
 * @file
 * gfc_customstuff.views_default.inc
 */

/**
 * Implements hook_views_default_views().
 */
function gfc_customstuff_views_default_views() {
  $export = array();

  $view = new view();
  $view->name = 'bracket';
  $view->description = '';
  $view->tag = 'default';
  $view->base_table = 'node';
  $view->human_name = 'Tournament Bracket';
  $view->core = 7;
  $view->api_version = '3.0';
  $view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */

  /* Display: Master */
  $handler = $view->new_display('default', 'Master', 'default');
  $handler->display->display_options['title'] = 'Match Details';
  $handler->display->display_options['use_more_always'] = FALSE;
  $handler->display->display_options['group_by'] = TRUE;
  $handler->display->display_options['access']['type'] = 'perm';
  $handler->display->display_options['cache']['type'] = 'none';
  $handler->display->display_options['query']['type'] = 'views_query';
  $handler->display->display_options['exposed_form']['type'] = 'basic';
  $handler->display->display_options['pager']['type'] = 'some';
  $handler->display->display_options['pager']['options']['items_per_page'] = ' 99';
  $handler->display->display_options['style_plugin'] = 'table';
  $handler->display->display_options['style_options']['grouping'] = array(
    0 => array(
      'field' => 'field_match_round',
      'rendered' => 1,
      'rendered_strip' => 0,
    ),
  );
  $handler->display->display_options['style_options']['default_row_class'] = FALSE;
  $handler->display->display_options['style_options']['columns'] = array(
    'field_tournament_challonge_url' => 'field_tournament_challonge_url',
    'field_match_challonge_id' => 'field_match_challonge_id',
    'nothing' => 'nothing',
    'field_match_round' => 'field_match_round',
    'field_match_status' => 'field_match_status',
    'field_match_team_1' => 'field_match_team_1',
    'field_match_team_1_score' => 'field_match_team_1_score',
    'field_match_team_2' => 'field_match_team_2',
    'field_match_team_2_score' => 'field_match_team_2_score',
    'field_match_winner' => 'field_match_winner',
    'nid' => 'nid',
  );
  $handler->display->display_options['style_options']['default'] = 'field_match_round';
  $handler->display->display_options['style_options']['info'] = array(
    'field_tournament_challonge_url' => array(
      'sortable' => 0,
      'default_sort_order' => 'asc',
      'align' => '',
      'separator' => '',
      'empty_column' => 0,
    ),
    'field_match_challonge_id' => array(
      'sortable' => 0,
      'default_sort_order' => 'asc',
      'align' => '',
      'separator' => '',
      'empty_column' => 0,
    ),
    'nothing' => array(
      'align' => '',
      'separator' => '',
      'empty_column' => 0,
    ),
    'field_match_round' => array(
      'sortable' => 0,
      'default_sort_order' => 'asc',
      'align' => '',
      'separator' => '',
      'empty_column' => 1,
    ),
    'field_match_status' => array(
      'sortable' => 0,
      'default_sort_order' => 'asc',
      'align' => '',
      'separator' => '',
      'empty_column' => 0,
    ),
    'field_match_team_1' => array(
      'sortable' => 0,
      'default_sort_order' => 'asc',
      'align' => '',
      'separator' => '',
      'empty_column' => 0,
    ),
    'field_match_team_1_score' => array(
      'sortable' => 0,
      'default_sort_order' => 'asc',
      'align' => '',
      'separator' => '',
      'empty_column' => 0,
    ),
    'field_match_team_2' => array(
      'sortable' => 0,
      'default_sort_order' => 'asc',
      'align' => '',
      'separator' => '',
      'empty_column' => 0,
    ),
    'field_match_team_2_score' => array(
      'sortable' => 0,
      'default_sort_order' => 'asc',
      'align' => '',
      'separator' => '',
      'empty_column' => 0,
    ),
    'field_match_winner' => array(
      'sortable' => 0,
      'default_sort_order' => 'asc',
      'align' => '',
      'separator' => '',
      'empty_column' => 0,
    ),
    'nid' => array(
      'sortable' => 0,
      'default_sort_order' => 'asc',
      'align' => '',
      'separator' => '',
      'empty_column' => 0,
    ),
  );
  /* Relationship: Entity Reference: Referencing entity */
  $handler->display->display_options['relationships']['reverse_field_tournament_match_node']['id'] = 'reverse_field_tournament_match_node';
  $handler->display->display_options['relationships']['reverse_field_tournament_match_node']['table'] = 'node';
  $handler->display->display_options['relationships']['reverse_field_tournament_match_node']['field'] = 'reverse_field_tournament_match_node';
  $handler->display->display_options['relationships']['reverse_field_tournament_match_node']['required'] = TRUE;
  /* Field: Content: Tournament_Challonge_URL */
  $handler->display->display_options['fields']['field_tournament_challonge_url']['id'] = 'field_tournament_challonge_url';
  $handler->display->display_options['fields']['field_tournament_challonge_url']['table'] = 'field_data_field_tournament_challonge_url';
  $handler->display->display_options['fields']['field_tournament_challonge_url']['field'] = 'field_tournament_challonge_url';
  $handler->display->display_options['fields']['field_tournament_challonge_url']['relationship'] = 'reverse_field_tournament_match_node';
  $handler->display->display_options['fields']['field_tournament_challonge_url']['label'] = '';
  $handler->display->display_options['fields']['field_tournament_challonge_url']['exclude'] = TRUE;
  $handler->display->display_options['fields']['field_tournament_challonge_url']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_tournament_challonge_url']['type'] = 'text_plain';
  /* Field: Content: Match Challonge ID */
  $handler->display->display_options['fields']['field_match_challonge_id']['id'] = 'field_match_challonge_id';
  $handler->display->display_options['fields']['field_match_challonge_id']['table'] = 'field_data_field_match_challonge_id';
  $handler->display->display_options['fields']['field_match_challonge_id']['field'] = 'field_match_challonge_id';
  $handler->display->display_options['fields']['field_match_challonge_id']['label'] = 'Match Details';
  $handler->display->display_options['fields']['field_match_challonge_id']['exclude'] = TRUE;
  $handler->display->display_options['fields']['field_match_challonge_id']['alter']['make_link'] = TRUE;
  $handler->display->display_options['fields']['field_match_challonge_id']['alter']['path'] = 'match/[field_tournament_challonge_url]/[field_match_challonge_id-value]';
  $handler->display->display_options['fields']['field_match_challonge_id']['alter']['alt'] = 'Match Details';
  $handler->display->display_options['fields']['field_match_challonge_id']['alter']['link_class'] = 'button';
  $handler->display->display_options['fields']['field_match_challonge_id']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_match_challonge_id']['settings'] = array(
    'thousand_separator' => '',
    'prefix_suffix' => 1,
  );
  /* Field: Global: Custom text */
  $handler->display->display_options['fields']['nothing']['id'] = 'nothing';
  $handler->display->display_options['fields']['nothing']['table'] = 'views';
  $handler->display->display_options['fields']['nothing']['field'] = 'nothing';
  $handler->display->display_options['fields']['nothing']['label'] = '';
  $handler->display->display_options['fields']['nothing']['alter']['text'] = 'Match Details';
  $handler->display->display_options['fields']['nothing']['alter']['make_link'] = TRUE;
  $handler->display->display_options['fields']['nothing']['alter']['path'] = 'match/[field_tournament_challonge_url]/[field_match_challonge_id]';
  $handler->display->display_options['fields']['nothing']['alter']['link_class'] = 'button';
  $handler->display->display_options['fields']['nothing']['element_label_colon'] = FALSE;
  /* Field: Content: Match Round */
  $handler->display->display_options['fields']['field_match_round']['id'] = 'field_match_round';
  $handler->display->display_options['fields']['field_match_round']['table'] = 'field_data_field_match_round';
  $handler->display->display_options['fields']['field_match_round']['field'] = 'field_match_round';
  $handler->display->display_options['fields']['field_match_round']['label'] = 'Round';
  $handler->display->display_options['fields']['field_match_round']['settings'] = array(
    'thousand_separator' => ' ',
    'prefix_suffix' => 1,
  );
  /* Field: Content: Match Status */
  $handler->display->display_options['fields']['field_match_status']['id'] = 'field_match_status';
  $handler->display->display_options['fields']['field_match_status']['table'] = 'field_data_field_match_status';
  $handler->display->display_options['fields']['field_match_status']['field'] = 'field_match_status';
  $handler->display->display_options['fields']['field_match_status']['label'] = 'Status';
  /* Field: Content: Match Team 1 */
  $handler->display->display_options['fields']['field_match_team_1']['id'] = 'field_match_team_1';
  $handler->display->display_options['fields']['field_match_team_1']['table'] = 'field_data_field_match_team_1';
  $handler->display->display_options['fields']['field_match_team_1']['field'] = 'field_match_team_1';
  $handler->display->display_options['fields']['field_match_team_1']['label'] = 'Team 1';
  $handler->display->display_options['fields']['field_match_team_1']['settings'] = array(
    'link' => 0,
  );
  /* Field: Content: Match Team 1 Score */
  $handler->display->display_options['fields']['field_match_team_1_score']['id'] = 'field_match_team_1_score';
  $handler->display->display_options['fields']['field_match_team_1_score']['table'] = 'field_data_field_match_team_1_score';
  $handler->display->display_options['fields']['field_match_team_1_score']['field'] = 'field_match_team_1_score';
  $handler->display->display_options['fields']['field_match_team_1_score']['label'] = 'Score';
  $handler->display->display_options['fields']['field_match_team_1_score']['empty'] = 'TBD';
  $handler->display->display_options['fields']['field_match_team_1_score']['settings'] = array(
    'thousand_separator' => ' ',
    'prefix_suffix' => 1,
  );
  /* Field: Content: Match Team 2 */
  $handler->display->display_options['fields']['field_match_team_2']['id'] = 'field_match_team_2';
  $handler->display->display_options['fields']['field_match_team_2']['table'] = 'field_data_field_match_team_2';
  $handler->display->display_options['fields']['field_match_team_2']['field'] = 'field_match_team_2';
  $handler->display->display_options['fields']['field_match_team_2']['label'] = 'Team 2';
  $handler->display->display_options['fields']['field_match_team_2']['settings'] = array(
    'link' => 0,
  );
  /* Field: Content: Match Team 2 Score */
  $handler->display->display_options['fields']['field_match_team_2_score']['id'] = 'field_match_team_2_score';
  $handler->display->display_options['fields']['field_match_team_2_score']['table'] = 'field_data_field_match_team_2_score';
  $handler->display->display_options['fields']['field_match_team_2_score']['field'] = 'field_match_team_2_score';
  $handler->display->display_options['fields']['field_match_team_2_score']['label'] = 'Score';
  $handler->display->display_options['fields']['field_match_team_2_score']['empty'] = 'TBD';
  $handler->display->display_options['fields']['field_match_team_2_score']['settings'] = array(
    'thousand_separator' => ' ',
    'prefix_suffix' => 1,
  );
  /* Field: Content: Match Winner */
  $handler->display->display_options['fields']['field_match_winner']['id'] = 'field_match_winner';
  $handler->display->display_options['fields']['field_match_winner']['table'] = 'field_data_field_match_winner';
  $handler->display->display_options['fields']['field_match_winner']['field'] = 'field_match_winner';
  $handler->display->display_options['fields']['field_match_winner']['label'] = 'Winner';
  $handler->display->display_options['fields']['field_match_winner']['empty'] = 'TBD';
  $handler->display->display_options['fields']['field_match_winner']['settings'] = array(
    'link' => 0,
  );
  /* Field: Match NID */
  $handler->display->display_options['fields']['nid']['id'] = 'nid';
  $handler->display->display_options['fields']['nid']['table'] = 'node';
  $handler->display->display_options['fields']['nid']['field'] = 'nid';
  $handler->display->display_options['fields']['nid']['relationship'] = 'reverse_field_tournament_match_node';
  $handler->display->display_options['fields']['nid']['ui_name'] = 'Match NID';
  $handler->display->display_options['fields']['nid']['label'] = 'Report Scores';
  $handler->display->display_options['fields']['nid']['alter']['alter_text'] = TRUE;
  $handler->display->display_options['fields']['nid']['alter']['text'] = '<a href="/UpdateScoresForm/nojs/match" class="ctools-use-modal ctools-use-modal-processed">Update Scores</a>';
  $handler->display->display_options['fields']['nid']['alter']['make_link'] = TRUE;
  $handler->display->display_options['fields']['nid']['alter']['path'] = '/UpdateScoresForm/nojs/match';
  $handler->display->display_options['fields']['nid']['alter']['alt'] = 'Report Scores';
  $handler->display->display_options['fields']['nid']['alter']['link_class'] = 'ctools-use-modal';
  $handler->display->display_options['fields']['nid']['alter']['prefix'] = '<div class="content">';
  $handler->display->display_options['fields']['nid']['alter']['suffix'] = '</div>';
  $handler->display->display_options['fields']['nid']['element_default_classes'] = FALSE;
  $handler->display->display_options['fields']['nid']['hide_alter_empty'] = FALSE;
  /* Sort criterion: Content: Post date */
  $handler->display->display_options['sorts']['created']['id'] = 'created';
  $handler->display->display_options['sorts']['created']['table'] = 'node';
  $handler->display->display_options['sorts']['created']['field'] = 'created';
  $handler->display->display_options['sorts']['created']['order'] = 'DESC';
  /* Contextual filter: Content: Tournament_Challonge_URL (field_tournament_challonge_url) */
  $handler->display->display_options['arguments']['field_tournament_challonge_url_value']['id'] = 'field_tournament_challonge_url_value';
  $handler->display->display_options['arguments']['field_tournament_challonge_url_value']['table'] = 'field_data_field_tournament_challonge_url';
  $handler->display->display_options['arguments']['field_tournament_challonge_url_value']['field'] = 'field_tournament_challonge_url_value';
  $handler->display->display_options['arguments']['field_tournament_challonge_url_value']['relationship'] = 'reverse_field_tournament_match_node';
  $handler->display->display_options['arguments']['field_tournament_challonge_url_value']['default_argument_type'] = 'fixed';
  $handler->display->display_options['arguments']['field_tournament_challonge_url_value']['summary']['number_of_records'] = '0';
  $handler->display->display_options['arguments']['field_tournament_challonge_url_value']['summary']['format'] = 'default_summary';
  $handler->display->display_options['arguments']['field_tournament_challonge_url_value']['summary_options']['items_per_page'] = '25';
  $handler->display->display_options['arguments']['field_tournament_challonge_url_value']['limit'] = '0';
  /* Filter criterion: Content: Published */
  $handler->display->display_options['filters']['status']['id'] = 'status';
  $handler->display->display_options['filters']['status']['table'] = 'node';
  $handler->display->display_options['filters']['status']['field'] = 'status';
  $handler->display->display_options['filters']['status']['value'] = 1;
  $handler->display->display_options['filters']['status']['group'] = 1;
  $handler->display->display_options['filters']['status']['expose']['operator'] = FALSE;
  /* Filter criterion: Content: Type */
  $handler->display->display_options['filters']['type']['id'] = 'type';
  $handler->display->display_options['filters']['type']['table'] = 'node';
  $handler->display->display_options['filters']['type']['field'] = 'type';
  $handler->display->display_options['filters']['type']['value'] = array(
    'match' => 'match',
  );
  $handler->display->display_options['filters']['type']['group'] = 1;

  /* Display: Bracket Table */
  $handler = $view->new_display('block', 'Bracket Table', 'block');
  $handler->display->display_options['display_description'] = 'Tournament Bracket Details';

  /* Display: Tourney Bracket Pane */
  $handler = $view->new_display('panel_pane', 'Tourney Bracket Pane', 'panel_pane_1');

  /* Display: Context */
  $handler = $view->new_display('ctools_context', 'Context', 'ctools_context_1');
  $handler->display->display_options['style_plugin'] = 'ctools_context';
  $handler->display->display_options['row_plugin'] = 'fields';
  $export['bracket'] = $view;

  return $export;
}
