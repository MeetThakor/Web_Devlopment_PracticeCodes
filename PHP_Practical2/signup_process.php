<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<?php include("navbar.php");?>
<?php include("dbo.php");?>

<?php 
    $id= 1;
    $firstname= mysqli_real_escape_string($conn,$_POST['firstname']);
    $lastname= ($_POST['lastname']);
    $username= $firstname.$lastname;
    $username= strtolower($username);
    $address= ($_POST['address']);
    $city= ($_POST['city']);
    $state= ($_POST['state']);
    $pincode= ($_POST['pincode']);
    $mobileno= ($_POST['mobilenumber']);
    $email= ($_POST['email']);
    $password =  ($_POST['password']);

    if(!empty($firstname) and !empty($lastname)and !empty($password)){
            $id=$id+1;
            $sql = "INSERT INTO user(id, username, password, firstname, lastname, address, city, state, pincode, mobileno, email) VALUES('$id','$username','$password','$firstname','$lastname','$address','$city','$state',$pincode,$mobileno,'$email')";

            $conn->query($sql);                 
                
            header("location:login.php");        
            
        } 
        else{
            echo "Error! - Enter details correctly";
        }  
?>
<!--<div class="card">
  <h5 class="card-header">Confirm details</h5>
  <div class="card-body">
    <h5 class="card-title"><?php echo "$firstname $lastname" ?></h5>
    <p class="card-text"><?php echo "$address <br>$city, $state, $pincode"?></p>
    <h6 class="card-title"><?php echo "$mobileno" ?></h6>
    <h6 class="card-title"><?php echo "$email" ?></h6>
    <a href="" onclick="authenticate()" class="btn btn-primary">Confirm</a>
  </div>
</div>-->


