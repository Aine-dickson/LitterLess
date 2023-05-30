<?php
    include('./dbConnnect.php');

    // Retrieve the request body
    $requestBody = file_get_contents('php://input');

    // Convert the JSON string to an associative array
    $data = json_decode($requestBody, true);

    // Extract the necessary values from the data array
    $waste_type = $data['type'];
    $waste_qty = $data['quantity'];
    $waste_location = $data['location'];
    $disposal_method = $data['method'];

    // Perform the database query to insert the values
    $query = "INSERT INTO accounts (type, contact, password, email) VALUES (?, ?, ?, ?)";
    $stmt = $mysqli->prepare($query);
    $stmt->bind_param("ssss", $acc_type, $contact, $password, $email);
    $stmt->execute();

    // Return a response indicating the success or failure of the signup process
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
if ($stmt->affected_rows > 0) {
    $response = array('message' => 'Account created sucessfull');
    echo json_encode($response, JSON_FORCE_OBJECT);
} else {
    $response = array('message' => 'Account creation unsucessfull');
    echo json_encode($response, JSON_FORCE_OBJECT);
}
?>
