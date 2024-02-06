<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="./styles/login.css">
    <title>FlowBank | Login</title>
    <link rel="icon" type="image/x-icon" href="./imgs/logo/logo.svg">
</head>

<body>

    <?php
        $servername = "localhost"; // Replace with your MySQL server name
        $username = "root"; // Replace with your MySQL username
        $password = "Pat19982004"; // Replace with your MySQL password
        $dbname = "bank"; // Replace with your MySQL database name

        // Create a connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
    ?>
    <div class="login">
        <form action="./index.php" method="post">
            <h3 class="login header">Login</h3>
            <label for="email">Email:</label><br>
            <input required="" type="text" id="email" name="email" value=""><br>
            <label for="password">Password:</label><br>
            <input required="" type="password" id="passpass" name="passpass" value=""><br><br>
            <input class="submit" type="submit" value="Submit">
        </form> 
    </div>
    <?php
        // Close the connection
        $conn->close();
    ?>
</body>

</html>