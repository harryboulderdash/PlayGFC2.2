<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>





<div class="row">
    <div id="forum">
        <div class="col-md-6">
            <table>
                <thead>
                <tr style="background-color: yellow">
                    <th align="left" colspan="4" style="background-color: goldenrod">Team 1 Roster</th>
                </tr>
                <tr>
                    <th>User</th><th>Gamertag</th><th>Social Media</th><th>Elegibiliy</th>
                </tr>
                </thead>
                <tbody>

                <!-- TEAM 1
                **********************If the row is team1 then add table entry for the user info
                -->
                <?php foreach ($rows as $id => $row): ?>
                    <?php print $row; ?>
                <?php endforeach; ?>

                <!-- TEAM 1
                **********************If the row is team1 then add table entry for the user info
                -->

                </tbody>
            </table>
        </div>
    </div>
</div>