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
                <li><a href="users.php"><i class="fa fa-user"></i></a></li>
                <li><a href="add_user.php"><i class="fa fa-plus"></i></a></li>
                <!-- Add more menu items as needed -->
            </ul>
        </div>
        <div class="main-panel">
            <h1>Home Dashboard</h1>
            <h3>All Users</h3>

            <br>
            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>File</th>
                            <th>Edit</th>
                            <th>Delete</th>
                            <!-- Add more table headers as needed -->
                        </tr>
                    </thead>
                    <tbody>
                            <?php 
                                // Process the result (you can loop through the rows to display or manipulate the data)
                                if (mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                                
                                <tr>
                                    <td><?php echo $row['id']; ?></td>
                                    <td><?php echo $row['name']; ?></td>
                                    <td><?php echo $row['email']; ?></td>
                                    <td> 
                                        <a href='preview_file.php?file_path=<?php echo urlencode($row['file_path']); ?>'>
                                            <i class='fa fa-eye'></i>
                                        </a>
                                    </td>
                                    <td>
                                        <a href='update_user.php?id=<?php echo $row['id'] ; ?>'>
                                            <i class='fa fa-pencil'></i>
                                        </a>
                                    </td>
                                    <td>
                                        <a href='delete_user.php?id=<?php echo $row['file_path']; ?>'>
                                            <i class='fa fa-trash'></i>
                                        </a>
                                    </td>
                                </tr>         
                            <?php               
                                    }
                                } else {
                                    echo "No records found.";
                                }
                                    
                            ?>
                        <!-- Add more table rows as needed -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
