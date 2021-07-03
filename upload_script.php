<?php

require("includes/common.php");

  // Getting the values from the signup page using $_POST[] and cleaning the data submitted by the user.
  $pname = $_POST['pname'];
  $pname = mysqli_real_escape_string($con, $pname);
  
  
  $pprice = $_POST['pprice'];
  $pprice = mysqli_real_escape_string($con, $pprice);
  
  $pquantity = $_POST['pquantity'];
  $pquantity = mysqli_real_escape_string($con, $pquantity);
  
   $farmer_id = $_POST['farmer_id'];
  $farmer_id = mysqli_real_escape_string($con, $farmer_id);
 
/*
  $query = "SELECT * FROM users WHERE email='$email'";
  $result = mysqli_query($con, $query)or die($mysqli_error($con));
  $num = mysqli_num_rows($result);
  
  if ($num != 0) {
    $m = "<span class='red'>Email Already Exists</span>";
    header('location: signup.php?m1=' . $m);
  } else if (!preg_match($regex_email, $email)) {
    $m = "<span class='red'>Not a valid Email Id</span>";
    header('location: signup.php?m1=' . $m);
  } else if (!preg_match($regex_num, $contact)) {
    $m = "<span class='red'>Not a valid phone number</span>";
    header('location: signup.php?m2=' . $m);
  } else {
    */
    $query = "INSERT INTO product_details(name, price, quantity, farmer_id)VALUES('" . $pname . "','" . $pprice . "','" . $pquantity . "','" . $farmer_id . "')";
    mysqli_query($con, $query) or die(mysqli_error($con));
    $user_id = mysqli_insert_id($con);
    $_SESSION['email'] = $email;
    $_SESSION['user_id'] = $user_id;
    header('location: product_upload_show.php');
  //}
 
?>