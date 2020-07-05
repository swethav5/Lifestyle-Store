<?php

require("includes/common.php");

/** @var type $email */
$email = mysqli_real_escape_string($con, $_POST['email']);
$password = mysqli_real_escape_string($con, $_POST['password']);
$password = MD5($password);

// Query checks if the email and password are present in the database.
//$query = "SELECT id, email FROM users WHERE email='$email' and password='$password'";
$result = mysqli_query($con, "SELECT id, email FROM users WHERE email='$email' and password='$password'")or die($mysqli_error($con));
$num = mysqli_num_rows($result);
// If the email and password are not present in the database, the mysqli_num_rows returns 0, it is assigned to $num.
if ($num == 0) {
  $error = $_GET['error'];
  $error = "<span class='red'>Enter Correct E-mail and Password Combination</span>";
  header('location: login.php?error=' . $error);
} else {
  $row = mysqli_fetch_array($result);
  $_SESSION['email'] = $row['email'];
  $_SESSION['user_id'] = $row['id'];
  header('location: products.php');
}
?>
    
            
            

