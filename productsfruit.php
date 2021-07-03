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
                <center><h1>फल </h1>
                <p>
किसान उत्पाद कम से कम दामों पर सीधा आपके घर तक</p></center>

            </div>
            <hr>

            <div class="row text-center" id="cameras">
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/fruits/Angoor.jpg" alt="">
                        <div class="caption">
                            <h3>अंगूर</h3>
                           
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">आगे देखें</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="sorting.php" class="btn btn-block btn-success" >आगे देखें</a>';
                                } else {
                                    ?>
                                    <a href="sorting.php" name="add" value="add" class="btn btn-block btn-success">आगे देखें</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/fruits/Papita.jpg" alt="">
                        <div class="caption">
                            <h3> पपीता </h3>
                           
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">आगे देखें</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(2)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="sorting.php" class="btn btn-block btn-success" >आगे देखें</a>';
                                } else {
                                    ?>
                                    <a href="sorting.php" name="add" value="add" class="btn btn-block btn-success">आगे देखें</a>
                                    <?php
                                }
                            }
                            ?>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/fruits/Red-Apple-Drops-Wallpaper-42315.jpg" alt="">
                        <div class="caption">
                            <h3>सेब </h3>
                       
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">आगे देखें</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(3)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="sorting.php" class="btn btn-block btn-success" >आगे देखें</a>';
                                } else {
                                    ?>
                                    <a href="sorting.php" name="add" value="add" class="btn btn-block btn-success">आगे देखें</a>
                                    <?php
                                }
                            }
                            ?>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/fruits/banana-Wallpaper-10376.jpg" alt="">
                        <div class="caption">
                            <h3>केला </h3>
                       
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">आगे देखें</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(4)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="sorting.php" class="btn btn-block btn-success">आगे देखें</a>';
                                } else {
                                    ?>
                                    <a href="sorting.php" name="add" value="add" class="btn btn-block btn-success">आगे देखें</a>
                                    <?php
                                }
                            }
                            ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row text-center" id="watches">
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/fruits/fruits-cherries-drops-1.jpg" alt="">
                        <div class="caption">
                            <h3>चेरी </h3>
                      
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">आगे देखें</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(5)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="sorting.php" class="btn btn-block btn-success" >आगे देखें</a>';
                                } else {
                                    ?>
                                <a href="sorting.php" name="add" value="add" class="btn btn-block btn-success">आगे देखें</a>
                                    <?php
                                }
                            }
                            ?>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/fruits/fresh-pomegranate.jpg" alt="">
                        <div class="caption">
                            <h3>अनार </h3>
                      
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">आगे देखें</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(6)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="sorting.php" class="btn btn-block btn-success" >आगे देखें</a>';
                                } else {
                                    ?>
                                    <a href="sorting.php" name="add" value="add" class="btn btn-block btn-success">आगे देखें</a>
                                    <?php
                                }
                            }
                            ?>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/fruits/Melon-Fruit-Close-Up.jpg" alt="">
                        <div class="caption">
                            <h3>ख़रबूज़ा </h3>
              
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">आगे देखें</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(7)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="sorting.php" class="btn btn-block btn-success" >आगे देखें</a>';
                                } else {
                                    ?>
                                    <a href="sorting.php" name="add" value="add" class="btn btn-block btn-success">आगे देखें</a>
                                    <?php
                                }
                            }
                            ?>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/fruits/mango_1.jpg" alt="">
                        <div class="caption">
                            <h3>आम </h3>
                       
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">आगे देखें</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(8)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="sorting.php" class="btn btn-block btn-success" >आगे देखें</a>';
                                } else {
                                    ?>
                                    <a href="sorting.php" name="add" value="add" class="btn btn-block btn-success">आगे देखें</a>
                                    <?php
                                }
                            }
                            ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row text-center" id="shirts">
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/fruits/orange-27799-28521-hd-wallpapers.jpg" alt="">
                        <div class="caption">
                            <h3>संतरा </h3>
                           
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">आगे देखें</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(9)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="sorting.php" class="btn btn-block btn-success" >आगे देखें</a>';
                                } else {
                                    ?>
                                    <a href="sorting.php" name="add" value="add" class="btn btn-block btn-success">आगे देखें</a>
                                    <?php
                                }
                            }
                            ?>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/fruits/pineapple-background-hd-1920x1200-291148.jpg" alt="">
                        <div class="caption">
                            <h3>अनानास </h3>
                       
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">अभी खरीदें</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(10)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="sorting.php" class="btn btn-block btn-success" >आगे देखें</a>';
                                } else {
                                    ?>
                                    <a href="sorting.php" name="add" value="add" class="btn btn-block btn-success">आगे देखें</a>
                                    <?php
                                }
                            }
                            ?>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/fruits/watermelon-wallpaper-hd-1920x1200-162589.jpg" alt="">
                        <div class="caption">
                            <h3>तरबूज़ </h3>
                       
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">आगे देखें</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(11)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="sorting.php" class="btn btn-block btn-success" >आगे देखें</a>';
                                } else {
                                    ?>
                                    <a href="sorting.php" name="add" value="add" class="btn btn-block btn-success">आगे देखें</a>
                                    <?php
                                }
                            }
                            ?>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/fruits/strawberry_texture2593.jpg" alt="">
                        <div class="caption">
                            <h3>स्ट्रॉबेरी </h3>
                           
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">आगे देखें</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(12)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="sorting.php" class="btn btn-block btn-success" >आगे देखें</a>';
                                } else {
                                    ?>
                                    <a href="sorting.php" name="add" value="add" class="btn btn-block btn-success">आगे देखें</a>
                                    <?php
                                }
                            }
                            ?>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
            <hr>
        </div>

        <?php include("includes/footer.php"); ?>
    </body>

</html>
