<?php
include 'connection.php';
include 'header.php';
 ?>
    <!--=======Page Heading
    ==================================-->
    <section class="page-heading-section bg-image before-bg" style="background-image: url(images/header/p-header1.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="page-heading">
                        <h2 class="page-name text-capitalize">contact US</h2>
                    </div><!--/.page-heading-->
                </div><!--/.col-md-12-->
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/.page-heading-area-->

    <!--=======Contact Page
    ==================================-->
    <div class="contact-page page-wrapper">
        <section class="contact-form-section bg-image s-pd100" style="background-image: url(images/contact-bg.jpg);">
            <div class="container">
                <div class="row justify-content-md-center">
                    <div class="col-md-10">
                        <form class="contact-form-area border-radius" id="contact-form">
                            <h3>Direct Message</h3>
                            <div class="form-group">
                                <input type="text" class="form-control" id="name" placeholder="Your Full Name">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" id="email" placeholder="Your Email">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="subject" placeholder="Your Subject">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" id="message" placeholder="Message"></textarea>
                            </div>
                            <button type="submit" class="btn btn-default">Submit</button>
                        </form><!--/.contact-form-area-->
                    </div><!--/.col-md-10-->
                </div><!--/.row-->
            </div><!--/.container-->
        </section><!--/.contact-form-section-->

        <section class="contact-info-section s-pd100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-6">
                        <div class="single-contact-info box bg-gray text-center border-radius">
                            <span class="fa fa-envelope"></span>
                            <h3>Email</h3>
                            <p><a href="mailto:info@swlabs.com">info@swlabs.com</a></p>
                        </div><!--/.single-contact-info-->
                    </div><!--/.col-lg-3-->
                    <div class="col-lg-3 col-md-6 col-6">
                        <div class="single-contact-info box bg-gray text-center border-radius">
                            <span class="fa fa-phone"></span>
                            <h3>phone</h3>
                            <p>+1 444 2700 312</p>
                        </div><!--/.single-contact-info-->
                    </div><!--/.col-lg-3-->
                    <div class="col-lg-3 col-md-6 col-6">
                        <div class="single-contact-info box bg-gray text-center border-radius">
                            <span class="fa fa-globe"></span>
                            <h3>website</h3>
                            <p><a href="#">ww.xxxxx.com</a></p>
                        </div><!--/.single-contact-info-->
                    </div><!--/.col-lg-3-->
                    <div class="col-lg-3 col-md-6 col-6">
                        <div class="single-contact-info box bg-gray text-center border-radius">
                            <span class="fa fa-map-marker"></span>
                            <h3>address</h3>
                            <p>Dhaka, Bangladesh</p>
                        </div><!--/.single-contact-info-->
                    </div><!--/.col-lg-3-->
                </div><!--/.row-->
            </div><!--/.container-->
        </section><!--/.contact-info-section-->
    </div><!--/.contact-page-->

<?php
include 'footer.php';
 ?>
