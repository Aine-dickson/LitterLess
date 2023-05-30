<?php

header("Access-Control-Allow-Origin: http://localhost:5173");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type");

// Rest of your code


$database = "litterless";
$server_name = "root";
$server_password = ""; // <-- Provide the correct password here
$host = "localhost";
$response = new stdClass();

// Create a new mysqli object and check for connection errors
$mysqli = new mysqli($host, $server_name, $server_password, $database);
if ($mysqli->connect_error) {
    $response->message = "Database connection unsuccessful: " . $mysqli->connect_error;
    echo json_encode($response);
    exit(); // Terminate the script after sending the response
} else {
    $response->message = "Database connection successful :)";
    echo json_encode($response);
}
?>
