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
            <div class="logo">User Dashboard</div>
            <ul class="menu">
                <li><a href="users.php"><i class="fa fa-user"></i></a></li>
                <li><a href="add_user.php"><i class="fa fa-plus"></i></a></li>
                <!-- Add more menu items as needed -->
            </ul>
        </div>
        <div class="main-panel">
            <h1>Update User</h1>
            <?php 

              // Database credentials
               $host = "localhost"; // Change this to your database host if it's different
               $username = "root"; // Replace with your database username
               $password = ""; // Replace with your database password
               $database = "webapp"; // The name of your database

               // Create a connection to the database
               $conn = mysqli_connect($host, $username, $password, $database);
                // Retrieve the data to pre-fill the form
               if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    $sql = "SELECT * FROM users WHERE id='$id'";
                    $result = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_assoc($result);
               }
            
            ?>
               <form method="post" action="edit_user.php">
                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" value="<?php echo $row['name']; ?>" required>

                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" value="<?php echo $row['email']; ?>" required>

                    <button type="submit" name="update">Update Data</button>
               </form>
        </div>
    </div>
</body>
</html>
