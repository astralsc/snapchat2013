<?php
http_response_code(200);
header('Content-Type: application/json');

$friend_usernames = $_POST['friend_usernames'];
$username = $_POST['username'];
$timestamp = $_POST['timestamp'];
$req_token = $_POST['req_token'];

$data = [
	"logged" => true
];

echo json_encode($data);