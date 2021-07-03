
    <?php
require("includes/common.php");

// Redirects the user to products page if he/she is logged in.
if (isset($_SESSION['email'])) {
  header('location: products.php');
}

?> 
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>FPFS</title>
        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="css/style.css" rel="stylesheet">
        <!-- jQuery -->
        <script src="js/jquery.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body style="padding-top: 50px;">
        <!-- Header -->
        <?php
        include 'includes/header.php';
        ?>
        <!--Header end-->

        <div id="content">
            <!--Main banner image-->
            <div id = "banner_image">
                <div class="container">	
                    <center>
                        <div id="banner_content">
                            <h1>नमामः अन्नदाता</h1>
                            <p>किसान की उन्नति, देश की प्रगति</p>
                            <br/>
                            <a  href="products.php" class="btn btn-danger btn-lg active">खरीदें</a>
                        </div>
                    </center>
                </div>
            </div>
            <!--Main banner image end-->
<!--
            <!--Item categories listing
            <div class="container">
                <div class="row text-center" id="item_list">
                    <div class="col-sm-4">
                        <a href="prodcts.php#फल एवं सब्जियां" >
                            <div class="thumbnail">
                                <img src="img/Fruits-HD-Wallpaper (2).jpg" alt="">
                                <div class="caption">
                                    <h3>फल एवं सब्जियां</h3>
                                    <p>ताज़ा और साफ़ सब्जी हमारी, 
स्वस्थ हो देश का हर नर नारी</p>
                                </div>
                            </div> 
                        </a>
                    </div>

                    <div class="col-sm-4">
                        <a href="produts.php#अनाज" >
                            <div class="thumbnail">
                                <img src="img/pulses_Final.jpeg" alt="">
                                <div class="caption">
                                    <h3>अनाज</h3>
                                    <p>जन जन का पेट भरा हो पूरा, 
हर घर जाये धान हमारा</p>
                                </div>
                            </div> 
                        </a>
                    </div>

                    <div class="col-sm-4">
                        <a href="producs.php#अन्य" >
                            <div class="thumbnail">
                                <img src="img/Others1_1.png" alt="">
                                <div class="caption">
                                    <h3>अन्य उत्पाद</h3>
                                    <p></p>
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
        <!--Footer end-->
   
    </body> 
</html>