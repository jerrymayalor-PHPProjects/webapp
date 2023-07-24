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
            <h1>Add User</h1>
                <form class="data-form" action="add_user.php" method="post" enctype="multipart/form-data">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
                        
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                        
                <label for="fileInput">Choose a File:</label>
                <input type="file" id="fileInput" name="fileInput">
                        
                <button type="submit">Submit</button>
            </form>
        </div>
    </div>
</body>
</html>
