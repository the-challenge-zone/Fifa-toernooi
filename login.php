<?php   



include('Database_inc.php');














?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Login</title>
    <link rel="stylesheet" href="./CSS/stylesheet.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" 
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
            crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" 
            crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" 
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" 
            crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" 
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" 
            crossorigin="anonymous"></script>
   
</head>
<body>
    <nav>
        <!--ID"navbar" is de menubalk-->
        <div class="row justify-content-left" id="navbar">
                    <!--de afbeelding voor aan de menubalk-->
                    <div class="col-2">
                        <center>
                            <img src="./Image/Logo.jpg" width="50%"/>
                        </center>
                    </div>
                    <!--de rest van de menubalk-->
                    <div class="col-1"><center><a href="./index.php" class="selected">Home</a></center></div>         
                    <div class="col-1"><center><a href="./">Informatie</a></center></div>
                    <div class="col-1"><center><a href="./">Contact</a></center></div>
                    <div class="col-1"><center><a href="./">Erebezoekers</a></center></div>
                    <div class="flex-grow-1 row justify-content-center">
                        <div class="col-1"><center><a href="./login.php">Login</a></center></div>
                    </div>
                </div>
    </nav>
    <!--Start Login -->
        <div class="container login-container">
        <div class="row">
            <div class="col-md-6 login-form">
            <div class="profile-img">
                <img src="./Image/user.png" alt="profile_img" height="140px" width="140px;">
            </div>
            <h3>Login</h3>
            <form>
                <div class="form-group">
                <input type="text" class="form-control" name="username" placeholder="Username">
                </div>
                <div class="form-group">
                <input type="text" class="form-control" name="password" placeholder="Password">
                </div>
                <div class="form-group">
                <button type="button" class="btn btn-secondary btn-lg btn-block">Login</button>
                </div>
                <div class="form-group Signup">
                    <a href="#">Sign Up</a>
                </div>
                <div class="form-group forget-password">
                    <a href="#">Forget Password</a>
                </div>
            </form>
            </div>
        </div>
        </div>
</body>
</html>
<?php include('Footer.php')?>
<!--https://codepen.io/baahubali92/pen/jXXxeG
contact form : Anup Kuma
license.txt if te open lifens that is linkt to the Contact.php
-->

