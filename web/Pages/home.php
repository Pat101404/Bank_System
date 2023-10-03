<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/nav-buttons.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="icon" href="../imgs/svg/logo-no-background.svg">
    <title>FlowBank - Home</title>
</head>
<body>
    <?php 
        require "../templates/nav.php";
    ?>
    <div class="core">
        <?php 
            require "../templates/lorem.html";
        ?>
    </div>

    <div class="contacts">
        <p>123 Bank Street | City, State ZIP Code | Email: <a href="mailto:info@flowbank.com">info@flowbank.com</a> | Phone: +420 111222333</p>
    </div>

    <?php 
        require "../templates/footer.php";
    ?>
</body>