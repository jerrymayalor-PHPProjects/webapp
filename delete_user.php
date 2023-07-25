<?php 

// require "db.php";

// Database credentials
$host = "localhost"; // Change this to your database host if it's different
$username = "root"; // Replace with your database username
$password = ""; // Replace with your database password
$database = "webapp"; // The name of your database

// Create a connection to the database
$conn = mysqli_connect($host, $username, $password, $database);

// Process form data
// Check if the 'id' of the user to be deleted is provided in the query string
if (isset($_GET['id'])) {
     $id = $_GET['id'];
 
     // Delete the user record from the database
     $sql = "DELETE FROM users WHERE id='$id'";
     if (mysqli_query($conn, $sql)) {
         echo "User record deleted successfully!";
         header("Location: users.php");
     } else {
         echo "Error deleting user record: " . mysqli_error($conn);
     }
 } else {
     echo "User ID not provided.";
 }
 
 // Close the database connection
 mysqli_close($conn);



