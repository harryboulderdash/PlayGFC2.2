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
 *
 * field_tournament_challonge_url
 * if(!getTeamByTournamentByUser($playerUID, $tournamentID))
 */

//SET USER OBJECT
$user = $GLOBALS['user'];

?>

<?php $status = $fields['field_tournament_status']->content;?>

<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <h2>
                <?php print $fields['field_tournament_name']->content; ?>
            </h2>
        </div>
        <div class="col-sm-6">
            <a class="btn btn-default" value="View Bracket" href="#tab-3" data-toggle="tab"><i class="fa fa-dashboard fa-lg"></i> &nbsp; View Bracket</a>
            &nbsp;
            <?php if($status=="Pending"): ?>
                <?php if(getTeamByTournamentByUser($user->uid, $fields['field_tournament_challonge_url']->content)): ?>
                    <a href="<?php print base_path() . 'node/312/' . $fields['field_tournament_challonge_url']->content ?>" class="btn btn-primary active">
                        <i class="fa fa-wrench fa-lg"></i>
                        &nbsp;Manage Team
                    </a>
                <?php else: ?>
                    <a href="<?php print base_path() . 'node/312/'. $fields['field_tournament_challonge_url']->content ?>" class="btn btn-primary active">
                        <i class="fa fa-user-plus fa-lg"></i>
                        &nbsp;Join Tournament
                    </a>
                <?php endif; ?>
            <?php endif; ?>

            <?php if($status=="Registration Closed"): ?>
                <div data-animation="rotateIn" data-animation-delay="1000" style="margin-left: 5px; margin-right: 5px; border-radius: 1px; border-style: solid; animation-delay: 1000ms;" class="alert alert-danger animation rotateIn animation-visible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                        <i class="fa fa-times"></i>
                    </button>
                    <b>Note: Registration Closed! Startup in progress.</b>
                </div>
            <?php endif; ?>

        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <h3>
                <img src="http://www.umggaming.com/images/theme/flag/na.png">
                <?php print $fields['field_tournament_gaming_platform']->content; ?>
            </h3>
        </div>
    </div>
    <div class="row" style="margin-bottom: 10">
        <div class="col-sm-2 bg-primary">
            <strong>Date:</strong> <?php print $fields['field_tournament_time_1']->content; ?>
        </div>
        <div class="col-sm-2 bg-primary">
            <strong>Entry:</strong> <?php print $fields['field_tournament_entry_credits']->content; ?>
        </div>
        <div class="col-sm-2 bg-primary">
            <strong>Max Teams:</strong> <?php print $fields['field_bracket_size']->content; ?>
        </div>
        <div class="col-sm-2 bg-primary">
            <strong>Eligible Teams:</strong> <?php print $fields['field_field_num_eligible_teams']->content; ?>
        </div>
        <div class="col-sm-4">

        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-sm-4" style="margin-bottom: 10">
            <i class="fa fa-trophy fa-2x" style="color:gold"></i> 1st Prize: <?php print $fields['field_tournament_prize']->content; ?><br>
            <i class="fa fa-trophy fa-2x" style="color:silver"></i> 2nd Prize: <?php print $fields['field_tournament_prize']->content; ?><br>
            <i class="fa fa-trophy fa-2x" style="color:brown"></i> 3rd Prize: <?php print $fields['field_tournament_prize']->content; ?>

        </div>
        <div class="col-sm-4" style="margin-bottom: 10">
            <strong>Start Time:</strong> <?php print $fields['field_tournament_time']->content; ?><br>
            <strong>Registration Open:</strong> <?php print $fields['field_registration_window']->content; ?><br>
            <strong>Registration Close:</strong> <?php print $fields['field_registration_window_1']->content; ?>
        </div>
        <div class="col-sm-4">
            <strong>Min Team Size:</strong> <?php print $fields['field_minimum_team_size']->content; ?><br>
            <strong>Max Team Size:</strong> <?php print $fields['field_maximum_team_size']->content; ?><br>
            <strong>Bracket Type:</strong> <?php print $fields['field_tournament_type']->content; ?>
        </div>

    </div>
</div>



