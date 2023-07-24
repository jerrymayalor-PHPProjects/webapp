<?php 

include "db.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern Dashboard</title>
    
    <link rel="stylesheet" href="custom-styles.css">
    <script src="main.js" defer></script>

    <!-- Add any additional libraries or stylesheets here if needed -->
    <script src="https://kit.fontawesome.com/ac574313ed.js" crossorigin="anonymous"></script>

</head>
<body>
    <div class="dashboard">
        <div class="sidebar">
            <div class="logo">Home Dashboard</div>
            <ul class="menu">
                <li><a href="index.php"><i class="fa fa-home"></i></a></li>
                <li><a href="users.php"><i class="fa fa-user"></i></a></li>
                <li><a href="#"><i class="fa fa-file"></i></a></li>
                <li><a href="#"><i class="fa fa-pencil"></i></a></li>
                <li><a href="#"><i class="fa fa-trash"></i></a></li>
                <!-- Add more menu items as needed -->
            </ul>
        </div>
        <div class="main-panel">
            <h1>File Preview</h1>
            
            <?php
            if (isset($_GET['file_path'])) {
                // Get the file path from the query parameter and sanitize it
                $file_path = $_GET['file_path'];
                $file_path = realpath($file_path); // Canonicalize the file path

                // Verify that the file path is within the expected "uploads" directory
                $uploads_directory = realpath('uploads'); // Get the absolute path to the uploads directory
                if ($file_path && strpos($file_path, $uploads_directory) === 0) {
                    // File path is valid, proceed with serving the file
                    echo $file_path;

                    // ... Rest of the code for file serving ...
                } else {
                    // File path is invalid or outside the designated directory
                    echo "Invalid file path.";
                }
            } else {
                echo "File path not provided.";
            }
            ?>

        </div>
    </div>
</body>
</html>

