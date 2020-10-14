<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<br><br>
<div class="container">
<?php
    if(!empty($_COOKIE['username'])){
        include("af_login_navbar.php");
        echo "Welcome $username";
        echo "\tGet some things from shop tab!!!";
    }
    else{
        include("navbar.php");
        echo "Please login to continue shopping....";
    }
   
?>
</div>