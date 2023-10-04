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
            <a class="card-link" href="">
                <div class="card-window-h">
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
            </a>
<!-- wide debit card -->
            <a class="card-link" href="">
                <div class="card-window-h">
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
            </a>
        </div>
<!-- vertical card panels -->
        <div>
<!-- tall credit cards row1 -->
            <div class="card-row">
                <a class="card-link" href="">
                    <div class="card-window-v">
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
                </a>
                <a class="card-link" href="">
                    <div class="card-window-v">
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
                </a>
            </div>
<!-- tall credit cards row2 -->
            <div class="card-row">
                <a class="card-link" href="">
                    <div class="card-window-v">
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
                </a>
                <a class="card-link" href="">
                    <div class="card-window-v">
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
                </a>
            </div>
        </div>
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