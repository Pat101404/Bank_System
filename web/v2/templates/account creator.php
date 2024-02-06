<div class="user_create_form">
    <form action="./templates/account creation.php" method="post">
        <div class="create_account">
            <h3>Account</h3>
            <label>Account name:</label>
            <input required="" name="account_name" placeholder="" type="text"><br>
            <label>Email:</label>
            <input required="" name="email" placeholder="" type="text"><br>
            <label>Password:</label>
            <input required="" name="password" placeholder="" type="text"><br>
            <label>Phone prefix:</label>
            <input required="" name="account_phone_prefix" placeholder="+000" type="text"><br>
            <label>Phone number:</label>
            <input required="" name="account_phone_number" placeholder="111222333" type="text"><br>
            <label>Account type:</label>
            <div class="account_types_select">
                <?php
                    if ($account["account_type"] == 1){
                        echo "<div class='account_type_select'>";
                            echo "<input name='account_type' id='account_admin' type='radio' value='1'>";
                            echo "<label class='radio_select' for='account_admin'>Admin</label>";
                        echo "</div>";
                    }
                    if ($account["account_type"] == 1 or $account["account_type"] == 2){
                        echo "<div class='account_type_select'>";
                            echo "<input name='account_type' id='account_manager' type='radio' value='2'>";
                            echo "<label class='radio_select' for='account_manager'>Manager</label>";
                        echo "</div> ";
                    }
                    if ($account["account_type"] == 1 or $account["account_type"] == 2 or $account["account_type"] == 3){
                        echo "<div class='account_type_select'>";
                            echo "<input name='account_type' id='account_employee' type='radio' value='3'>";
                            echo "<label class='radio_select' for='account_employee'>Employee</label>";
                        echo "</div>";
                    }
                ?>
                
                <div class="account_type_select">
                    <input name="account_type" id="account_vip" type="radio" value="4">
                    <label class="radio_select" for="account_vip">VIP</label>
                </div>
                <div class="account_type_select">
                    <input name="account_type" id="account_business" type="radio" value="5">
                    <label class="radio_select" for="account_business">Business</label>
                </div>
                <div class="account_type_select">
                    <input name="account_type" id="account_basic" type="radio" value="6">
                    <label class="radio_select" for="account_basic">Basic</label>
                </div>
            </div>
        </div>
        <div class="create_user">
            <h3>Owner</h3>
            <label>First name:</label>
            <input required="" name="firstname" placeholder="" type="text"><br>
            <label>Last name:</label>
            <input required="" name="lastname" placeholder="" type="text"><br>
            <label>Birthday:</label>
            <input required="" name="birthday" placeholder="" type="date"><br>
            <label>Email:</label>
            <input required="" name="useremail" placeholder="" type="text"><br>
            <label>Phone prefix:</label>
            <input required="" name="user_phone_prefix" placeholder="+000" type="text"><br>
            <label>Phone number:</label>
            <input required="" name="user_phone_number" placeholder="111222333" type="text"><br>
            <label>Adress:</label>
            <input required="" name="city" placeholder="city" type="text"><br>
            <input required="" name="street" placeholder="street adress" type="text"><br>
            <input required="" name="state" placeholder="state" type="text"><br>
            <input required="" name="zip" placeholder="zipcode" type="text"><br>
        </div>
        <div class="create_card">
            <h3>Card</h3>
            <label>Card type:</label>
            <div class="card_types_select">           
                <div class="card_type_select">
                    <input name="card_type" id="card_debit" type="radio" value="1">
                    <label class="radio_select" for="card_debit">Debit</label>
                </div>
                <div class="card_type_select">
                    <input name="card_type" id="card_credit" type="radio" value="2">
                    <label class="radio_select" for="card_credit">Credit</label>
                </div>
            </div>
            <label>Card brand:</label>
            <div class="card_brands_select">           
                <div class="card_brand_select">
                    <input name="card_brand" id="card_mastercard" type="radio" value="1">
                    <label class="radio_select" for="card_mastercard">Mastercard</label>
                </div>
                <div class="card_brand_select">
                    <input name="card_brand" id="card_visa" type="radio" value="2">
                    <label class="radio_select" for="card_visa">Visa</label>
                </div>
            </div>
        </div>
        <input class="submit" type="submit" value="Submit">
    </form>
</div>