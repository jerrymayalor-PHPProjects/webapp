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
if ($_SERVER["REQUEST_METHOD"] === "POST") {
     // Get form data
     $name = $_POST["name"];
     $email = $_POST["email"];
     // The file input requires special handling
     $file_name = $_FILES["fileInput"]["name"];
     $file_tmp = $_FILES["fileInput"]["tmp_name"];
     
     // Move the uploaded file to a desired directory (e.g., "uploads/")
     $upload_dir = "uploads/";
     $file_path = $upload_dir . $file_name;
     // move_uploaded_file($file_tmp, $file_path);

     // echo $file_path;
     
     // Insert the data into the database
     $sql = "INSERT INTO users (name, email, file_path) VALUES ('$name', '$email', '$file_path')";
     // var_dump($sql);

     if (mysqli_query($conn, $sql)) {
         echo "Data inserted successfully!";
         header("Location: users.php");
     } else {
         echo "Error: " . $sql . "<br>" . mysqli_error($conn);
     }
 }
 



