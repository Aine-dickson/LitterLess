<?php
    include('./dbConnnect.php');

    // Retrieve the request body
    $requestBody = file_get_contents('php://input');

    // Convert the JSON string to an associative array
    $data = json_decode($requestBody, true);

    $password = $data['password'];
    $email = $data['email'];

    // Perform the database query to insert the values
    $query = "SELECT * FROM accounts WHERE email='$email' AND password='$password'";
    $return_value = $mysqli->query($query);
    
?>