
$sql = "SELECT username,password FROM st_detail where username = '$username' and password = '$password'";

$result = $conn->query($sql);

if($result->num_rows > 0){
    #header('location:home.php?'.$username);
    echo "Welcome $username";
}else{
    header('location:login.php?error=1');
}