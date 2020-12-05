<?php
require("includes/common.php");

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Car Registration | Life Style Store</title>
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
                        <h4>VEHICLE REGISTRATION</h4>
                        <form  action="carrreg_script.php" method="POST">
                            <div class="form-group">
                                <input type="text" class="form-control"  placeholder="Mobile No." maxlength="10" size="10" name="contact" required = "true">
                            </div>
                             <div>Vehicle Type</div>
                            <div class="form-group">
                                <select class="form-control" placeholder="Type" name="type" required="true">
                                    <option>2-Wheeler</option>
                                    <option>4-Wheeler</option>
                                    
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Company" name="comp"  required = "true" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control"  placeholder="Vehicle Number"  name="venum" required = "true">
                            </div>
                            
                            <div>Select Floor</div>
                            
                             <div class="form-group">
                                <select class="form-control" placeholder="Select Floor" name="floor" required="true">
                                    <option>G</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    
                                    
                                </select>
                            </div>
                            
                            <div>Select Spot</div>
                            <div class="form-group">
                                <select class="form-control" placeholder="Select Spot" name="spot" required="true">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                    <option>9</option>
                                    <option>10</option>
                                    <option>11</option>
                                    <option>12</option>
                                    
                                    
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control"  placeholder="Colour"  name="colour" required = "true">
                            </div>
                            
                            
                           
                             
                            
                            <div>
                                <center>
                            <button type="submit" name="submit" class="btn btn-success">Proceed to Payment</button>
                                 </center>
                            </div>
                            
                    </form>
                        <div>
                                <center>
                            <button type="submit" name="logout" class="btn btn-danger">Logout</button>
                                 </center>
                            </div>
                           
                       
                        
                    </div>
                </div>
            </div>
        </div>
        <?php include "includes/footer.php"; ?>
    </body>
</html>