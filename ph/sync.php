<?php
http_response_code(200);
header('Content-Type: application/json');

$events = $_POST['events'];
$username = $_POST['username'];
$json = $_POST['json'];
$timestamp = $_POST['timestamp'];
$req_token = $_POST['req_token'];

$getUsersFriends["friends"][] = array(
	"can_see_custom_stories" => true,
    "name" => $username,
    "display" => $username,
    "type" => 0
);

$data = [
    "bests" => array(
        //"someguy"
    ),
    "score" => 0,
    "number_of_best_friends" => 0, //1
    "received" => 0,
    "logged" => true,
    "added_friends" => [],
    "beta_expiration" => 0,
    "beta_number" => -1,
    "requests" => [], // todo create a proper sync api for ph
    "sent" => 0,
    "story_privacy" => "FRIENDS",
    "username" => $username,
    "snaps" => [],
    "friends" => $getUsersFriends["friends"],
    // 2 blocked // 1 pending // 0 friend
    "device_token" => "",
    "snap_p" => 1,
    "mobile_verification_key" => base64_encode(time() * 1000 . ":" . $username) . "DONOTSEND!", //base64 number:username
    "recents" => array(//   "teamsnapchat"
    ),
    "added_friends_timestamp" => 0,
    "notification_sound_setting" => "OFF",
    "snapchat_phone_number" => "+15557350485",
    "auth_token" => null,
    "image_caption" => false,
    "is_beta" => false,
    "current_timestamp" => time() * 1000,
    "can_view_mature_content" => false,
    "email" => $email,
    "should_send_text_to_verify_number" => false,
    "mobile" => 0
];

echo json_encode($data);