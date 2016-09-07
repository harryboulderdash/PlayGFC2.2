<?php
/**
 * Created by PhpStorm.
 * User: mikedemick
 * Date: 9/3/16
 * Time: 2:40 PM
 */

$strJSON = '
[
  {"participant":
    {"id":44839568,
      "tournament_id":2804189,
      "name":"Olympus is dad",
      "seed":1,
      "active":true,
      "created_at":"2016-09-02T21:44:22.955-04:00",
      "updated_at":"2016-09-02T21:44:22.955-04:00",
      "invite_email":null,
      "final_rank":3,
      "misc":"57ca2b0b8dbb0",
      "icon":null,
      "on_waiting_list":false,
      "invitation_id":null,
      "group_id":null,
      "checked_in_at":null,
      "challonge_username":null,
      "challonge_email_address_verified":null,
      "removable":false,
      "participatable_or_invitation_attached":false,
      "confirm_remove":true,
      "invitation_pending":false,
      "display_name_with_invitation_email_address":"Olympus is dad",
      "email_hash":null,
      "username":null,
      "display_name":"Olympus is dad",
      "attached_participatable_portrait_url":null,
      "can_check_in":false,
      "checked_in":false,
      "reactivatable":false,
      "group_player_ids":[]}},
  {"participant":
    {"id":44830562,
      "tournament_id":2804189,
      "name":"Puh Squad",
      "seed":2,
      "active":true,
      "created_at":"2016-09-02T18:24:37.618-04:00",
      "updated_at":"2016-09-02T18:24:37.618-04:00",
      "invite_email":null,
      "final_rank":3,
      "misc": "57c9fc3a86636",
      "icon":null,
      "on_waiting_list":false,
      "invitation_id":null,
      "group_id":null,
      "checked_in_at":null,
      "challonge_username":null,
      "challonge_email_address_verified":null,
      "removable":false,
      "participatable_or_invitation_attached":false,
      "confirm_remove":true,
      "invitation_pending":false,
      "display_name_with_invitation_email_address":"Puh Squad",
      "email_hash":null,
      "username":null,
      "display_name":"Puh Squad",
      "attached_participatable_portrait_url":null,
      "can_check_in":false,
      "checked_in":false,
      "reactivatable":false,
      "group_player_ids":[]}}]';

///*//$json = '{"foo-bar": 12345}';
//
//$obj = json_decode($strJSON);
//var_dump($obj);
//print_r($obj[0]);
//
//// Loop through Object
//  foreach($obj->participant as $team) {
//      echo $team->final_rank . "<br>";
//  }*/

$c = new ChallongeAPI('XqrMnBPs15MvmX0izddB4zyIHKswRCoaIAyq4cTt');
$participants = $c->getParticipants('2656428');

foreach ($participants as $participant) {

    print_r(str_replace(' ', '', $participant->{'final-rank'}));

}


