<?php
    require 'includes/common.php';
?>   
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Cart</title>
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
               <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                    <table class="table table-striped">

                        <!--show table only if there are items added in the cart-->
                        <?php
                        $sum = 0;
                        $user_id = $_SESSION['user_id'];
                        $query = "SELECT items.price AS Price, items.id, items.name AS Name FROM users_items JOIN items ON users_items.item_id = items.id WHERE users_items.user_id='$user_id' and status='Added to cart'";
                        $result = mysqli_query($con, $query)or die($mysqli_error($con));
                        if (mysqli_num_rows($result) >= 1) {
                            ?>
                            <thead>
                                <tr>
                                    <th>Item Number</th>
                                    <th>Item Name</th>
                                    <th>Price</th>
                                    <th></th>
                                </tr>
                            </thead>
                            
                            <tbody>
                                <?php
                                while ($row = mysqli_fetch_array($result)) {
                                    $sum+= $row["Price"];
                                    $id="";
                                    $id .= $row["id"] . ",";
                                    echo "<tr>
                                              <td>" . "#" . $row["id"] . "</td>
                                              <td>" . $row["Name"] . "</td>
                                              <td>Rs " . $row["Price"] . "</td>
                                              <td><a href='cart-remove.php?id={$row['id']}' class='remove_item_link'> X </a></td>
                                          </tr>";
                                }
                                $id = rtrim($id, ",");
                                echo "<tr>
                                          <td></td>
                                          <td>Total</td>
                                          <td>Rs " . $sum . "</td>
                                          <td><a href='success.php?itemsid=".$id ."'class='btn btn-primary'>Confirm Order</a></td>
                                          </tr>";
                                ?>
                            </tbody>
                            <?php
                        } else {
                            echo "<center><h2>Add items to the cart first!</h2></center>";
                        }
                        ?>
                        <?php
                        ?>
                    </table>
                </div>
             </div>
        </div>
        <?php
         require 'includes/footer.php';
         ?>
    </body>
</html>
