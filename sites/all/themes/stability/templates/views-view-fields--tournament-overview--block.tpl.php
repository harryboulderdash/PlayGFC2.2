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
 *
Title	title	Node module element

Name	                        field_tournament_name
Tournament Gaming Platform	    field_tournament_gaming_platform
Tournament Game Type	        field_tournament_game_type
Tournament Description	        field_tournament_description
Tournament Game Modes	        field_tournament_game_modes
Tournament Type	                field_tournament_type
Registration Window	            field_registration_window
Tournament Time	                field_tournament_time / field_tournament_time-value
Max Bracket Size	            field_bracket_size
Minimum Team Size	            field_minimum_team_size
Maximum Team Size	            field_maximum_team_size
Tournament Best Of	            field_tournament_best_of
Tournament Prize	            field_tournament_prize
Tournament Entry Fee	        field_tournament_entry_fee
Tournament Match	            field_tournament_match	Entity Reference
Tournament_Challonge_URL	    field_tournament_challonge_url
Tournament Challonge ID	        field_tournament_challonge_id
Registered Teams	            field_tournament_teams_entered
URL path settings	            path
Tournament Status	            field_tournament_status	List
 *
 *
 * field_tournament_challonge_url
 * if(!getTeamByTournamentByUser($playerUID, $tournamentID))
 */

//SET USER OBJECT
$user = $GLOBALS['user'];

?>

<div class="col-xs-9" xmlns="http://www.w3.org/1999/html"><br>
    <div class="pull-right">
        <?php $status = $fields['field_tournament_status']->content;?>

        <?php if($status=="Pending"): ?>
            <?php $fonthtml = '<i class="fa fa-wrench fa-lg"></i>' ?>
            <?php if(getTeamByTournamentByUser($user->uid, $fields['field_tournament_challonge_url']->content)): ?>
                <a href="<?php print base_path() . 'node/312/' . $fields['field_tournament_challonge_url']->content ?>" class="btn btn-primary"><i class="fa fa-wrench fa-lg"></i> &nbsp;Manage Team</a>
            <?php else: ?>
                <a href="<?php print base_path() . 'node/312/'. $fields['field_tournament_challonge_url']->content ?>" class="btn btn-primary"><i class="fa fa-user-plus fa-lg"></i> &nbsp;Join Tournament</a>
            <?php endif; ?>
        <?php endif; ?>

        <?php if($status=="Registration Closed"): ?>
            <div data-animation="rotateIn" data-animation-delay="1000" style="margin-left: 5px; margin-right: 5px; border-radius: 1px; border-style: solid; animation-delay: 1000ms;" class="alert alert-danger animation rotateIn animation-visible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fa fa-times"></i></button>
                <b>Note: Registration Closed! Startup in progress.</b>
            </div>
        <?php endif; ?>

        <!--
        <a href="javascript:void(0);" id="maximizeChat" title="Maximize" class="btn btn-primary"><i class="fa fa-gamepad fa-lg"></i> &nbsp;Live Support</a>
        -->
    </div>
    <h2>
      <?php print '    ' . $fields['field_tournament_name']->content; ?>
    </h2>
    <h3 align="top">
      <img class="pull-left" src="http://www.umggaming.com/images/theme/flag/na.png">
      <?php print $fields['field_tournament_gaming_platform']->content; ?>
    </h3>
    <h5 align="bottom">
        <i class="fa fa-trophy fa-2x" ></i> 1st Prize: <?php print $fields['field_tournament_prize']->content; ?>
    </h5>

    <table>
        <thead>
          <tr style="background: #27ae60; color: white" >
              <td><strong>Date:</strong> <?php print $fields['field_tournament_time_1']->content; ?></td>
              <td><strong>Entry:</strong> <?php print $fields['field_tournament_entry_fee']->content; ?></td>
              <td><strong>Max Teams:</strong> <?php print $fields['field_bracket_size']->content; ?></td>
              <td><strong>Eligible Teams:</strong> need to calculate</td>
          </tr>
        </thead>
    </table>
    <table>

        <tbody>
        <tr>
            <td><strong>Start Time:</strong> <?php print $fields['field_tournament_time']->content; ?></td>
            <td><strong>Min Team Size:</strong> <?php print $fields['field_minimum_team_size']->content; ?></td>
            <td rowspan="3" class="pull-right">
                <a class="btn btn-default" value="View Bracket" href="#tab-3" data-toggle="tab"><i class="fa fa-dashboard fa-lg"></i> &nbsp; View Bracket</a>
            </td>
        </tr>
        <tr>
            <td><strong>Registration Open:</strong> <?php print $fields['field_registration_window']->content; ?></td>
            <td><strong>Max Team Size:</strong> <?php print $fields['field_maximum_team_size']->content; ?></td>
        </tr>
        <tr>
            <td><strong>Registration Close:</strong> <?php print $fields['field_registration_window_1']->content; ?></td>
            <td><strong>Bracket Type:</strong> <?php print $fields['field_tournament_type']->content; ?></td>
        </tr>
        </tbody></table>
</div>


