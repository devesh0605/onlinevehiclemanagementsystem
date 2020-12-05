<?php
require("includes/common.php");



?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Happy Parking</title>
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
        <?php
        include 'includes/header.php';
        ?>
        
       

        <div id="content">
            <center>
           
           <div class="jumbotron bg-info">
               
  <h1>Thank you for parking with us!</h1>
  <p>Your vehicles are safe</p>
  <p><a class="btn btn-success btn-lg" href="#" role="button">About us</a></p>
</div>
           
            <h3>Choose further path</h3>
             </center>
           
            <div class="container-fluid bg-success" >
                <div class="row text-center" id="item_list">
                    <div class="col-sm-6">
                        <a href="paytm.php" >
                            <div class="thumbnail">
                                <img src="#" alt="">
                                <div class="caption">
                                    <h3>New vehicle</h3>
                                    <p>Register a new vehicle</p>
                                </div>
                            </div> 
                        </a>
                    </div>

                    <div class="col-sm-6">
                        <a href="card.php" >
                            <div class="thumbnail">
                                <img src="#" alt="">
                                <div class="caption">
                                    <h3>Exit</h3>
                                    <p>Leave the parking.
                                    </p>
                                </div>
                            </div> 
                        </a>
                    </div>

                   
                </div>
                
            </div>

            
          
        </div>
        
       
       


        
       
         <?php
        include 'includes/footer.php';
        ?>
       
       
   
    </body> 
</html>