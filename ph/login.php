<?php
http_response_code(200);
header('Content-Type: application/json');

$username = $_POST['username'];
$timestamp = $_POST['timestamp'];
$req_token = $_POST['req_token'];
$password = $_POST['password'];

$data = [
	"logged" => true,
	"name" => $username,
	"token" => null,
	"contacts" => [],
	"bests" => [],
	"picaboos" => [],
	"message" => "",
];

echo json_encode($data);