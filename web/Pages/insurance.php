<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/nav-buttons.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="icon" href="../imgs/svg/logo-no-background.svg">
    <title>FlowBank - Insurance</title>
</head>
<body>
    <?php 
        require "../templates/nav.php";
    ?>

    <div>
        <div>
            <h3>Insurance</h3>
            <div class="travel-insurance">
                <h4>Travel insurance</h4>
            </div>
            <div class="life-insurance">
                <h4>Life insurance</h4>
            </div>
            <div class="medical-insurance">
                <h4>Medical insurance</h4>
            </div>
            <div class="property-insurance">
                <h4>Property insurance</h4>
            </div>
            <div class="law-insurance">
                <h4>Law insurance</h4>
            </div>
            <div class="business-insurance">
                <h4>Business insurance</h4>
            </div>
            <div class="car-insurance">
                <h4>Car insurance</h4>
            </div>
            <div class="accident-insurance">
                <h4>Accident insurance</h4>
            </div>
        </div>
        <div>
            <ul class="insurance-list">
                <li><a>Travel insurance</a></li>
                <li><a>Life insurance</a></li>
                <li><a>Medical insurance</a></li>
                <li><a>Property insurance</a></li>
                <li><a>Law insurance</a></li>
                <li><a>Business insurance</a></li>
                <li><a>Car insurance</a></li>
                <li><a>Accident insurance</a></li>
            </ul>
        </div>
    </div>

    <?php 
        require "../templates/footer.php";
    ?>
</body>