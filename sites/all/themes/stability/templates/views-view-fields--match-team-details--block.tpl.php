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
 * /*

AVAILABLE FIELDS:


[title] == Content: Title
[field_match_team_1] == Content: Match Team 1
[field_match_team_1_score] == Content: Match Team 1 Score
[field_team_name] == Content: Team Name
[field_team_member_user] == Team Members: Team Member User
[field_user_facebook_link] == User: Facebook link
[name] == User: Name
[field_twitch_handle] == User: Twitch Handle
[field_twitter_handle] == User: Twitter Handle
 * field_youtube_link
[uid] == User: Uid
[uuid] == User: User UUID
[field_team_member_role_1] == Team Members: Team Member Role
[field_user_facebook_link_1] == User: Facebook link
[field_gamertag] == User: PSN Gamertag
[field_xbox_gamertag] == User: Xbox Gamertag
[field_xbox_gamertag-value] == Raw value
[field_xbox_gamertag-format] == Raw format
%1 == Content: Match Challonge ID (field_match_challonge_id) title
!1 == Content: Match Challonge ID (field_match_challonge_id) input
 * [field_tournament_gaming_platform] == Content: Tournament Gaming Platform


 */
?>


<tr>
    <td><?php print $fields['field_team_member_user']->content; ?></td>

    <!--//field_xbox_gamertag -->

    <td>
        <?php if($fields['field_tournament_gaming_platform']->content == "XBOX Live"): ?>
            <?php print $fields['field_xbox_gamertag']->content; ?>
        <?php endif; ?>

        <?php if($fields['field_tournament_gaming_platform']->content == "PS4"): ?>
            <?php print $fields['field_gamertag']->content; ?>
        <?php endif; ?>
    </td>

    <td>
        <?php if(isset($fields['field_twitch_handle']->content)): ?>
            <a href="http://www.twitch.tv/<?php print $fields['field_twitch_handle']->content; ?>" target="_blank"><i class="fa fa-twitch fa-lg"></i></a>
        <?php endif; ?>

        <?php if(isset($fields['field_twitter_handle']->content)): ?>
                <a href="https://twitter.com/<?php print $fields['field_twitter_handle']->content; ?>" target="_blank"><i class="fa fa-twitter fa-lg"></i></a>
        <?php endif; ?>

        <?php if(isset($fields['field_youtube_link']->content)): ?>
            <a href="https://www.youtube.com/user/<?php print $fields['field_youtube_link']->content; ?>" target="_blank"> <i class="fa fa-youtube fa-lg"></i></a>
        <?php endif; ?>

        <?php if(isset($fields['field_user_facebook_link_1']->content)): ?>
            <a href="https://www.facebook.com/<?php print $fields['field_user_facebook_link_1']->content; ?>" target="_blank"><i class="fa fa-facebook-square fa-lg"></i></a>
        <?php endif; ?>

    </td>

    <td>
        <i class="fa fa-check-circle" style="color: green;"></i>
    </td>
</tr>