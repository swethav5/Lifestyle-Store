<?php
require 'includes/common.php';
?>
<?php
        if (isset($_SESSION['email']))
        {   header('location: products.php'); }?> 
<!DOCTYPE html>
<html>
    <head>
        <title>Index</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css"  type="text/css">   
    </head>
    <body>
        <?php
            include 'includes/header.php';
        ?>    
    <div id="banner-image">
            <div class="container">
                <div id="banner-content">
                    <h1>We sell lifestyle</h1>
			<p>Flat 40% OFF</p>
                    <a href="products.php" class="btn btn-danger btn-lg active">Shop Now</a>
                </div>
            </div>
     </div>
        <?php
            include 'includes/footer.php';
        ?>    
        
    </body>
</html>
