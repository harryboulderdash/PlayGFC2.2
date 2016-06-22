<?php

/**
[title] == Content: Title
[field_gamertag] == User: PSN Gamertag
[picture] == User: Picture
[field_team_member_role] == Team Members: Team Member Role
[name] == User: Name
[id] == Team Members: Id
[nid] == Content: Nid
[id_1] == Team Members: Id
 * [field_team_member_status] == Team Members: Team Member Status
 * TournamentURL
%1 == Content: Nid title
!1 == Content: Nid input

PS GAMERTAG	LOGO	ROLE	USERNAME	TEAM MEMBER ENTITY ID
 */
?>


<tr>
    <td><?php print $fields['field_gamertag']->content; ?></td>
    <td><?php print $fields['field_team_member_role']->content; ?></td>
    <td><?php print $fields['name']->content; ?></td>
    <td><?php print $fields['field_team_member_status']->content; ?></td>
    <td>
    <?php
        //invoke form for each row and pass parameters to it
        echo render(drupal_get_form('manage_teams_form_removeMember_form',$fields['id_1']->content,$fields['name']->content,$fields['nid']->content,$fields['php']->content))
    ?>
    </td>

</tr>