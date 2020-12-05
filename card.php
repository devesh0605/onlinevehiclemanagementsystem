<?php
require("includes/common.php");

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Credit Card</title>
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
                    <center>
                    <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3">
                        <h4>Credit Card Info(Please follow the instructions)</h4>
                        <form  action="card_script.php" method="POST">
                            <div class="form-group">
                                <input type="text" class="form-control"  placeholder="10 digit Registered Mobile No." pattern="[0-9]{10}" maxlength="10" size="10" name="contact" required = "true">
                            </div>
                            
                            
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Card number 16 digits[0-9]" pattern="[0-9]{16}" name="cname"  required = "true" size="16" maxlength="16" >
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control"  placeholder="CVV 3 digits[0-9]" pattern="[0-9]{3}"  name="cvv" required = "true" size="3" maxlength="3">
                            </div>
                            
                            
                            
                          
                           
                            
                            
                           
                             
                            
                            <div>
                                <center>
                            <button type="submit" name="submit" class="btn btn-success">Pay Now</button>
                                 </center>
                            </div>
                            
                    </form>
                       
                           
                       
                        
                    </div>
                        </center>
                </div>
            </div>
        </div>
        <?php include "includes/footer.php"; ?>
    </body>
</html>