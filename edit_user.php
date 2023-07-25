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
// Check if the form is submitted for updating data
if (isset($_POST['update'])) {
     $id = $_POST['id'];
     $name = $_POST['name'];
     $email = $_POST['email'];
 
     // Update the data in the database
     $sql = "UPDATE users SET name='$name', email='$email' WHERE id='$id'";
     if (mysqli_query($conn, $sql)) {
         echo "Data updated successfully!";
         header("Location: users.php");
     } else {
         echo "Error updating data: " . mysqli_error($conn);
     }
 }
 
 // Retrieve the data to pre-fill the form
 if (isset($_GET['id'])) {
     $id = $_GET['id'];
     $sql = "SELECT * FROM users WHERE id='$id'";
     $result = mysqli_query($conn, $sql);
     $row = mysqli_fetch_assoc($result);
 }
 
 mysqli_close($conn);



