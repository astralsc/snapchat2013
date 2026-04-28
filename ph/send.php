<?php
http_response_code(200);
header('Content-Type: application/json');

$media_id = $_POST['media_id'];
$username = $_POST['username'];
$time = $_POST['time'];
$timestamp = $_POST['timestamp'];
$req_token = $_POST['req_token'];
$recipent = $_POST['recipent'];

$data = [
	"logged" => true
];

echo json_encode($data);