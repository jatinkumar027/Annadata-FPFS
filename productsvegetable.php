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
                <center><h1>सब्जियां</h1>
                <p>
किसान उत्पाद कम से कम दामों पर सीधा आपके घर तक</p></center>

            </div>
            <hr>

            <div class="row text-center" id="cameras">
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/vegeies/karela.jpg" alt="">
                        <div class="caption">
                            <h3>करेला</h3>
                           
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">आगे देखें </a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="sorting.php" class="btn btn-block btn-success">आगे देखें </a>';
                                } else {
                                    ?>
                                    <a href="sorting.php" name="add" value="add" class="btn btn-block btn-success">आगे देखें </a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/vegeies/169-1694751_potato-wallpaper-potato-1920-x-1080" alt="">
                        <div class="caption">
                            <h3> आलू</h3>
                           
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">आगे देखें </a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(2)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="sorting.php" class="btn btn-block btn-success" >आगे देखें </a>';
                                } else {
                                    ?>
                                    <a href="sorting.php" name="add" value="add" class="btn btn-block btn-success">आगे देखें </a>
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
                        <img src="img/vegeies/onion" alt="">
                        <div class="caption">
                            <h3>प्याज़</h3>
                       
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">आगे देखें </a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(3)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="sorting.php" class="btn btn-block btn-success" >आगे देखें </a>';
                                } else {
                                    ?>
                                    <a href="sorting.php" name="add" value="add" class="btn btn-block btn-success">आगे देखें </a>
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
                        <img src="img/vegeies/shalgam.jpg" alt="">
                        <div class="caption">
                            <h3>शलगम </h3>
                       
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">आगे देखें </a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(4)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="sorting.php" class="btn btn-block btn-success" >आगे देखें </a>';
                                } else {
                                    ?>
                                    <a href="sorting.php" name="add" value="add" class="btn btn-block btn-success"> आगे देखें </a>
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
                        <img src="img/vegeies/shalgam.jpg" alt="">
                        <div class="caption">
                            <h3>टिंडा</h3>
                      
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">आगे देखें </a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(5)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="sorting.php" class="btn btn-block btn-success" >आगे देखें </a>';
                                } else {
                                    ?>
                                    <a href="sorting.php" name="add" value="add" class="btn btn-block btn-success">आगे देखें  </a>
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
                        <img src="img/vegeies/tamatar.jpg" alt="">
                        <div class="caption">
                            <h3>टमाटर</h3>
                      
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">आगे देखें </a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(6)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="sorting.php" class="btn btn-block btn-success" >आगे देखें </a>';
                                } else {
                                    ?>
                                    <a href="sorting.php" name="add" value="add" class="btn btn-block btn-success">आगे देखें  </a>
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
                        <img src="img/vegeies/cauliflower-1676194_1920.jpg" alt="">
                        <div class="caption">
                            <h3>फूल गोभी</h3>
              
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">आगे देखें  </a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(7)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="sorting.php" class="btn btn-block btn-success" >आगे देखें </a>';
                                } else {
                                    ?>
                                    <a href="sorting.php" name="add" value="add" class="btn btn-block btn-success">आगे देखें  </a>
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
                        <img src="img/vegeies/cabbage.jpg" alt="">
                        <div class="caption">
                            <h3>पत्ता गोभी </h3>
                       
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">आगे देखें  </a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(8)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="sorting.php" class="btn btn-block btn-success" >आगे देखें </a>';
                                } else {
                                    ?>
                                    <a href="sorting.php" name="add" value="add" class="btn btn-block btn-success">आगे देखें  </a>
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
                        <img src="img/vegeies/Bhindi.jpg" alt="">
                        <div class="caption">
                            <h3>भिंडी</h3>
                           
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">आगे देखें </a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(9)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="sorting.php" class="btn btn-block btn-success"  >आगे देखें </a>';
                                } else {
                                    ?>
                                    <a href="sorting.php" name="add" value="add" class="btn btn-block btn-success">आगे देखें  </a>
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
                        <img src="img/vegeies/bengan.jpg" alt="">
                        <div class="caption">
                            <h3>बैंगन</h3>
                       
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">आगे देखें </a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(10)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="sorting.php" class="btn btn-block btn-success" >आगे देखें </a>';
                                } else {
                                    ?>
                                    <a href="sorting.php" name="add" value="add" class="btn btn-block btn-success">आगे देखें  </a>
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
                        <img src="img/vegeies/nimbu.jpg" alt="">
                        <div class="caption">
                            <h3>निम्बू</h3>
                       
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">आगे देखें  </a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(11)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="sorting.php" class="btn btn-block btn-success" >आगे देखें </a>';
                                } else {
                                    ?>
                                    <a href="sorting.php" name="add" value="add" class="btn btn-block btn-success">आगे देखें  </a>
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
                        <img src="img/vegeies/dhaniya.jpg" alt="">
                        <div class="caption">
                            <h3>धनिया</h3>
                           
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">आगे देखें </a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(12)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="sorting.php" class="btn btn-block btn-success" >आगे देखें </a>';
                                } else {
                                    ?>
                                    <a href="sorting.php" name="add" value="add" class="btn btn-block btn-success">आगे देखें </a>
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
