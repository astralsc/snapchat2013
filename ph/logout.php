<?php
http_response_code(200);
header('Content-Type: application/json');

$events = $_POST['events'];
$username = $_POST['username'];
$json = $_POST['json'];
$timestamp = $_POST['timestamp'];
$req_token = $_POST['req_token'];

$data = [
	"logged" => false
];

echo json_encode($data);