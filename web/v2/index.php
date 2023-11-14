<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="./styles/main.css">
    <link rel="stylesheet" href="./styles/card_page.css">
    <link rel="stylesheet" href="./styles/card.css">
    <title id=title>FlowBank | Overview</title>
    <link rel="icon" type="image/x-icon" href="./imgs/logo/logo.svg">
</head>

<body class="dark">

    <!-- Sidebar -->
    <?php
        require "./templates/sidebar.php"
    ?>
    <!-- End of Sidebar -->

    <!-- Main Content -->
    <div class="content">
        <!-- Navbar -->
        <?php
            require "./templates/navbar.php"
        ?> 
        <!-- End of Navbar -->

        <main>
            <div id="overview">
                <?php
                    require "./templates/overview.php";
                ?>
            </div>
            
            <div id="transactions" style="display: none;">
                <?php
                    require "./templates/transactions.php"
                ?> 
                </div>

            <div id="cards" style="display: none;">
                <?php
                    require "./templates/cards.php"
                ?>
            </div>

            <div id="loans" style="display: none;">
                <?php
                    require "./templates/loans.php"
                ?>
            </div>

            <div id="account" style="display: none;">
                <?php
                    require "./templates/account.php"
                ?>
            </div>

            <div id="settings" style="display: none;">
                <?php
                    require "./templates/settings.php"
                ?>
            </div>

        </main>
    </div>
    <script src="./scrpits/main.js"></script>
</body>

</html>