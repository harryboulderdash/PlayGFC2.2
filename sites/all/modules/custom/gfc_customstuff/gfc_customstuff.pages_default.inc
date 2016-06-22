<?php
/**
 * @file
 * gfc_customstuff.pages_default.inc
 */

/**
 * Implements hook_default_page_manager_pages().
 */
function gfc_customstuff_default_page_manager_pages() {
  $page = new stdClass();
  $page->disabled = FALSE; /* Edit this to true to make a default page disabled initially */
  $page->api_version = 1;
  $page->name = 'Match Details';
  $page->task = 'page';
  $page->admin_title = 'Match Details';
  $page->admin_description = '';
  $page->path = 'match/%tid/%mid';
  $page->access = array();
  $page->menu = array();
  $page->arguments = array(
    'tid' => array(
      'id' => 1,
      'identifier' => 'TID',
      'name' => 'string',
      'settings' => array(
        'use_tail' => 0,
      ),
    ),
    'mid' => array(
      'id' => 2,
      'identifier' => 'MID',
      'name' => 'string',
      'settings' => array(
        'use_tail' => 0,
      ),
    ),
  );
  $page->conf = array(
    'admin_paths' => FALSE,
  );
  $page->default_handlers = array();
  $handler = new stdClass();
  $handler->disabled = FALSE; /* Edit this to true to make a default handler disabled initially */
  $handler->api_version = 1;
  $handler->name = 'page_Match Details__panel_context_c231d868-eb4c-4f6d-a844-641d45fd8bcd';
  $handler->task = 'page';
  $handler->subtask = 'Match Details';
  $handler->handler = 'panel_context';
  $handler->weight = 0;
  $handler->conf = array(
    'title' => 'Match Details',
    'no_blocks' => 1,
    'pipeline' => 'ipe',
    'body_classes_to_remove' => '',
    'body_classes_to_add' => '',
    'css_id' => '',
    'css' => '',
    'contexts' => array(),
    'relationships' => array(),
  );
  $display = new panels_display();
  $display->layout = 'twocol';
  $display->layout_settings = array();
  $display->panel_settings = array(
    'style_settings' => array(
      'default' => NULL,
      'top' => NULL,
      'left' => NULL,
      'middle' => NULL,
      'right' => NULL,
      'bottom' => NULL,
    ),
  );
  $display->cache = array();
  $display->title = '';
  $display->uuid = '176d36e2-a937-4c88-860a-cb2b3c21dac3';
  $display->content = array();
  $display->panels = array();
    $pane = new stdClass();
    $pane->pid = 'new-3fb5ec72-5110-4cee-b854-0cdb66034a8f';
    $pane->panel = 'left';
    $pane->type = 'block';
    $pane->subtype = 'UpdateScoresForm-UpdateScoresBlock';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array(
      'override_title' => 1,
      'override_title_text' => '',
      'override_title_heading' => 'h2',
    );
    $pane->cache = array();
    $pane->style = array(
      'settings' => NULL,
    );
    $pane->css = array();
    $pane->extras = array();
    $pane->position = 0;
    $pane->locks = array();
    $pane->uuid = '3fb5ec72-5110-4cee-b854-0cdb66034a8f';
    $display->content['new-3fb5ec72-5110-4cee-b854-0cdb66034a8f'] = $pane;
    $display->panels['left'][0] = 'new-3fb5ec72-5110-4cee-b854-0cdb66034a8f';
    $pane = new stdClass();
    $pane->pid = 'new-cf04f59e-0981-4d40-abb6-aa22ff3cb2e7';
    $pane->panel = 'right';
    $pane->type = 'block';
    $pane->subtype = 'UpdateScoresForm-OpenChallongeBracket';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array(
      'override_title' => 1,
      'override_title_text' => 'View Tournamanet Bracket',
      'override_title_heading' => 'h2',
    );
    $pane->cache = array();
    $pane->style = array(
      'settings' => NULL,
    );
    $pane->css = array();
    $pane->extras = array();
    $pane->position = 0;
    $pane->locks = array();
    $pane->uuid = 'cf04f59e-0981-4d40-abb6-aa22ff3cb2e7';
    $display->content['new-cf04f59e-0981-4d40-abb6-aa22ff3cb2e7'] = $pane;
    $display->panels['right'][0] = 'new-cf04f59e-0981-4d40-abb6-aa22ff3cb2e7';
  $display->hide_title = PANELS_TITLE_PANE;
  $display->title_pane = 'new-3fb5ec72-5110-4cee-b854-0cdb66034a8f';
  $handler->conf['display'] = $display;
  $page->default_handlers[$handler->name] = $handler;
  $pages['Match Details'] = $page;

  $page = new stdClass();
  $page->disabled = FALSE; /* Edit this to true to make a default page disabled initially */
  $page->api_version = 1;
  $page->name = 'find_tournaments';
  $page->task = 'page';
  $page->admin_title = 'Find Tournaments';
  $page->admin_description = '';
  $page->path = 'tournaments/find';
  $page->access = array();
  $page->menu = array();
  $page->arguments = array();
  $page->conf = array(
    'admin_paths' => FALSE,
  );
  $page->default_handlers = array();
  $handler = new stdClass();
  $handler->disabled = FALSE; /* Edit this to true to make a default handler disabled initially */
  $handler->api_version = 1;
  $handler->name = 'page_find_tournaments__panel_context_4985e835-f202-4a22-a033-4787023c4ef8';
  $handler->task = 'page';
  $handler->subtask = 'find_tournaments';
  $handler->handler = 'panel_context';
  $handler->weight = 0;
  $handler->conf = array(
    'title' => 'Find  Tournaments Panel',
    'no_blocks' => 1,
    'pipeline' => 'standard',
    'body_classes_to_remove' => '',
    'body_classes_to_add' => '',
    'css_id' => '',
    'css' => '',
    'contexts' => array(),
    'relationships' => array(),
  );
  $display = new panels_display();
  $display->layout = 'onecol';
  $display->layout_settings = array();
  $display->panel_settings = array(
    'style_settings' => array(
      'default' => NULL,
      'middle' => NULL,
    ),
  );
  $display->cache = array();
  $display->title = '';
  $display->uuid = '466f4dfe-4463-4ac4-bec8-c499fdbf2290';
  $display->content = array();
  $display->panels = array();
    $pane = new stdClass();
    $pane->pid = 'new-4fe945c3-e809-4c73-981e-09070b719bc7';
    $pane->panel = 'middle';
    $pane->type = 'views';
    $pane->subtype = 'tournaments_view';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array(
      'override_pager_settings' => 0,
      'use_pager' => 1,
      'nodes_per_page' => '10',
      'pager_id' => '0',
      'offset' => '0',
      'more_link' => 0,
      'feed_icons' => 0,
      'panel_args' => 0,
      'link_to_view' => 0,
      'args' => '',
      'url' => '',
      'display' => 'default',
      'override_title' => 1,
      'override_title_text' => '',
      'override_title_heading' => 'h2',
    );
    $pane->cache = array();
    $pane->style = array(
      'settings' => NULL,
    );
    $pane->css = array();
    $pane->extras = array();
    $pane->position = 0;
    $pane->locks = array();
    $pane->uuid = '4fe945c3-e809-4c73-981e-09070b719bc7';
    $display->content['new-4fe945c3-e809-4c73-981e-09070b719bc7'] = $pane;
    $display->panels['middle'][0] = 'new-4fe945c3-e809-4c73-981e-09070b719bc7';
  $display->hide_title = PANELS_TITLE_PANE;
  $display->title_pane = 'new-4fe945c3-e809-4c73-981e-09070b719bc7';
  $handler->conf['display'] = $display;
  $page->default_handlers[$handler->name] = $handler;
  $pages['find_tournaments'] = $page;

  $page = new stdClass();
  $page->disabled = FALSE; /* Edit this to true to make a default page disabled initially */
  $page->api_version = 1;
  $page->name = 'tourney_details';
  $page->task = 'page';
  $page->admin_title = 'Tourney Details';
  $page->admin_description = '';
  $page->path = 'tournament/%tid';
  $page->access = array(
    'logic' => 'and',
  );
  $page->menu = array();
  $page->arguments = array(
    'tid' => array(
      'id' => 1,
      'identifier' => 'TID',
      'name' => 'string',
      'settings' => array(
        'use_tail' => 0,
      ),
    ),
  );
  $page->conf = array(
    'admin_paths' => FALSE,
  );
  $page->default_handlers = array();
  $handler = new stdClass();
  $handler->disabled = FALSE; /* Edit this to true to make a default handler disabled initially */
  $handler->api_version = 1;
  $handler->name = 'page_tourney_details__panel_context_61b47c18-ff9e-4bde-9d18-41397bef7e2a';
  $handler->task = 'page';
  $handler->subtask = 'tourney_details';
  $handler->handler = 'panel_context';
  $handler->weight = 0;
  $handler->conf = array(
    'title' => 'Tournament_Details_Panel',
    'no_blocks' => 1,
    'pipeline' => 'ipe',
    'body_classes_to_remove' => '',
    'body_classes_to_add' => '',
    'css_id' => '',
    'css' => '',
    'contexts' => array(),
    'relationships' => array(),
    'access' => array(
      'logic' => 'and',
      'plugins' => array(
        0 => array(
          'name' => 'string_length',
          'settings' => array(
            'operator' => '>=',
            'length' => '12',
          ),
          'context' => 'argument_string_1',
          'not' => FALSE,
        ),
      ),
    ),
  );
  $display = new panels_display();
  $display->layout = 'twocol_bricks';
  $display->layout_settings = array();
  $display->panel_settings = array(
    'style_settings' => array(
      'default' => NULL,
      'top' => NULL,
      'left_above' => NULL,
      'right_above' => NULL,
      'middle' => NULL,
      'left_below' => NULL,
      'right_below' => NULL,
      'bottom' => NULL,
    ),
  );
  $display->cache = array();
  $display->title = '';
  $display->uuid = 'c2cd3783-9078-4e68-8c76-2884fccf8fc3';
  $display->content = array();
  $display->panels = array();
    $pane = new stdClass();
    $pane->pid = 'new-442d5650-9018-40f3-bb7b-0c26905d3503';
    $pane->panel = 'left_above';
    $pane->type = 'block';
    $pane->subtype = 'manage_teams_form-Manage_Teams_Form_Block';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array(
      'override_title' => 1,
      'override_title_text' => '',
      'override_title_heading' => 'h2',
    );
    $pane->cache = array();
    $pane->style = array(
      'settings' => NULL,
    );
    $pane->css = array();
    $pane->extras = array();
    $pane->position = 0;
    $pane->locks = array();
    $pane->uuid = '442d5650-9018-40f3-bb7b-0c26905d3503';
    $display->content['new-442d5650-9018-40f3-bb7b-0c26905d3503'] = $pane;
    $display->panels['left_above'][0] = 'new-442d5650-9018-40f3-bb7b-0c26905d3503';
    $pane = new stdClass();
    $pane->pid = 'new-fb4a28b4-8a33-4864-9ee8-03a4658020d2';
    $pane->panel = 'left_above';
    $pane->type = 'block';
    $pane->subtype = 'UpdateScoresForm-OpenChallongeBracket';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array(
      'override_title' => 1,
      'override_title_text' => '',
      'override_title_heading' => 'h2',
    );
    $pane->cache = array();
    $pane->style = array(
      'settings' => NULL,
    );
    $pane->css = array();
    $pane->extras = array();
    $pane->position = 1;
    $pane->locks = array();
    $pane->uuid = 'fb4a28b4-8a33-4864-9ee8-03a4658020d2';
    $display->content['new-fb4a28b4-8a33-4864-9ee8-03a4658020d2'] = $pane;
    $display->panels['left_above'][1] = 'new-fb4a28b4-8a33-4864-9ee8-03a4658020d2';
    $pane = new stdClass();
    $pane->pid = 'new-5aa8b04b-f6c5-4353-be4e-f1e7874265cb';
    $pane->panel = 'middle';
    $pane->type = 'views';
    $pane->subtype = 'bracket';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array(
      'override_pager_settings' => 0,
      'use_pager' => 0,
      'nodes_per_page' => ' 99',
      'pager_id' => '0',
      'offset' => '0',
      'more_link' => 0,
      'feed_icons' => 0,
      'panel_args' => 0,
      'link_to_view' => 0,
      'args' => '',
      'url' => '',
      'display' => 'default',
      'context' => array(
        0 => 'argument_string_1.raw',
      ),
      'override_title' => 1,
      'override_title_text' => '',
      'override_title_heading' => 'h2',
    );
    $pane->cache = array();
    $pane->style = array(
      'settings' => NULL,
    );
    $pane->css = array();
    $pane->extras = array();
    $pane->position = 0;
    $pane->locks = array();
    $pane->uuid = '5aa8b04b-f6c5-4353-be4e-f1e7874265cb';
    $display->content['new-5aa8b04b-f6c5-4353-be4e-f1e7874265cb'] = $pane;
    $display->panels['middle'][0] = 'new-5aa8b04b-f6c5-4353-be4e-f1e7874265cb';
    $pane = new stdClass();
    $pane->pid = 'new-c8f6dafc-695e-46fa-b306-f336949f4e92';
    $pane->panel = 'right_above';
    $pane->type = 'block';
    $pane->subtype = 'manage_tournaments-Manage_Tournaments_Form_Block';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array(
      'override_title' => 1,
      'override_title_text' => '',
      'override_title_heading' => 'h2',
    );
    $pane->cache = array();
    $pane->style = array(
      'settings' => NULL,
    );
    $pane->css = array();
    $pane->extras = array();
    $pane->position = 0;
    $pane->locks = array();
    $pane->uuid = 'c8f6dafc-695e-46fa-b306-f336949f4e92';
    $display->content['new-c8f6dafc-695e-46fa-b306-f336949f4e92'] = $pane;
    $display->panels['right_above'][0] = 'new-c8f6dafc-695e-46fa-b306-f336949f4e92';
  $display->hide_title = PANELS_TITLE_PANE;
  $display->title_pane = 'new-5aa8b04b-f6c5-4353-be4e-f1e7874265cb';
  $handler->conf['display'] = $display;
  $page->default_handlers[$handler->name] = $handler;
  $pages['tourney_details'] = $page;

  return $pages;

}
