<?php
// Database credentials
$host = "localhost"; // Change this to your database host if it's different
$username = "root"; // Replace with your database username
$password = ""; // Replace with your database password
$database = "webapp"; // The name of your database

// Create a connection to the database
$conn = mysqli_connect($host, $username, $password, $database);

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Connection successful! You can perform database operations here.
// For example, let's execute a simple query to fetch data from a table named "users":
$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);


// Close the database connection when you're done
mysqli_close($conn);
?>

