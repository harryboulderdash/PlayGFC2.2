<?php



/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */

/**
[title] == Content: Title
[field_gamertag] == User: PSN Gamertag
[picture] == User: Picture
[field_team_member_role] == Team Members: Team Member Role
[name] == User: Name
[id] == Team Members: Id
[nid] == Content: Nid
[id_1] == Team Members: Id
%1 == Content: Nid title
!1 == Content: Nid input

PS GAMERTAG	LOGO	ROLE	USERNAME	TEAM MEMBER ENTITY ID
 */
?>





<div class="row">
    <div id="forum">
        <div class="col-md-6">
            <table>
                <thead>
                <tr>
                    <th>Gamertag</th><th>Role</th><th>Username</th><th>Status</th><th></th>
                </tr>
                </thead>
                <tbody>

                    <?php foreach ($rows as $id => $row): ?>
                        <?php print $row; ?>
                    <?php endforeach; ?>


                </tbody>
            </table>
        </div>
    </div>
</div>