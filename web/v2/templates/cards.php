<?php

$cardids = [];
$sql = "SELECT * FROM `cards` WHERE ID_account = '$accountid'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $cardids[] = $row["ID_card"];
    }
} else {
    echo "No user assigned to account id";
}

$cards = array();
foreach ($cardids as $cardid) {
    $sql = "SELECT * FROM cards WHERE ID_card = '$cardid'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $cards[] = $row;
        }
    } else {
        echo "No data assigned to id";
    }
}

for ($j=0; $j < count($cardids); $j++) {

    echo "
        <div class='datarow'> 
        <div class='card-window'> 
        <div class='cardcontainer'> 
        <div class='card'> 
        <div class='header'>
    ";
    echo "<h3 class='title'>Card#".($j+1)."</h3>";
    if ($cards[$j]["card_type"] == 1){
        echo "<svg xmlns='http://www.w3.org/2000/svg' class='logo' width='90' height='43' viewBox='0 0 143 88.78'>
        <title>Mastercard logo</title>
        <polygon points='52.16 79.29 90.83 79.29 90.83 9.49 52.16 9.49 52.16 79.29' style='fill:#ff5f00'/>
        <path d='M495.12,512A44.38,44.38,0,0,1,512,477.1a44.39,44.39,0,1,0,0,69.8A44.39,44.39,0,0,1,495.12,512' transform='translate(-440.5 -467.61)' style='fill:#eb001b'/>
        <path d='M583.5,512A44.15,44.15,0,0,1,512,546.9a44.52,44.52,0,0,0,0-69.8A44.15,44.15,0,0,1,583.5,512Z' transform='translate(-440.5 -467.61)' style='fill:#f79e1b'/>
        </svg>";
    }else if($cards[$j]["card_type"] == 2){
        echo "<svg xmlns='http://www.w3.org/2000/svg' class='logo' width='140' height='43' viewBox='0 0 175.7 53.9'>
        <style>
            .visa {
                fill: #fff;
            }
        </style>
        <path class='visa'
            d='M61.9 53.1l8.9-52.2h14.2l-8.9 52.2zm65.8-50.9c-2.8-1.1-7.2-2.2-12.7-2.2-14.1 0-24 7.1-24 17.2-.1 7.5 7.1 11.7 12.5 14.2 5.5 2.6 7.4 4.2 7.4 6.5 0 3.5-4.4 5.1-8.5 5.1-5.7 0-8.7-.8-13.4-2.7l-2-.9-2 11.7c3.3 1.5 9.5 2.7 15.9 2.8 15 0 24.7-7 24.8-17.8.1-5.9-3.7-10.5-11.9-14.2-5-2.4-8-4-8-6.5 0-2.2 2.6-4.5 8.1-4.5 4.7-.1 8 .9 10.6 2l1.3.6 1.9-11.3M164.2 1h-11c-3.4 0-6 .9-7.5 4.3l-21.1 47.8h14.9s2.4-6.4 3-7.8h18.2c.4 1.8 1.7 7.8 1.7 7.8h13.2l-11.4-52.1m-17.5 33.6c1.2-3 5.7-14.6 5.7-14.6-.1.1 1.2-3 1.9-5l1 4.5s2.7 12.5 3.3 15.1h-11.9zm-96.7-33.7l-14 35.6-1.5-7.2c-2.5-8.3-10.6-17.4-19.6-21.9l12.7 45.7h15.1l22.4-52.2h-15.1' />
        <path fill='#F7A600'
            d='M23.1.9h-22.9l-.2 1.1c17.9 4.3 29.7 14.8 34.6 27.3l-5-24c-.9-3.3-3.4-4.3-6.5-4.4' />
        </svg>";
    }
    echo "</div>";
    echo "<div class='cardcontent'>";
    echo "<div class='row'><label>Card Number</label><p>".$cards[$j]["card_number"]."</p></div>";
    echo "<div class='row card-expire'><label>Expire</label><p>".$cards[$j]["expire_date"]."</p></div>";
    echo "<div class='row card-cvv'><label>CVV</label><p>".$cards[$j]["cvv"]."</p></div>";
    echo "</div></div></div>";

    $currentID = $cards[$j]['ID_card'];
    $cardlimits = [];
    $sql = "SELECT * FROM card_limits WHERE ID_card = $currentID";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $cardlimits = array();
        while ($row = $result->fetch_assoc()) {
            $cardlimits[] = $row;
        }
    } else {
        echo "No rows found in the table.";
    }

    echo "<div class='card-limits'>";
    echo "<div class='card-limit'>";
    echo "<i class='bx bx-money-withdraw'></i><div><h3>ATM Withdrawals</h3><p>".$cardlimits[0]["limit_atm_used"]." / ".$cardlimits[0]["limit_atm"]."</p></div>";
    echo "</div>";
    echo "<div class='card-limit'>";
    echo "<i class='bx bx-credit-card'></i><div><h3>Card payments</h3><p>".$cardlimits[0]["limit_card_used"]." / ".$cardlimits[0]["limit_card"]."</p></div>";
    echo "</div>";
    echo "<div class='card-limit'>";
    echo "<i class='bx bx-world'></i><div><h3>Internet payments</h3><p>".$cardlimits[0]["limit_web_used"]." / ".$cardlimits[0]["limit_web"]."</p></div>";
    echo "</div>";
    echo "<div class='card-limit'>";
    echo "<i class='bx bx-merge'></i><div><h3>Total with/pay</h3><p>".$cardlimits[0]["limit_total_used"]." / ".$cardlimits[0]["limit_total"]."</p></div>";
    echo "</div></div></div>";

    echo "<div class='card-transactions'><div class='header'><i class='bx bx-note'></i><h3>Transactions</h3></div>";
    echo "<table><thead><tr>";
    echo "
        <th>Sender</th>
        <th>Recipient</th>
        <th>Transaction Time</th>
        <th>Amount</th>
        <th>Type</th>
        <th>Card</th>
        <th>Status</th>
    ";
    echo "</tr></thead>";

    $cardtransactions = [];
    $sql = "SELECT * FROM transaction_log WHERE ID_card = $currentID AND (ID_sender = '$accountid' OR ID_recipient = '$accountid') ORDER BY `time` DESC LIMIT 3";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $cardtransactions = array();
        while ($row = $result->fetch_assoc()) {
            $cardtransactions[] = $row;
        }
        for ($i = 0; $i <= (count($cardtransactions)-1); $i++){
            echo 
            "<tr> <td>ID# ".$cardtransactions[$i]["ID_sender"].
            "</td> <td>ID# ".$cardtransactions[$i]["ID_recipient"].
            "</td> <td>".$cardtransactions[$i]["time"].
            "</td> <td>".$cardtransactions[$i]["amount"].
            "</td> <td>".$cardtransactions[$i]["transaction_type"].
            "</td> <td>".$cardtransactions[$i]["ID_card"]."</td> <td>";
            switch($cardtransactions[$i]["transaction_status_type"]){
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
        }
    } else {

    }

    echo "</tbody></table></div></div>";
}

?>