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

    //account
    $account_name = $_POST['account_name'];
    $account_email = $_POST['email'];
    $account_password = $_POST['password'];
    $account_phone_prefix = $_POST['account_phone_prefix'];
    $account_phone_number = $_POST['account_phone_number'];
    $account_type = $_POST['account_type'];
    $account_creation_date = date('Y-m-d');
    //user
    $user_firstname = $_POST['firstname'];
    $user_lastname = $_POST['lastname'];
    $user_birthday = $_POST['birthday'];
    $user_useremail = $_POST['useremail'];
    $user_phone_prefix = $_POST['user_phone_prefix'];
    $user_phone_number = $_POST['user_phone_number'];
    $user_city = $_POST['city'];
    $user_street = $_POST['street'];
    $user_state = $_POST['state'];
    $user_zip = $_POST['zip'];
    //card
    function generateCardNumber() {
        return rand(1000000000000000, 9999999999999999);
    }
    function isCardNumberUnique($card_number, $conn) {
        $sql = "SELECT COUNT(*) AS count FROM cards WHERE card_number = $card_number";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        return ($row["count"] == 0);
    }
    do {
        $card_number = generateCardNumber();
    } while (!isCardNumberUnique($card_number, $conn));
    $card_type = $_POST['card_type'];
    $card_brand = $_POST['card_brand'];
    $card_expire_date = date('Y-m-d', strtotime('+4 years'));
    $card_cvv = rand(100, 999);

    $query1 = 
    "INSERT INTO accounts (account_name, passpass, email, phone_prefix, phone_number, balance, account_type, creation_date) 
    VALUES ('$account_name', '$account_password', '$account_email', '$account_phone_prefix', '$account_phone_number', 0, '$account_type', '$account_creation_date');";
    $result1 = $conn->query($query1);

    if (!$result1) {
        die("Error in SQL queries: " . $conn->error);
    }else{

        $query2 = 
        "INSERT INTO users (firstname, lastname, birthday, email, phone_prefix, phone_number, city, street_address, `state`, zipcode) 
        VALUES ('$user_firstname', '$user_lastname', '$user_birthday', '$user_useremail', '$user_phone_prefix', '$user_phone_number', '$user_city', '$user_street', '$user_state', '$user_zip')
        ;";
        $result2 = $conn->query($query2);

        if (!$result2) {
            die("Error in SQL queries: " . $conn->error);
        }else{
            $temp_accountid = 0;
            $tempquery1 = "SELECT ID_account FROM accounts WHERE email = '$account_email' AND passpass = '$account_password'";
            $tempresult1 = $conn->query($tempquery1);
            if ($tempresult1->num_rows > 0) {
                while($row = $tempresult1->fetch_assoc()) {
                    $temp_accountid = $row["ID_account"];
                }
            }

            $temp_userid = 0;
            $tempquery2 = "SELECT ID_user FROM users WHERE firstname = '$user_firstname' AND lastname = '$user_lastname' AND email = '$user_useremail' AND phone_number = '$user_phone_number'";
            $tempresult2 = $conn->query($tempquery2);
            if ($tempresult2->num_rows > 0) {
                while($row = $tempresult2->fetch_assoc()) {
                    $temp_userid = $row["ID_user"];
                }
            }

            $query3 = 
            "INSERT INTO `accounts_+_users` (ID_account, ID_user, account_user_type)
            VALUES ($temp_accountid, $temp_userid, 1)
            ;";
            $result3 = $conn->query($query3);

            if (!$result3) {
                die("Error in SQL queries: " . $conn->error);
            }else{
                
                $query4 = 
                "INSERT INTO cards (ID_account, card_number, card_type, card_brand, expire_date, cvv) VALUES
                ($temp_accountid, '$card_number', $card_type, $card_brand, '$card_expire_date', '$card_cvv')
                ;";
                $result4 = $conn->query($query4);

                $temp_cardid = 0;
                $tempquery3 = "SELECT ID_card FROM cards WHERE card_number = '$card_number'";
                $tempresult3 = $conn->query($tempquery3);
                if ($tempresult3->num_rows > 0) {
                    while($row = $tempresult3->fetch_assoc()) {
                        $temp_cardid = $row["ID_card"];
                    }
                }

                $query5 = 
                "INSERT INTO card_limits (ID_card, limit_atm, limit_atm_used, limit_card, limit_card_used, limit_web, limit_web_used, limit_total, limit_total_used) VALUES
                ($temp_cardid, 0, 0, 0, 0, 0, 0, 0, 0)
                ;";
                $result5 = $conn->query($query5);

                if (!$result4 || !$result5) {
                    die("Error in SQL queries: " . $conn->error);
                }else{
                    
                    echo "<script>
                    console.log('Account created successfully');
                    window.location.href = '../index.php';
                    </script>";

                }
            }
        }
    }

    $conn->close();

?>