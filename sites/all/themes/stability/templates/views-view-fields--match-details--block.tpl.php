<?php
/*

AVAILABLE FIELDS:


[title] == Content: Title
[field_match_team_1] == Content: Match Team 1
[field_match_team_1_score] == Content: Match Team 1 Score
[field_match_team_2] == Content: Match Team 2
[field_match_team_2_score] == Content: Match Team 2 Score
[field_team_challonge_id] == Content: Team Challonge ID
[field_team_id] == Content: Team ID
[field_team_logo] == Content: Team Logo
[field_team_losses] == Content: Team Losses
[field_team_name] == Content: Team Name
[field_team_wins] == Content: Team Wins
[field_team_member_role] == Team Members: Team Member Role
[field_team_member_user] == Team Members: Team Member User
[created] == User: Created date
[field_user_facebook_link] == User: Facebook link
[name] == User: Name
[picture] == User: Picture
[field_gamertag] == User: PSN Gamertag
[field_twitch_handle] == User: Twitch Handle
[field_twitter_handle] == User: Twitter Handle
[uid] == User: Uid
[uuid] == User: User UUID
[field_xbox_gamertag] == User: Xbox Gamertag
[field_youtube_link] == User: YouTube Channel
[field_tournament_name] == Content: Name
[field_tournament_challonge_id] == Content: Tournament Challonge ID
[field_tournament_time] == Content: Tournament Time
[field_match_host_order] == Content: Match Host Order
[field_match_maps] == Content: Match Maps
[field_team_challonge_id_1] == Content: Team Challonge ID
[field_team_id_1] == Content: Team ID
[field_team_logo_1] == Content: Team Logo
[field_team_losses_1] == Content: Team Losses
[field_team_name_1] == Content: Team Name
[field_team_wins_1] == Content: Team Wins
[field_team_member_role_1] == Team Members: Team Member Role
[field_team_member_user_1] == Team Members: Team Member User
[field_user_facebook_link_1] == User: Facebook link
[field_gfc_player_rank] == User: GFC Player Rank
[name_1] == User: Name
[picture_1] == User: Picture
[field_gamertag_1] == User: PSN Gamertag
[field_twitch_handle_1] == User: Twitch Handle
[field_twitter_handle_1] == User: Twitter Handle
[uid_1] == User: Uid
[uuid_1] == User: User UUID
[field_xbox_gamertag_1] == User: Xbox Gamertag
[field_youtube_link_1] == User: YouTube Channel
[field_tournament_status] == Content: Tournament Status
[field_match_status] == Content: Match Status
[field_match_status-value] == Raw value
%1 == Content: Match Challonge ID (field_match_challonge_id) title
!1 == Content: Match Challonge ID (field_match_challonge_id) input


*/
?>

<?php

 ctools_include('modal');
    ctools_include('ajax');
    ctools_modal_add_js();
    ctools_add_js('ajax-responder');


$sample_style = array(
    'ctools-sample-style' => array(
        'modalSize' => array(
            'type' => 'fixed',
            'width' => 450,
            'height' => 400,
            'addWidth' => 1,
            'addHeight' => 0,
        ),
        'modalOptions' => array(
            'opacity' => .5,
            'background-color' => '#000',
        ),
        'animation' => 'fadeIn',
    ),
);

  drupal_add_js($sample_style, 'setting');


?>



<div class="row">
    <div class="pricing-table pricing-table__style3">

        <!-- Team One Section-->
        <div class="col-md-2">
            <div class="plan popular style3" style="border-width: 1px;border-color: grey">
                <header class="pricing-head">

                    <div class="circled">
                        <div class="circled-inner">
                            <i class="fa fa-group fa-5x" style="color:white; padding: 10px">
                                <span class="price">
                                    <small>

                                        <?php
                                        $status = $fields['field_match_status']->content;
                                        $score1 = $fields['field_match_team_1_score']->content;
                                        $score2 = $fields['field_match_team_2_score']->content;

                                        if(!($status == "Scores Reported")){
                                            Print 'TBD';
                                        }
                                        elseif($score1 > $score2){print 'Win: '. $score1;}
                                        elseif($score2 > $score1){print 'Loss: '. $score1;}

                                        ?>

                                    </small>
                                </span>
                            </i>

                        </div>
                    </div>
                    <h3 style="color: #000000;"><?php print $fields['field_team_name']->content; ?></h3>
                </header>
                <div class="pricing-body" align="left" style="font-size: 13px;font-family: 'Oswald', sans-serif;margin: 0 0 0 0;">
                    <ul>
                        <li>Wins: <?php print $fields['field_team_wins']->content; ?></li>
                        <li>Losses: <?php print $fields['field_team_losses']->content; ?></li>
                    </ul>
                </div>

            </div>
        </div>

        <!-- Match Status and details section-->

        <div class="col-md-2">

            <div style="color:grey;font-size: 20px;text-align: center;margin: -1em 0 0 0 ;font-family: 'Oswald', sans-serif;">
                <i class="fa fa-hand-o-left fa-lg " style="color: grey"></i>
                &nbsp;&nbsp;&nbsp;&nbsp;Vs.&nbsp;&nbsp;&nbsp;&nbsp;
                <i class="fa fa-hand-o-right fa-lg" style="color: grey"></i>
            </div>

            <div class="plan style3" style="background-color:lightgrey;padding: 1px;border-width: 2px;border-color: goldenrod">
                <div class="row" align="top">
                    <div style="color:black;font-size: 13px;font-family: 'Oswald', sans-serif;margin: 1em 0 0 0;">Status: &nbsp; <?php print $status; ?></div>
                </div>

                <div class="row" align="left" style="padding-left: 20px">
                    <p></p>
                    <h5 style="color:goldenrod">Maps:</h5>
                    <div style="font-size: 13px;font-family: 'Oswald', sans-serif;margin: 0 0 0 0;">
                        <?php
                            //turn maps string into array and iterate them onto page
                            $maps = str_getcsv($fields['field_match_maps']->content);

                            foreach($maps as $map){
                                print $map . '<br>';
                            }
                        ?>
                    </div>
                    <br>
                    <h5 style="color:goldenrod">Hosts:</h5>
                    <div style="font-size: 13px;font-family: 'Oswald', sans-serif;margin: 0 0 0 0;">
                        <?php
                            //turn hosts string into array and iterate them onto page
                            $hosts = str_getcsv($fields['field_match_host_order']->content);

                            foreach($hosts as $host){
                                print $host . '<br>';
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>


        <!-- Team 2 section-->

        <div class="col-md-2">
            <div class="plan popular style3" style="border-width: 1px;border-color: grey">
                <header class="pricing-head">

                    <div class="circled">
                        <div class="circled-inner">
                            <i class="fa fa-group fa-5x" style="color:goldenrod; padding: 10px">
                                <span class="price">
                                    <small>
                                        <?php

                                        if(!($status == "Scores Reported")){
                                            Print 'TBD';
                                        }
                                        elseif($score1 > $score2){print 'Loss: '. $score2;}
                                        elseif($score2 > $score1){print 'Win: '. $score2;}

                                        ?>

                                    </small>
                                </span>
                            </i>

                        </div>
                    </div>
                    <h3 style="color: #000;"><?php print $fields['field_team_name_1']->content; ?></h3>
                </header>
                <div class="pricing-body" align="left" style="font-size: 13px;font-family: 'Oswald', sans-serif;margin: 0 0 0 0;">
                    <ul>
                        <li>Wins: <?php print $fields['field_team_wins']->content; ?></li>
                        <li>Losses: <?php print $fields['field_team_losses']->content; ?></li>
                    </ul>
                </div>

            </div>
        </div>

    </div>
</div>

<!--
USER, Gamertag, Social Media, Eligability

-->
    <?php print views_embed_view('my_matches_99','block_1'); ?>
    <?php print views_embed_view('my_matches_button','block'); ?>


    <?php print views_embed_view('match_team_details','block'); ?>
    <?php print views_embed_view('match_team_2_details','block'); ?>


