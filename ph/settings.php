<?php
http_response_code(200);
header('Content-Type: application/json');

$action = $_POST['action'];
$username = $_POST['username'];
$timestamp = $_POST['timestamp'];
$req_token = $_POST['req_token'];
$email = $_POST['email'];

$data = [
	"message" => "Settings updated!",
];

echo json_encode($data);