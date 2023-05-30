<?php
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'litterless';

$connection = new mysqli($host, $username, $password, $database);

if ($connection->connect_error) {
    die('Connection failed: ' . $connection->connect_error);
} else {
    echo "Connection successfull";
}

$acc_name = $_POST['username'];
$acc_password = $_POST['password'];


// $sql = "INSERT INTO accounts (username, password) VALUES ('$acc_name', '$acc_password')";
// $result = $connection->query($sql);

// Insert into the accounts table and retrieve the accountID
$query = "INSERT INTO accounts (name, email, registration_date) VALUES (?, ?, ?)";
$stmt = $mysqli->prepare($query);
$stmt->bind_param("sss", $name, $email, $registrationDate); // Replace $name, $email, $registrationDate with actual values
$stmt->execute();

// Retrieve the generated accountID
$accountId = $mysqli->insert_id;

// Insert into the Residents table using the retrieved accountID
$query = "INSERT INTO Residents (accountID, location) VALUES (?, ?)";
$stmt = $mysqli->prepare($query);
$stmt->bind_param("is", $accountId, $location); // Replace $location with the actual location value
$stmt->execute();


if ($result === true) {
    // Signup successful
} else {
    // Signup failed
}

$password = 'password123';
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

$storedHashedPassword = '...'; // Retrieved from the database
$userProvidedPassword = 'password123';

if (password_verify($userProvidedPassword, $storedHashedPassword)) {
    // Passwords match
    // Proceed with authentication
} else {
    // Passwords do not match
    // Handle authentication failure
}

// Assuming you have received the username and password from the login form
$username = $_POST['username'];
$password = $_POST['password'];

// Retrieve the hashed password from the database based on the provided username
// Perform a database query here to fetch the corresponding row

// Assuming you have retrieved the hashed password from the database
$storedHashedPassword = '...';

// Verify the provided password against the stored hashed password
if (password_verify($password, $storedHashedPassword)) {
    // Passwords match
    // Proceed with successful login
    echo "Login successful";
} else {
    // Passwords do not match
    // Handle login failure
    echo "Invalid username or password";
}

// Query to fetch data
$query = "SELECT * FROM table_name";
$result = $mysqli->query($query);

// Check if query execution was successful
if ($result) {
    // Fetch rows from the result set
    while ($row = $result->fetch_assoc()) {
        // Access individual columns of each row
        $column1 = $row['column1'];
        $column2 = $row['column2'];
        
        // Do something with the data
        // ...
    }
    
    // Free the result set
    $result->free();
} else {
    // Handle query execution error
    echo "Error: " . $mysqli->error;
}

// Close the database connection
$mysqli->close();


?>
