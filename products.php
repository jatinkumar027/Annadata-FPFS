<?php
require("includes/common.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Products | FPFS</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>

    <body>
        <?php
        include 'includes/header.php';
        include 'includes/check-if-added.php';
        ?>
        <div class="container" id="content">
            <!-- Jumbotron Header -->
            <div class="jumbotron home-spacer" id="products-jumbotron">
                <center><h1>किसान पोर्टल पर आपका स्वागत है।</h1>
                <p>
किसान उत्पाद कम से कम दामों पर सीधा आपके घर तक</p></center>

            </div>
            <hr>

            <div class="row text-center" id="cameras">
                <div class="col-md-4 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/vegt.jpg" alt="">
                        <div class="caption">
                            <h3>सब्जियां</h3>
                            
                            
                            <p><a href="productsvegetable.php" role="button" class="btn btn-primary btn-block">अभी खरीदें</a></p>
                       
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/Fruits-HD-Wallpaper (2).jpg" alt="">
                        <div class="caption">
                            <h3> फल</h3>
                            
                            
                            <p><a href="productsfruit.php" role="button" class="btn btn-primary btn-block">अभी खरीदें</a></p>
                             </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/grain.jpg" alt="">
                        <div class="caption">
                            <h3>धान</h3>
                           
                            
                                <p><a href="productsgrain.php" role="button" class="btn btn-primary btn-block">अभी खरीदें</a></p>
                              
                            </a>
                        </div>
                    </div>
                </div>

                
                            </a>
                        </div>
                    </div>
              

              
        <?php include("includes/footer.php"); ?>
    </body>

</html>
