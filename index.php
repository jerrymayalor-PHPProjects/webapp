<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern Dashboard</title>
    <link rel="stylesheet" href="custom-styles.css">
    <script src="main.js" defer></script>
    <!-- Add any additional libraries or stylesheets here if needed -->
</head>
<body>
    <div class="dashboard">
        <div class="sidebar">
            <div class="logo">Your Dashboard</div>
            <ul class="menu">
                <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
                <li><a href="#"><i class="fa fa-chart-bar"></i> Analytics</a></li>
                <li><a href="#"><i class="fa fa-user"></i> Profile</a></li>
                <!-- Add more menu items as needed -->
            </ul>
        </div>
        <div class="main-panel">
            <h1>Welcome to Your Dashboard</h1>
            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Age</th>
                            <!-- Add more table headers as needed -->
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>John Doe</td>
                            <td>johndoe@example.com</td>
                            <td>30</td>
                        </tr>
                        <!-- Add more table rows as needed -->
                    </tbody>
                </table>
            </div>
            <form class="data-form">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
                
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                
                <label for="age">Age:</label>
                <input type="number" id="age" name="age" required>
                
                <button type="submit">Submit</button>
            </form>
        </div>
    </div>
</body>
</html>
