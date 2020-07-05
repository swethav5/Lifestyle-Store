<?php
require 'includes/common.php';
if (isset($_SESSION['email'])) {
    header('location: products.php');
}
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Sign Up</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css"  type="text/css">   
        
    </head>
    <body>
    <?php
    include 'includes/header.php';
    ?>
        <div class="container">
            
            <div class="row">
                <div class="col-xs-offset-3"><h2 style="margin-top: 90px;font-weight:bold">SIGN UP</h2></div>
                
               
                
                <form method="post" action="signup_script.php">
            
            <div class="form-group">
                <div class="row">
                  <div class="col-xs-offset-3 col-xs-6">  
                
                      <input type="text"  class="form-control" name="name"  placeholder="Name" required="true" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$">
                  </div>
                </div>
            </div>    
            <div class="form-group">
                <div class="row">
                  <div class="col-xs-offset-3 col-xs-6">  
                
                      <input type="text"  class="form-control" name="email"  placeholder="Email" required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" >
                      <?php
                                if(isset($_GET["m1"])){
                                  echo $_GET['m1'];
                                }
                                ?>
                  </div>
                </div>
            </div>    
            <div class="form-group">
                <div class="row">
                  <div class="col-xs-offset-3 col-xs-6">  
                
                      <input type="password"  class="form-control" name="password"  placeholder="Password" required="true" pattern=".{6,}" >
                  </div>
                </div> 
            </div>
            <div class="form-group">
                <div class="row">
                  <div class="col-xs-offset-3 col-xs-6">  
                
                      <input type="text"  class="form-control" name="contact"  placeholder="Contact" required="true" maxlength="10" size="10" >
                      <?php
                                if(isset($_GET["m2"])){
                                  echo $_GET['m2'];
                                }
                                ?>
                  </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                  <div class="col-xs-offset-3 col-xs-6">  
                
                <input type="text"  class="form-control" name="city"  placeholder="City" >
                  </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                  <div class="col-xs-offset-3 col-xs-6">  
                
                <input type="text"  class="form-control" name="address"  placeholder="Address" >
                  </div>
                </div>
            </div> 
            
             <div class="row">   
                 <div class="col-xs-offset-3 col-xs-6">
            <input type="submit" value="Submit" class="btn btn-primary">
                 </div>
             </div>
        </form>
                
            </div>
        </div>    
       <?php
    include 'includes/footer.php';
       ?>
    </body>
</html>
