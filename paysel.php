<?php
require("includes/common.php");



?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Payment Selection</title>
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
               
  <h1>Car Registration Complete</h1>
  <p>Proceed to payment</p>
  <p><a class="btn btn-success btn-lg" href="#" role="button">About us</a></p>
</div>
           
            <h3>Choose Payment option</h3>
             </center>
           
            <div class="container-fluid bg-success" >
                <div class="row text-center" id="item_list">
                    <div class="col-sm-6">
                        <a href="paytm.php" >
                            <div class="thumbnail">
                                <img src="#" alt="">
                                <div class="caption">
                                    <h3>PayTM</h3>
                                    <p>To use e-Wallet</p>
                                </div>
                            </div> 
                        </a>
                    </div>

                    <div class="col-sm-6">
                        <a href="card.php" >
                            <div class="thumbnail">
                                <img src="#" alt="">
                                <div class="caption">
                                    <h3>Credit Card</h3>
                                    <p>Pay through card.
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