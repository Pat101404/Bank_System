<?php 

    echo "<script src='../scrpits/main.js'></script>";

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

    $idsender = $_POST['ID_sender'];
    $idrecipient = $_POST['ID_recipient'];
    $amount = $_POST['amount'];
    $payment_option = $_POST['payment_option'];
    $card = $_POST['cards'];
    $datetime = $_POST['transactiontime'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Perform the database update
    if ($payment_option == 2){
        $query1 = "INSERT INTO transaction_log (ID_sender, ID_recipient, `time`, amount, transaction_type, ID_card, transaction_status_type) 
        VALUES ($idsender, $idrecipient, '$datetime', $amount, $payment_option, $card, 2)";

        $result1 = $conn->query($query1);

        if (!$result1) {
            die("Error in SQL queries: " . $conn->error);
        }else{
            echo "<script>
            console.log('Card payment made successfully');
            navigateWithPost('../index.php', '$email', '$password');
            </script>";
        }
    }else{
        $query1 = "INSERT INTO transaction_log (ID_sender, ID_recipient, `time`, amount, transaction_type, transaction_status_type) 
        VALUES ($idsender, $idrecipient, '$datetime', $amount, $payment_option, 2)";

        $result1 = $conn->query($query1);

        if (!$result1) {
            die("Error in SQL queries: " . $conn->error);
        }else{
            echo "<script>
            console.log('Payment made successfully');
            navigateWithPost('../index.php', '$email', '$password');
            </script>";
        }
    }

    $conn->close();

?>
