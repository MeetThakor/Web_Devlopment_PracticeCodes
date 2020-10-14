<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<?php include("navbar.php");?>
<?php 
    $firstname= ($_POST['firstname']);
    $lastname= ($_POST['lastname']);
    $address= ($_POST['address']);
    $city= ($_POST['city']);
    $state= ($_POST['state']);
    $pincode= ($_POST['pincode']);
    $mobileno= ($_POST['mobilenumber']);
    $email= ($_POST['email']);
    setcookie("name",$firstname);
?>
<form action="welcome.php" method="POST">
<div class="card">
  <h5 class="card-header">Confirm details</h5>
  <div class="card-body">
    <h5 class="card-title"><?php echo "$firstname $lastname" ?></h5>
    <p class="card-text"><?php echo "$address <br>$city, $state, $pincode"?></p>
    <h6 class="card-title"><?php echo "$mobileno" ?></h6>
    <h6 class="card-title"><?php echo "$email" ?></h6>
    <a href="welcome.php" class="btn btn-primary">Confirm</a>
  </div>
</div>
</form>