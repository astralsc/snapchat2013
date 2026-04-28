<?php
http_response_code(200);
header('Content-Type: application/json');

$numbers = $_POST['numbers'];
$countryCode = $_POST['countryCode'];
$username = $_POST['username'];
$timestamp = $_POST['timestamp'];
$req_token = $_POST['req_token'];

$data = [
	"logged" => true
];

echo json_encode($data);