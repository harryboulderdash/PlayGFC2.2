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
[created] == User: Created date
[field_user_email] == User: Email
[field_user_facebook_link] == User: Facebook link
[field_first_name] == User: First Name
[field_gfc_player_rank] == User: GFC Player Rank
[access] == User: Last access
[field_last_name] == User: Last Name
[field_sms_number] == User: Mobile # for text alerts
[name] == User: Name
[picture] == User: Picture
[field_gamertag] == User: PSN Gamertag
[field_twitch_handle] == User: Twitch Handle
[field_twitter_handle] == User: Twitter Handle
[uid] == User: Uid
[field_xbox_gamertag] == User: Xbox Gamertag
[field_youtube_link] == User: YouTube Channel
[field_youtube_link-value] == Raw value
[field_youtube_link-format] == Raw format


 */
?>


<tr>
    <td><?php print $fields['name']->content; ?></td>
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

        <?php if(isset($fields['field_user_facebook_link']->content)): ?>
            <a href="https://www.facebook.com/<?php print $fields['field_user_facebook_link']->content; ?>" target="_blank"><i class="fa fa-facebook-square fa-lg"></i></a>
        <?php endif; ?>

    </td>
    <td><i class="fa fa-check-circle" style="color: green;"></i></td>
</tr>