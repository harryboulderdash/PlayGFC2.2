<?php

/**
 * @file
 * Default simple view template to all the fields as a row.
 *
 * - $view: The view in use.
 * - $fields: an array of $field objects. Each one contains:
 *   - $field->content: The output of the field.
 *   - $field->raw: The raw data for the field, if it exists. This is NOT output safe.
 *   - $field->class: The safe class id to use.
 *   - $field->handler: The Views field handler object controlling this field. Do not use
 *     var_export to dump this object, as it can't handle the recursion.
 *   - $field->inline: Whether or not the field should be inline.
 *   - $field->inline_html: either div or span based on the above flag.
 *   - $field->wrapper_prefix: A complete wrapper containing the inline_html to use.
 *   - $field->wrapper_suffix: The closing tag for the wrapper.
 *   - $field->separator: an optional separator that may appear before a field.
 *   - $field->label: The wrap label text to use.
 *   - $field->label_html: The full HTML of the label to use including
 *     configured element type.
 * - $row: The raw result object from the query, with all data it fetched.
 *
 * @ingroup views_templates
 *
 *
[id_1] == Team Members: Id
[created] == Team Members: Created
[field_team_member_entry_confirme] == Team Members: Team Member Entry Confirmed
[field_team_member_invited_by] == Team Members: Team Member Invited By
[field_team_member_pre_paid] == Team Members: Team Member Pre-paid
[field_team_member_user] == Team Members: Team Member User
[uid] == User: Uid
[field_team_name] == Content: Team Name
[field_tournament_prize] == Content: Tournament Prize
[field_tournament_challonge_url] == Content: Tournament_Challonge_URL
[field_tournament_name] == Content: Name
[field_tournament_name-value] == Raw value
[field_tournament_name-format] == Raw format
 * [field_team_reference_from_team_m] == Team Members: Team Reference From Team Members
[field_team_reference_from_team_m-target_id] == Raw target_id
 *
 *
 *
 */
?>


<tr>
    <td><?php print $fields['created']->content; ?></td>
    <td>
        <?php print l($fields['field_tournament_name']->content,'/node/493/' . $fields['field_tournament_challonge_url']->content); ?>
     </td>

    <td><?php print $fields['field_team_name']->content; ?></td>
    <td><?php print $fields['field_team_member_invited_by']->content; ?></td>
    <td><?php print $fields['field_tournament_entry_credits']->content; ?></td>

    <td>
        <?php if($fields['field_team_member_pre_paid']->content==1){print 'Yes';}else{print 'No';} ?>
    </td>

    <td>
        <?php
        //invoke form for each row and pass parameters to it
        echo render(drupal_get_form('manage_teams_form_acceptInvite_form',$fields['id_1']->content,$fields['uid']->content,$fields['field_team_reference_from_team_m']->content,$fields['field_tournament_challonge_url']->content))

        ?>
    </td>

</tr>
