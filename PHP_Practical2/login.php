<?php include("af_signup_navbar.php");?>
<div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-5">
                <div class="card ">
                    <div class="card-header bg-primary text-white">Login</div>
                    <div class="card-body">
                        <form action="login_process.php" method="POST">
                            <table class="table borderless">
                                <tr>
                                    <td>
                                    <?php
                                            if(isset($_GET['error'])){
                                            
                                            if($_GET['error']==1){
                                                ?>
                                                <div class="alert alert-danger" role="alert">
                                                      Invalid username / password
                                                </div>
                                                <?php
                                            }
                                        }
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td><input type="text" class="form-control" required name="username" placeholder="Enter Username" required/></td>
                                </tr>
                                <tr>
                                    <td><input type="password" class="form-control" required name="password" placeholder="Enter Password" required/></td>
                                </tr>
                                <tr>
                                    <td><input type="submit" class="btn btn-primary btn-full" value="Sign In"/></td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
        
    </div>
