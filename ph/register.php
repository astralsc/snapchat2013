<?php
http_response_code(200);
header('Content-Type: application/json');

$timestamp = $_POST['timestamp'];
$req_token = $_POST['req_token'];
$email = $_POST['email'];
$password = $_POST['password'];

$data = [
	"logged" => true,
	"snapchat_phone_number" => "+15557350485",
	"token" => null,
	"email" => $email
];

echo json_encode($data);