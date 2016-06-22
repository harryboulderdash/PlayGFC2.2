<?php
/*
<!--

[field_game_image_sm_1] == Content: game_image_sm
[field_tournament_challonge_url] == Content: Tournament_Challonge_URL
[field_tournament_name] == Content: Name

<ul class="latest-posts-list">
    <?php print $rows; ?>
</ul>
-->
*/
?>

<li>
    <strong>
        <a href="  <?php print '/node/493/' . $fields['field_tournament_challonge_url']->content; ?> ">
            <?php print $fields['field_game_image_sm_1']->content; ?>
            <?php print $fields['field_tournament_name']->content; ?>
        </a>
    </strong>
</li>
