<?php include("dbo.php")?>

<?php
    $username= $_POST['username'];
    $password= $_POST['password'];

    $sql = "SELECT username,password FROM user where username = '$username' and password = '$password'";

    $result = $conn->query($sql);

    if($result->num_rows > 0){
        setcookie("username",$username);
        header('location:welcome.php');
    }else{
        header('location:login.php?error=1');
    }

?>