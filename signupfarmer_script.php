<?php

require("includes/common.php");
error_reporting(0);
  // Getting the values from the signup page using $_POST[] and cleaning the data submitted by the user.
  $name = $_POST['name'];
  $name = mysqli_real_escape_string($con, $name);

  $email = $_POST['e-mail'];
  $email = mysqli_real_escape_string($con, $email);

  $password = $_POST['password'];
  $password = mysqli_real_escape_string($con, $password);
  $password = MD5($password);

  $aadhar_num = $_POST['aadhar_num'];
  $aadhar_num = mysqli_real_escape_string($con, $aadhar_num);
  
   $farmer_id = $_POST['farmer_id'];
  $farmer_id = mysqli_real_escape_string($con, $farmer_id);
  
  $contact = $_POST['contact'];
  $contact = mysqli_real_escape_string($con, $contact);
  
  

  $city = $_POST['city'];
  $city = mysqli_real_escape_string($con, $city);

  $address = $_POST['address'];
  $address = mysqli_real_escape_string($con, $address);

  $regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
  $regex_num = "/^[789][0-9]{9}$/";
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
    
    */$query = "INSERT INTO farmer_table(name, email, password, aadhar, farmerid, contact, city, address)VALUES('" . $name . "','" . $email . "','" . $password . "','" . $aadhar_num . "','" . $farmer_id . "','" . $contact . "','" . $city . "','" . $address . "')";
    mysqli_query($con, $query) or die(mysqli_error($con));
    //$user_id = mysqli_insert_id($con);
    $_SESSION['email'] = $email;
   //$_SESSION['user_id'] = $user_id;
    header('location: product_upload_farmer.php');
  //}
 
?>