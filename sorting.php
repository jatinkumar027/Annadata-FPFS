<?php
require("includes/common.php");

?>
<html> 
    <head> <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Show All Farmers Portal | FPFS</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script></head>
    <body>
        <div class="container-fluid" id="content">
            <?php include ("includes/header.php"); ?>
            <div class="row decor_bg">
                <div class="col-md-6 col-md-offset-3">
                    <table class="table table-striped">
<?php

 
 $query = "SELECT * FROM product_details WHERE name='Aalu'";
 
 $data = mysqli_query($con,$query);
 
 $total = mysqli_num_rows($data);
 
 //$result = mysqli_fetch_assoc($data);
 //echo $total;
 if($total!=0)
 {
	?> <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Farmer Id</th>
                                </tr>
      </thead>
      <tbody>                                   
 <?php                      
     $count = $total;
	 while($count>=0)
	 {
             $result = mysqli_fetch_array($data);
		 echo  "<tr><td>".$result['name']."</td><td>".$result['price']."</td><td>".$result['quantity']."</td><td>".$result['farmer_id']."</td></tr>"."</td><td><a href='cart.php?itemsid=" . "'class='btn btn-primary'>Add to cart</a></td></tr>";   
          $count--;
	 }
         
   //echo $total;	 
 }
 //else {
 //echo "not available";
 //}
?>
            </table>
                </div>
            </div>
        </div>
        <?php include("includes/footer.php"); ?>
        </body>
</html>