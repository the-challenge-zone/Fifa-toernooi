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
                        <div class="col-2"><center><a href="./">Sign Up</a></center></div>
                    </div>
                   
                </div>
    </nav>
    <div class="content-wrapper">
    <title>Contact</title>
    <div class ='d-flex justify-content-around'>
    <h2>lets get in touch</h2>
        
                
        </div>
               
       <div class='Container'>
       <div class ='d-flex justify-content-around'>
       
              
       <form action="/action_page.php">
    <div class=col-md-5>

        <label for="fname">Username:</label><br>
        <input type="text" id="sName" name="fname" value="jou naam"><br>
        <label for="Email">Email:</label><br>
        <input type="email" id="sEmail" name="lname" value="uw Email"><br>
        <label for="sTel">onderwerp:</label><br>
        <input type="sTel" id="sTel" name="lname" value="subject"><br>
        <label for="sTel">Telefoon:</label><br>
        <input type="sTel" id="sTel" name="lname" value="Telefoon"><br>
        
    </div>
    <div class="col-md-2"></div>
    <div class="col-md-5">
        <label for="sMessage">Uw bericht</label><br>
        <textarea name="sMessage" style=" width:400px; height: 140px;"></textarea>
    </div>
    <br>
    <div class="col-md-12">
        <input type="submit" value="Submit">
      </form>
    </div>
                    
                <p>
                
                </br>
                    <b> &nbsp; Naam: </b>Kevin Smlatić</br>
                    <b> &nbsp; Email: </b>211690@vistacollege.nl</br>
                    <b> &nbsp; Telefoon nummer: </b>040404040 </br>
                    <b> &nbsp; adress: </b>Valkenburgerweg 148, 6419 AW Heerlen
                    <iframe style="width: 70%;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7120.34798850613!2d5.95707769862366!3d50.87887774976183!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c0bdc7aa05ae5b%3A0xb9026263fa8e0a1f!2sVISTA%20college!5e0!3m2!1snl!2snl!4v1639126969258!5m2!1snl!2snl"
                         width="150" height="150" style="border:0;" allowfullscreen="" loading="lazy"></iframe>                
                </br>
                    <a href=""> <img width="8%" src="./Image/Link_Logo.PNG"> </a> 
                        <a href=""> <img width='8%' src="./Image/Face_Logo.PNG"> </a>
                        <a href=""> <img width='8%' src="./Image/Git_Logo.JPG"> </a>

    </div>
    </div
</body>
<
</html>