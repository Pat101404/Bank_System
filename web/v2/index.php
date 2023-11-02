<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="./styles/overview.css">
    <title>FlowBank | Overview</title>
</head>

<body class="dark">

    <!-- Sidebar -->
    <?php
        require "./templates/sidebar.php"
    ?>
    <!-- End of Sidebar -->
    <?php
        require "./templates/navbar.php"
    ?>
    <!-- Main Content -->
    <div class="content">
        <!-- Navbar -->

        <!-- End of Navbar -->

        <main>
            <div id="overview">
                <?php
                    require "./templates/overview.php";
                ?>
            </div>
            
            <div id="transfers" style="display: none;">
                <?php
                    require "./templates/transfers.php"
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