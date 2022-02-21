<?php include('head.php')?>
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
                                            <label for="name-field">Name</label>
                                            <input id="name-field" type="text" name="name" value="" required>
                                        </div>
                                        <div class="form-group col-md-6 col-sm-6 co-xs-12">
                                        <label for="email-field">E-mail</label>
                                            <input id="email-field" type="email" name="email" value="" required>
                                        </div>
                                        <div class="form-group col-md-6 col-sm-6 co-xs-12">
                                        <label for="subject-field">Subject</label>
                                            <input id="subject-field" type="text" name="subject" value="" required>
                                        </div>
                                        <div class="form-group col-md-6 col-sm-6 co-xs-12">
                                        <label for="phone-field">Phone number</label>
                                            <input id="phone-field" type="text" name="phone" value="" required>
                                        </div>
                                        <div class="form-group col-md-12 col-sm-12 co-xs-12">
                                        <label for="message-field">Message</label>
                                            <textarea id="message-field" name="message"></textarea>
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
                                <li><i class="fas fa-phone"></i>0618465673</li>
                            </ul>
                            <ul class="social-icon-four">
                                <li class="follow">Follow on: </li>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                <li> <a href="https://www.instagram.com/vista_esports_cup/"><img width='15%' src="./Image/Instagram-logo.png"></i></a></li> 
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