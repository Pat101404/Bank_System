<div class="sidebar">
    <a href="#" class="logo">
        <i class='bx bx-transfer-alt'></i>
        <div class="logo-name"><span>Flow</span>Bank</div>
    </a>
    <ul class="side-menu">
        <li class="active"><a onclick="toggleElement('overview')" ><i class='bx bxs-dashboard'></i>Overview</a></li>
        <li><a onclick="toggleElement('transactions')" ><i class='bx bx-transfer-alt'></i>Transfers</a></li>
        <li><a onclick="toggleElement('cards')"><i class='bx bx-credit-card'></i>Cards</a></li>
        <li><a onclick="toggleElement('account')"><i class='bx bx-user'></i>Account</a></li>
        <?php
            if ($account["account_type"] == 1 or $account["account_type"] == 2 or $account["account_type"] == 3) {
                echo "<li><a onclick='toggleElement(`manage`)'><i class='bx bx-cog'></i>Manage</a></li>";
                echo "<li><a onclick='toggleElement(`account creator`)'><i class='bx bx-cog'></i>Account creator</a></li>";
            }
        ?>
    </ul>
    <ul class="side-menu">
        <li>
            <a href="./login.php" class="logout">
                <i class='bx bx-log-out-circle'></i>
                Logout
            </a>
        </li>
    </ul>
</div>