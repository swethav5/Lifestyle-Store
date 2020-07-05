<?php
    require 'includes/common.php';
    if (isset($_SESSION['email']))
        {   header('location: products.php'); }
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Login</title>
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
                <div class="col-xs-offset-4 col-xs-5">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h4>Login</h4>
                        </div>
                        <div class="panel-body">
                            <p class="text-warining">Login to make a purchase</p>
                            
                            <form method="post" action="login_submit.php">
                                
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <input type="text"  class="form-control" name="email"  placeholder="Email" >
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                             <div class="row">
                                 <div class="col-xs-12">
                                       <input type="password"  class="form-control" name="password" placeholder="Password">
                                 </div>
                             </div>
                            </div>
                            <input type="submit" value="Login" class="btn btn-primary">
                            </form>
                                
                        </div><br><br><br>
                        <div class="panel-footer">Don't have an account?<a href="signup.php"> Register</a></div>
                    </div>
                </div>
            </div>
        </div>
    <?php
        include 'includes/footer.php';
    ?>
    
        
    </body>
</html>
