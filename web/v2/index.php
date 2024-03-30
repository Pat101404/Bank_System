<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="./styles/main.css">
    <link rel="stylesheet" href="./styles/card_page.css">
    <link rel="stylesheet" href="./styles/card.css">
    <title id=title>FlowBank | Overview</title>
    <link rel="icon" type="image/x-icon" href="./imgs/logo/logo.svg">
</head>

<body class="dark">

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

        //get id from login post
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // collect value of input field
            $logemail = $_POST['email'];
            $passpass = $_POST['passpass'];
        }

        $sql = "SELECT ID_account FROM accounts WHERE email = '$logemail' AND passpass = '$passpass'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $accountid = $row["ID_account"];
            }
        } else {
            header('Location: '."./login.php");
            die("No such user found.");
        }

        //gather data from database into variables

        //get ID_user instances from accounts_+_users table using ID_account into an array
        $sql = "SELECT * FROM `accounts_+_users` WHERE ID_account = '$accountid'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $userids =[];
                $userids[] = $row["ID_user"];
            }
        } else {
            echo "No user assigned to account id";
        }

        //get account data from accounts table 
        $account = [];
        $sql = "SELECT * FROM accounts WHERE ID_account = '$accountid'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                foreach ($row as $key => $value) {
                    $account[$key] = $value;
                }
            }
        } else {
            echo "No data assigned to id";
        }

        //get user data from users table
        $users = [];
        foreach ($userids as $userid) {
            $sql = "SELECT * FROM users WHERE ID_user = '$userid'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    $users[] = [
                        "id" => $row["ID_user"],
                        "fname" => $row["firstname"], 
                        "lname" => $row["lastname"], 
                        "bday" => $row["birthday"], 
                        "email" => $row["email"], 
                        "phone" => $row["phone_number"], 
                        "city" => $row["city"],
                        "street_address" => $row["street_address"],
                        "state" => $row["state"],
                        "zipcode" => $row["zipcode"]
                    ];
                }
            } else {
                echo "No data assigned to id";
            }
        }
    ?>

    <!-- Sidebar -->
    <?php
        require "./templates/sidebar.php"
    ?>
    <!-- End of Sidebar -->

    <!-- Main Content -->
    <div class="content">
        <!-- Navbar -->
        <?php
            require "./templates/navbar.php"
        ?> 
        <!-- End of Navbar -->

        <main>
            <div id="overview">
                <?php
                    require "./templates/overview.php";
                ?>
            </div>
            
            <div id="transactions" style="display: none;">
                <?php
                    require "./templates/transactions.php"
                ?> 
                </div>

            <div id="cards" style="display: none;">
                <?php
                    require "./templates/cards.php"
                ?>
            </div>

            <div id="account" style="display: none;">
                <?php
                    require "./templates/account.php"
                ?>
            </div>

            <div id="manage" style="display: none;">
                <?php
                    require "./templates/manage.php"
                ?>
            </div>

            <div id="account creator" style="display: none;">
                <?php
                    require "./templates/account creator.php"
                ?>
            </div>

            <div id="payment" style="display: none;">
                <?php
                    require "./templates/payment.php"
                ?>
            </div>

        </main>
    </div>

    <?php
        $conn->close();
    ?>

    <script src="./scrpits/main.js"></script>
</body>

</html>