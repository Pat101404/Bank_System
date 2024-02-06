<!-- infoboxes -->
<ul class="infoboxes">
    <li><i class='bx bx-user'></i>
        <span class="info">
            <h3>
                <?php echo $account["account_name"] ?>
            </h3>
            <p><?php echo $users[0]["fname"]." ".$users[0]["lname"] ?></p>
        </span>
    </li>
    <li>
        <i class='bx bx-dollar-circle'></i>
        <span class="info">
            <h3>
                <?php echo "$".$account["balance"] ?> <!-- change later to show avaliable balance -->
            </h3>
            <p>Balance</p>
        </span>
    </li>
    <li><i class='bx bx-dollar-circle'></i>
        <span class="info">
            <h3>
                <?php echo "$".$account["balance"] ?>
            </h3>
            <p>Total Balance</p>
        </span>
    </li>
    <li onclick="toggleElement('payment')"><i class='bx bx-dollar'></i>
        <span class="info">
            <h3>
                Make payment
            </h3>
            <p></p>
        </span>
    </li>
</ul>
<!-- End of infoboxes -->

<div class="datarow">
    <div class="transaction-list">
        <div class="header">
            <i class='bx bx-receipt'></i>
            <h3>Recent Activity</h3>
        </div>
        <table>
            <thead>
                <tr>
                    <th>Sender</th>
                    <th>Recipient</th>
                    <th>Transaction Time</th>
                    <th>Amount</th>
                    <th>Type</th>
                    <th>Card</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $transactions = [];
                    $sql = "SELECT * FROM transaction_log WHERE ID_sender = '$accountid' OR ID_recipient = '$accountid' ORDER BY `time` DESC LIMIT 5";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        $transactions = array();
                        while ($row = $result->fetch_assoc()) {
                            $transactions[] = $row;
                        }
                        for ($i = 0; $i < 5; $i++){
                            if (isset($transactions[$i])) {
                                echo 
                                "<tr> <td>ID# ".$transactions[$i]["ID_sender"].
                                "</td> <td>ID# ".$transactions[$i]["ID_recipient"].
                                "</td> <td>".$transactions[$i]["time"].
                                "</td> <td>".$transactions[$i]["amount"].
                                "</td> <td>".$transactions[$i]["transaction_type"].
                                "</td> <td>".$transactions[$i]["ID_card"]."</td> <td>";
                                switch($transactions[$i]["transaction_status_type"]){
                                    case "1":
                                        echo "<span class='status completed'>Completed</span>";
                                        break;
                                    case "2":
                                        echo "<span class='status pending'>Pending</span>";
                                        break;
                                    case "3":
                                        echo "<span class='status failed'>Failled</span>";
                                        break;
                                    case "4":
                                        echo "<span class='status declined'>Declined</span>";
                                        break;
                                }
                                echo "</td> </tr>";
                            } else {
                                
                            }
                        }
                    } else {

                    }
                ?>
            </tbody>
        </table>
    </div>

    <div class="notifications">
        <div class="header">
            <i class='bx bx-note'></i>
            <h3>Notifications</h3>
        </div>
        <ul class="notification-list">
            <!-- placeholder -->
        </ul>
    </div>
</div>