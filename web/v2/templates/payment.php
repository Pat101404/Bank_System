<div class="payment_page">
    <form action="../templates/payment processing.php" class="paymentform" method="post">
        <div class="column">
            <div class="input_box">
                <label>ID of recipient:</label><br>
                <input required="" name="ID_recipient" placeholder="Enter ID number" type="text">
            </div>
            <div class="input_box">
                <label>Amount:</label><br>
                <input required="" name="amount" placeholder="Enter amount" type="text">
            </div>
        </div>
        <div class="payment_box">
            <label>Payment option</label>
            <div class="payment_options">
                <div class="payment_option">
                    <input checked="" name="payment_option" id="check_payment" type="radio" value="1">
                    <label for="check_payment">Transfer</label>
                </div>
                <div class="payment_option">
                    <input name="payment_option" id="check_card" type="radio" value="2">
                    <label for="check_card">Card</label>
                </div>
            </div>
        </div>
        <div class = "card_box">
            <labe>Card:</labe>
            <select id="cards" name="cards">
            <option value="">No card</option>
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

                    foreach ($cardids as $cardid){
                        echo "<option value='".$cardid."'>ID_card# ".$cardid."</option>";//get account card ids
                    }
                ?>
            </select>
        </div>
        <input type="hidden" id="transactiontime" name="transactiontime" value="<?php echo date('Y-m-d H:i:s'); ?>">
        <input type="hidden" id="email" name="email" value="<?php echo $logemail; ?>">
        <input type="hidden" id="password" name="password" value="<?php echo $passpass; ?>">
        <input type="hidden" id="ID_sender" name="ID_sender" value="<?php echo $accountid; ?>">
        <button>Submit</button>
    </form>
</div>