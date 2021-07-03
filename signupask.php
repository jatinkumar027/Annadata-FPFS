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
        ?>
        
       <div class="thumbnail">
                <div class="row text-center" >
                    <div class="col-sm-6">
                        <a href="signupfarmer.php" >
                            <div class="thumbnail">
                                <img src="img/Farmer.png" alt="">
                                <div class="caption">
                                    <h3>किसान आवेदन करें </h3>
                         
                                </div>
                            </div> 
                        </a>
                    </div>

                    <div class="col-sm-6">
                        <a href="signup.php" >
                            <div class="thumbnail">
                                <img src="img/Screenshot (1425).png" alt="">
                                <div class="caption">
                                    <h3>खरीददार आवेदन करें </h3>
                                    
                                </div>
                            </div> 
                        </a>
                    </div>
                </div>
       </div>  
            <!--Item categories listing end
        </div>
        -->
        <!--Footer-->
        <?php
        include 'includes/footer.php';
        ?>
    </body>

</html>
