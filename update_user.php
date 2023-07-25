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
                <li><a href="index.php"><i class="fa fa-home"></i></a></li>
                <li><a href="users.php"><i class="fa fa-user"></i></a></li>
                <li><a href="db.php"><i class="fa fa-database"></i></a></li>
                <li><a href="#"><i class="fa fa-pencil"></i></a></li>
                <li><a href="#"><i class="fa fa-trash"></i></a></li>
                <!-- Add more menu items as needed -->
            </ul>
        </div>
        <div class="main-panel">
            <h1>Update User</h1>
            <?php 
                
            
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
