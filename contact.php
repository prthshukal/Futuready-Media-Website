<?php
$title = 'Contact | Futuready Media';

$keywords='';

$description='';
?>


    <!--including header file-->
    <?php include 'include/header.php'; ?>

    <!--Including Slider files -->
    <?php include 'include/slider.php'; ?>

   
    
       <section class="inner-contact">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-5 plr0 bgcontact">
                    <div class="short-contact">
                        <div class="short-contact-box2">
                            <h4>Address</h4>
                            <p style="color:#000000;">302-B, Dipti Classic, Suren Road, Andheri East, Mumbai 400053</p>
                        </div>
                        <div class="short-contact-box2">
                            <h4>Call Us</h4>
                            <p><a class="color" href="tel:+91 22 4023 2263">+91 22 4023 2263</a></p>
                        </div>
                        <div class="short-contact-box2">
                            <h4>Email</h4>
                            <p><a class="color" href="mailto:info@futureadymedia.com">info@futureadymedia.com</a></p>
                        </div>
                        <ul class="list-inline about-social m50">
                            <li><a href="https://www.linkedin.com/company-beta/2435711/" target="_blank"><i class="fa fa-linkedin tw"></i></a></li>
                            <li><a href="https://www.facebook.com/futureadymedia/" target="_blank"><i class="fa fa-facebook fb"></i></a></li>
                            <li><a href="https://twitter.com/FutureadyMedia" target="_blank"><i class="fa fa-twitter tw"></i></a></li>
                            <li><a href="https://www.youtube.com/channel/UCTfxtQyIJyvlpwKrvLsRj7w" target="_blank"><i class="fa fa-youtube pn"></i></a></li>
                            <li><a href="https://www.instagram.com/futureadymedia/" target="_blank"><i class="fa fa-instagram in"></i></a></li>
                            
                        </ul>
                    </div>
                </div>
                <div class="col-sm-7">
                    <form id="form-submit" name="form-submit" method="POST" action="" class="form-area-right">
                        <h3>get in touch</h3>
                        <div class="col-sm-6">
                            <input type="text" name="username" id="username" class="form-control" placeholder="Name">
                        </div>
                        <div class="col-sm-6">
                            <input type="number" name="phone" id="phone" class="form-control" placeholder="Phone">
                        </div>
                        <div class="col-sm-12">
                            <input type="email" name="email" id="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="col-sm-12">
                            <input type="text" name="message" id="message" class="form-control" placeholder="Message">
                        </div>
                        <div class="col-sm-12">
                            <button type="button" class="btn btn-work btn-work-n" id="submit-btn">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--map-->
    <section class="map-area container-fluid">
        <div class="row mp">
            <div id="googleMap" class="google-maps"></div>
        </div>
    </section>
    <!--map-->

    <!--Including footer file-->
   <?php include 'include/footer.php'; ?>