<?php
require 'includes/common.php';
if(!isset($_SESSION['email'])){
    header('location:index.php');
}?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Settings</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css"  type="text/css">   
        
    </head>
    <body>
       <?php
       require 'includes/header.php';
       ?>
       <div class="container">
            
           <form method="post" action="settings_script.php">
                        <div class="row">
                            <div class="col-xs-offset-3 col-xs-6">
                                <h4 style=" margin-top: 90px; font-weight: bold">Change Password</h4>
                            </div>
                        </div>   
                        <div class="form-group">
                            <div class="row">
                                <div class="col-xs-offset-3 col-xs-6">
                                    <input type="password"  class="form-control" name="oldpassword"  placeholder="Old Password" >
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-xs-offset-3 col-xs-6">
                                    <input type="password"  class="form-control" name="newpassword"  placeholder="New Password" >
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-xs-offset-3 col-xs-6">
                                    <input type="password"  class="form-control" name="Re-typepassword"  placeholder="Re-type Password" >
                                </div>
                            </div>
                        </div>
                        <div class="row">
                           <div class="col-xs-offset-3 col-xs-6"> 
                                <input type="submit" value="Change" class="btn btn-primary">
                           </div>
                        </div>
                        
                    </form>
                
                        
        </div>
       <?php
       require 'includes/footer.php';
       ?>
       
    </body>
</html>
