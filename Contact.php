<php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./CSS/stylesheet.css">
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
    <section class="contact-page-section">
      <div class="container">
          <div class="sec-title">
              <div class="title">Contact Us</div>
                <h2>Let's Get in Touch.</h2>
            </div>
            <div class="inner-container">
              <div class="row clearfix">
                
                  <!--Form Column-->
                    <div class="form-column col-md-8 col-sm-12 col-xs-12">
                      <div class="inner-column">
                          
                            <!--Contact Form-->
                            <div class="contact-form">
                                <form method="post" action="sendemail.php" id="contact-form">
                                    <div class="row clearfix">
                                        <div class="form-group col-md-6 col-sm-6 co-xs-12">
                                            <input type="text" name="name" value="" placeholder="Name" required>
                                        </div>
                                        <div class="form-group col-md-6 col-sm-6 co-xs-12">
                                            <input type="email" name="email" value="" placeholder="Email" required>
                                        </div>
                                        <div class="form-group col-md-6 col-sm-6 co-xs-12">
                                            <input type="text" name="subject" value="" placeholder="Subject" required>
                                        </div>
                                        <div class="form-group col-md-6 col-sm-6 co-xs-12">
                                            <input type="text" name="phone" value="" placeholder="Phone" required>
                                        </div>
                                        <div class="form-group col-md-12 col-sm-12 co-xs-12">
                                            <textarea name="message" placeholder="Message"></textarea>
                                        </div>
                                        <div class="form-group col-md-12 col-sm-12 co-xs-12">
                                            <button type="submit" class="theme-btn btn-style-one">Send Now</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!--End Contact Form-->
                            
                        </div>
                    </div>
                    
                    <!--Info Column-->
                    <div class="info-column col-md-4 col-sm-12 col-xs-12">
                      <div class="inner-column">
                          <h2>Contact Info</h2>
                            <ul class="list-info">
                              <li><i class="fas fa-globe"></i><b> &nbsp; adress: </b>Valkenburgerweg 148, 6419 AW Heerlen
                    <iframe style="width: 70%;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7120.34798850613!2d5.95707769862366!3d50.87887774976183!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c0bdc7aa05ae5b%3A0xb9026263fa8e0a1f!2sVISTA%20college!5e0!3m2!1snl!2snl!4v1639126969258!5m2!1snl!2snl"
                         width="150" height="150" style="border:0;" allowfullscreen="" loading="lazy"></iframe></li>
                                <li><i class="far fa-envelope"></i>401311@vistacollege.nl</li>
                                <li><i class="far fa-envelope"></i>Dylan Mulders</li>
                                <li><i class="fas fa-phone"></i>1-234-567-890 <br> 1-234-567-890</li>
                            </ul>
                            <ul class="social-icon-four">
                                <li class="follow">Follow on: </li>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>                

<?php include('Footer.php')?>
</html>
<!--https://codepen.io/baahubali92/pen/jXXxeG
contact form : Anup Kuma
license.txt if te open lifens that is linkt to the Contact.php
-->