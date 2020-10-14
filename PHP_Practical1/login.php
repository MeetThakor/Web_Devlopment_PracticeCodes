<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<?php include("navbar.php");?>
<br>
<div class="container">
        <form action="login_process.php" method="POST" >
            <div class="row">
                <div class="col">
                    <button type="button" class="btn btn-info">
                        Login Here
                    </button>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <input type="text" class="form-control" name="firstname" placeholder="Enter your First Name">
                        
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <input type="text" class="form-control" name="lastname" placeholder="Enter your Last Name">
                    </div>
                </div>
            </div>
            <div class="form-group">
                        <input type="text" class="form-control" name="mobilenumber" placeholder="Enter your Contact Number" size="10">
            </div>
            <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="Enter your Email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <textarea class="form-control" name="address" placeholder="Enter your Residential Address"></textarea>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                            <input type="text" class="form-control" name="city" placeholder="Enter City">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                            <input type="text" class="form-control" name="state" placeholder="Enter State">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                            <input type="text" class="form-control" name="pincode" placeholder="Enter Pincode">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="mx-auto">
                <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>

</div>

