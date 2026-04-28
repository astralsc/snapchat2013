<?php
http_response_code(200);
header('Content-Type: application/json');

$username = $_POST['username'];
$timestamp = $_POST['timestamp'];
$req_token = $_POST['req_token'];
$password = $_POST['password'];

$data = [
	"message" => "Password reset feature is currently not implemented. Please contact support for assistance."
];

echo json_encode($data);