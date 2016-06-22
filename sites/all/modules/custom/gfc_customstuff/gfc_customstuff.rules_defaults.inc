<?php
/**
 * @file
 * gfc_customstuff.rules_defaults.inc
 */

/**
 * Implements hook_default_rules_configuration().
 */
function gfc_customstuff_default_rules_configuration() {
  $items = array();
  $items['rules_add_challonge_tourney'] = entity_import('rules_config', '{ "rules_add_challonge_tourney" : {
      "LABEL" : "Add Challonge Tourney",
      "PLUGIN" : "reaction rule",
      "OWNER" : "rules",
      "TAGS" : [ "Tournament Challonge" ],
      "REQUIRES" : [ "php", "rules" ],
      "ON" : { "node_insert--tournaments" : { "bundle" : "tournaments" } },
      "DO" : [ { "php_eval" : { "code" : "createGFCTournament($node-\\u003Enid);" } } ]
    }
  }');
  return $items;
}
