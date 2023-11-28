<div class="accountrow">
    <div class="accountpanelleft">
        <div class="accountpaneltitle">
            <i class="bx bx-user"></i>
            <h3>Account Details</h3>
        </div>
        <div class="panelcontents">
            <table>
                <tr>
                    <th>Account Name:</th>
                    <th class="data"><p><?php echo $account["name"] ?></p></th>
                </tr>
                <tr>
                    <th>Account ID:</th>
                    <th class="data"><p><?php echo $account["id"] ?></p></th>
                </tr>
                <tr>
                    <th>Account type:</th>
                    <th class="data"><p><?php echo $account["type"] ?></p></th>
                </tr>
                <tr>
                    <th>Email:</th>
                    <th class="data"><p><?php echo $account["email"] ?></p></th>
                </tr>
                <tr>
                    <th>phone:</th>
                    <th class="data"><p>+420 <?php echo $account["phone"] ?></p></th>
                </tr>
                <tr>
                    <th>Date of creation:</th>
                    <th class="data"><p><?php echo $account["creation_date"] ?></p></th>
                </tr>
            </table>
        </div>
    </div>
    <div class="accountpanelright">
        <div class="accountpaneltitle">
            <i class="bx bx-user"></i>
            <h3>Account owner</h3>
        </div>
        <table>
            <tr>
                <th>Name:</th>
                <th class="data"><p><?php echo $users[0]["fname"]." ".$users[0]["lname"] ?></p></th>
            </tr>
            <tr>
                <th>Client ID:</th>
                <th class="data"><p><?php echo $users[0]["id"] ?></p></th>
            </tr>
            <tr>
                <th>Email:</th>
                <th class="data"><p><?php echo $users[0]["email"] ?></p></th>
            </tr>
            <tr>
                <th>phone:</th>
                <th class="data"><p>+420 <?php echo $users[0]["phone"] ?></p></th>
            </tr>
            <tr>
                <th>Address:</th>
                <th class="data"><p><?php echo $users[0]["address"] ?></p></th>
            </tr>
            <tr>
                <th>Date of birth:</th>
                <th class="data"><p><?php echo $users[0]["bday"] // 05/06/1992 ?></p></th>
            </tr>
        </table>
    </div>
</div>