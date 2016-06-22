<?php

/**
 * @file
 * Template to display a view as a table.
 *
 * - $title : The title of this group of rows.  May be empty.
 * - $header: An array of header labels keyed by field id.
 * - $caption: The caption for this table. May be empty.
 * - $header_classes: An array of header classes keyed by field id.
 * - $fields: An array of CSS IDs to use for each field id.
 * - $classes: A class or classes to apply to the table, based on settings.
 * - $row_classes: An array of classes to apply to each row, indexed by row
 *   number. This matches the index in $rows.
 * - $rows: An array of row items. Each row is an array of content.
 *   $rows are keyed by row number, fields within rows are keyed by field ID.
 * - $field_classes: An array of classes to apply to each field, indexed by
 *   field id, then row number. This matches the index in $rows.
 * @ingroup views_templates
 *
 *
 * NOTES:
 *
 * Goal here is to add a 'remove player' button on the roster.
 * This button will change status to 'removed' and will get filtered out by
 * the view based on status.
 *
 * At this point I will have the team NID and the person UID and the Tournament TID, so I can
 * create and call a removePlayerFromTeam(teamNID,uid,Tournament_Challonge_URL) function, so the
 * backend piece is accounted for.
 *
 * Question: how best to make the call from front end?
 *
 * option: wrap the 'remove' icon in a form that just executes the function. This is ideal if I can do it as an AJAX call.
 *
 * option2: call to a modal which makes the form call and closes. Could give an 'are you sure'
 * verification before making call and closing modal.
 *
 *
 */
?>