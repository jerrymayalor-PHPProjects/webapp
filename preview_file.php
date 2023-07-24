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
               $file_path = $_GET['file_path'];
            
                    echo  $file_path;


                    // // Check if the file exists
                    if (file_exists($file_path)) {
                            // Determine the file type
                            $file_info = pathinfo($file_path);
                            $file_extension = strtolower($file_info['extension']);

                            // Set appropriate headers for the file type
                            header("Content-type: application/octet-stream");
                            header("Content-Disposition: inline; filename=\"" . basename($file_path) . "\"");

                            // Read and output the file content
                            readfile($file_path);
                            exit;
                    } else {
                            echo "File not found.";
                    }
               } 
               else {
                    echo "Invalid file path.";
               }
          ?>
        </div>
    </div>
</body>
</html>

