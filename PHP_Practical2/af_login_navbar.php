<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<?php $username=$_COOKIE['username'];?>
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
  <a class="navbar-brand" href="#">Kidsmart</a>
  

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="welcome.php">Shop</a>
      </li>
      <!--<li class="nav-item">
        <a class="nav-link" href="login.php">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="signup.php">Sign Up</a>
      </li>-->
      <li class="nav-item">
        <a class="nav-link" href="#">About Us</a>
      </li>
    </ul>
    <span class="navbar-item">
      <?php echo "Welcome".$username; ?>
    </span>
  </div>
</nav>