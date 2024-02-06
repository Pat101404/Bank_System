<div class="datarow">
    <div class="transaction-list">
        <div class="header">
            <i class='bx bx-receipt'></i>
            <h3> Transaction Activity </h3>
        </div>
        <table>
            <thead>
                <tr>
                    <th>Transaction ID</th>
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
                    $sql = "SELECT * FROM transaction_log WHERE transaction_status_type = 2 ORDER BY `time` ASC";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        $transactions = array();
                        while ($row = $result->fetch_assoc()) {
                            $transactions[] = $row;
                        }
                        for ($i = 0; $i <= (count($transactions)-1); $i++){
                            echo "<tr> <td id='row".$i."id'>".$transactions[$i]["ID_transaction_log"].
                            "</td> <td id='row".$i."idsender'>ID# ".$transactions[$i]["ID_sender"].
                            "</td> <td id='row".$i."idrecipient'>ID# ".$transactions[$i]["ID_recipient"].
                            "</td> <td>".$transactions[$i]["time"].
                            "</td> <td id='row".$i."amount'>".$transactions[$i]["amount"].
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
                            echo "</td>
                            <td><span onclick='changeTransactionStatus(`row".$i."id`, `row".$i."idsender`, `row".$i."idrecipient`, `row".$i."amount`, 1)' class='confirm_transaction'>Confirm</span></td>
                            <td><span onclick='changeTransactionStatus(`row".$i."id`, `row".$i."idsender`, `row".$i."idrecipient`, `row".$i."amount`, 4)' class='deny_transaction'>Deny</span></td>";
                            echo "</tr>";
                        }
                    } else {}
                ?>
            </tbody>
        </table>
    </div>
</div>