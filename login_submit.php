<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
if(isset($_POST["submit"])){  
  
if(!empty($_POST['email']) && !empty($_POST['password'])) {  
    $email=$_POST['email'];  
    $password=$_POST['password'];  
  
    $con=mysqli_connect('localhost','root','','parking',3308) or die(mysqli_error());  
    mysqli_select_db($con,'parking') or die("cannot select DB");  
    
  
    $query=mysqli_query($con,"SELECT * FROM users WHERE email='".$email."' AND password='".$password."'");  
    $numrows=mysqli_num_rows($query);  
    if($numrows!=0)  
    {  
    while($row=mysqli_fetch_assoc($query))  
    {  
    $dbuseremail=$row['email'];  
    $dbpassword=$row['password'];  
    }  
  
    if($email == $dbuseremail && $password == $dbpassword)  
    {  
    session_start();  
    $_SESSION['sess_user']=$email;  
  
    /* Redirect browser */  
    header("Location: carreg.php");  
    }  
    } else {  
    echo "Invalid username or password!";  
    }  
  
} else {  
    echo "All fields are required!";  
}  
}  
?>  

