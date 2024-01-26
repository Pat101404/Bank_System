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

    $transactionid = $_POST['id'];
    $idsender = $_POST['idsender'];
    $idrecipient = $_POST['idrecipient'];
    $amount = $_POST['amount'];
    $newStatus = $_POST['status'];

    // Perform the database update
    $query1 = "UPDATE transaction_log SET transaction_status_type = $newStatus WHERE ID_transaction_log = $transactionid;";
    $query2 = "UPDATE accounts SET balance = (SELECT new_balance FROM (SELECT balance - $amount AS new_balance FROM accounts WHERE ID_account = $idsender) AS subquery) WHERE ID_account = $idsender;";
    $query3 = "UPDATE accounts SET balance = (SELECT new_balance FROM (SELECT balance + $amount AS new_balance FROM accounts WHERE ID_account = $idrecipient) AS subquery) WHERE ID_account = $idrecipient;";
    
    $result1 = $conn->query($query1);
    $result2 = $conn->query($query2);
    $result3 = $conn->query($query3);

    if (!$result1 || !$result2 || !$result3) {
        die("Error in SQL queries: " . $conn->error);
    }else{
        echo "<script>
        console.log('Status updated successfully');
        window.location.href = '../index.php';
        location.reload(true);
        </script>";
    }

    $conn->close();

?>