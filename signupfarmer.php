<?php
require("includes/common.php");
if (isset($_SESSION['email'])) {
    header('location: product_upload_show.php');
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Signup | FPFS</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php include 'includes/header.php'; ?>
        <div class="container-fluid decor_bg" id="content">
            <div class="row">
                <div class="container">
                    <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3">
                        <h2>किसान साइन अप करें </h2>
                        <form  action="signupfarmer_script.php" method="POST">
                            <div class="form-group">
                                <input class="form-control" placeholder="नाम " name="name"  required = "true" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control"  placeholder="ईमेल " pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"  name="e-mail" required = "true">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="पासवर्ड " pattern=".{6,}" name="password" required = "true">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control"  placeholder="आधार नंबर " maxle"ngth="12" size="12" name="aadhar_num" required = "true">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control"  placeholder="किसान आईडी " maxlength="10" size="10" name="farmer_id" required = "true">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control"  placeholder="कॉन्टैक्ट " maxlength="10" size="10" name="contact" required = "true">
                            </div>
                            
                            <div class="form-group">
                                <input  type="text" class="form-control"  placeholder="शहर " name="city" required = "true">
                            </div>
                            <div class="form-group">
                                <input  type="text" class="form-control"  placeholder="पता " name="address" required = "true">
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary">जमा करें </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php include "includes/footer.php"; ?>
    </body>
</html>