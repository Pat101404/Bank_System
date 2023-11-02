<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
        require "../templates/head.html";
    ?>
    <title>FlowBank - Cards</title>
</head>
<body>
<!-- navbar -->
    <?php 
        require "../templates/nav.php";
    ?>

    <div class="core">
<!-- horizontal card panels -->
        <div>
<!-- wide credit card -->
            <div class="card-window-h" id="w-credit-card">
                <div class="card-image">
                    <img src="../imgs/png/credit-card.png" alt="credit-card-image">
                </div>
                <div class="card-info">
                    <ul>
                        <h4>Credit Card</h4>
                        <li>Tempor quis est minim minim voluptate officia proident.</li>
                        <li>Anim id sit exercitation eiusmod sint aliqua.</li>
                        <li>Est aute tempor aliqua anim pariatur laborum voluptate do id irure esse reprehenderit sint.</li>
                    </ul>
                </div>  
            </div>
<!-- wide debit card -->
            <div class="card-window-h" id="w-debit-card">
                <div class="card-image">
                    <img src="../imgs/png/credit-card.png" alt="debit-card-image">    
                </div>
                <div class="card-info">
                    <ul>
                        <h4>Debit Card</h4>
                        <li>Laborum eiusmod dolor nostrud sit consequat consectetur quis pariatur.</li>
                        <li>Ex dolor dolore anim ex eu nisi reprehenderit irure sit non.</li>
                        <li>Aliquip cupidatat elit nostrud officia cupidatat ex occaecat ex mollit consequat deserunt irure.</li>
                    </ul>
                </div>  
            </div>
        </div>
<!-- vertical card panels -->
        <div>
<!-- tall credit cards row1 -->
            <div class="card-row" id="row-1">
                <div class="card-window-v ml">
                    <div class="card-image-v">
                        <img src="../imgs/png/credit-card.png" alt="credit-card-image">
                    </div>
                    <div class="card-info-v">
                        <ul>
                            <h4>Classic Debit Card</h4>
                            <li>Tempor quis est minim minim voluptate officia proident.</li>
                            <li>Anim id sit exercitation eiusmod sint aliqua.</li>
                            <li>Est aute tempor aliqua anim pariatur laborum voluptate do id irure esse reprehenderit sint.</li>
                        </ul>
                    </div>  
                </div>
                <div class="card-window-v mr">
                    <div class="card-image-v">
                        <img src="../imgs/png/credit-card.png" alt="debit-card-image">    
                    </div>
                    <div class="card-info-v">
                        <ul>
                            <h4>Business Debit Card</h4>
                            <li>Laborum eiusmod dolor nostrud sit consequat consectetur quis pariatur.</li>
                            <li>Ex dolor dolore anim ex eu nisi reprehenderit irure sit non.</li>
                            <li>Aliquip cupidatat elit nostrud officia cupidatat ex occaecat ex mollit consequat deserunt irure.</li>
                        </ul>
                    </div>  
                </div>
            </div>
<!-- tall credit cards row2 -->
            <div class="card-row" id="row-2">
                <div class="card-window-v ml">
                    <div class="card-image-v">
                        <img src="../imgs/png/credit-card.png" alt="credit-card-image">
                    </div>
                    <div class="card-info-v">
                        <ul>
                            <h4>Classic Credit Card</h4>
                            <li>Tempor quis est minim minim voluptate officia proident.</li>
                            <li>Anim id sit exercitation eiusmod sint aliqua.</li>
                            <li>Est aute tempor aliqua anim pariatur laborum voluptate do id irure esse reprehenderit sint.</li>
                        </ul>
                    </div>  
                </div>
                <div class="card-window-v mr">
                    <div class="card-image-v">
                        <img src="../imgs/png/credit-card.png" alt="debit-card-image">    
                    </div>
                    <div class="card-info-v">
                        <ul>
                            <h4>Business Credit Card</h4>
                            <li>Laborum eiusmod dolor nostrud sit consequat consectetur quis pariatur.</li>
                            <li>Ex dolor dolore anim ex eu nisi reprehenderit irure sit non.</li>
                            <li>Aliquip cupidatat elit nostrud officia cupidatat ex occaecat ex mollit consequat deserunt irure.</li>
                        </ul>
                    </div>  
                </div>
            </div>
        </div>
<!-- script for card selection modal -->
<script>
    // Get the modals
    var row_1 = document.getElementById("row-1");
    var row_2 = document.getElementById("row-2");

    // Get the button that opens the modal
    var btn_1 = document.getElementById("w-credit-card");
    var btn_2 = document.getElementById("w-debit-card");
    // When the user clicks the button, open the modal 
    btn_1.onclick = function() {
        row_1.style.display = "flex";
    }
    btn_2.onclick = function() {
        row_2.style.display = "flex";
    }

    // When the user clicks anywhere outside of row, close it
    window.onclick = function(event) {
        if (event.target == row_1) {
            row_1.style.display = "none";
        }
        if (event.target == row_2) {
            row_2.style.display = "none";
        }
    }

</script>
<!-- card list -->
        <div>
            <div>
                <ul>
                    <li><a>CLassic Debit Card</a></li>
                    <li><a>Classic Credit Card</a></li>
                </ul>
            </div>
            <div>
                <ul>
                    <li><a>Business Debit Card</a></li>
                    <li><a>Business Credit Card</a></li>
                </ul>
            </div>
        </div>
    </div>
<!-- footer -->
    <?php 
        require "../templates/footer.php";
    ?>
</body>