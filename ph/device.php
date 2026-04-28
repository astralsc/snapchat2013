<?php
http_response_code(200);
header('Content-Type: application/json');

$username = $_POST['username'];
$type = $_POST['type'];
$timestamp = $_POST['timestamp'];
$req_token = $_POST['req_token'];

$data = [
	"logged" => true
];

echo json_encode($data);