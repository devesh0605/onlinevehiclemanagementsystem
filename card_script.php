<?php

require("includes/common.php");

  // Getting the values from the signup page using $_POST[] and cleaning the data submitted by the user.
  
  
   $contact = $_POST['contact'];
  $contact = mysqli_real_escape_string($con, $contact);

  $cname = $_POST['cname'];
  $cname = mysqli_real_escape_string($con, $cname);

  $cvv = $_POST['cvv'];
  $cvv = mysqli_real_escape_string($con, $cvv);
  
 // $query = "SELECT * FROM vehicle WHERE mob='$contact'";
  //$result = mysqli_query($con, $query)or die($mysqli_error($con));
  //$num = mysqli_num_rows($result);
  $query = "INSERT INTO card(phone, cnum, cvv)VALUES('" . $contact . "','" . $cname . "','" . $cvv . "')";
    mysqli_query($con, $query) or die(mysqli_error($con));
    //$user_id = mysqli_insert_id($con);
    
    header('location: finalpage.php');
    
  
  /*if ($num != 0) {
    $m = "<span class='red'>Email Already Exists</span>";
    header('location: signup.php?m1=' . $m);
  } //else if (!preg_match($regex_email, $email)) {
    //$m = "<span class='red'>Not a valid Email Id</span>";
    //header('location: signup.php?m1=' . $m);}
   else if (!preg_match($regex_num, $contact)) {
    $m = "<span class='red'>Not a valid phone number</span>";
    header('location: signup.php?m2=' . $m);
  } else {
    
    $query = "INSERT INTO vehicle(mob, type, comp, venum, floor, spot,colour)VALUES('" . $contact . "','" . $type . "','" . $comp . "','" . $venum . "','" . $floor . "','" . $spot . "','" . $colour . "')";
    mysqli_query($con, $query) or die(mysqli_error($con));
    //$user_id = mysqli_insert_id($con);
    
    header('location: paysel.php');
    //echo "Vehicle inputted successfully";
  }*/
?>