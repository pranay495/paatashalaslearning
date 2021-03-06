<?php
include 'connection.php';
include 'header.php';
 ?>

    <!--=======Page Heading
    =================================-->
    <section class="page-heading-section before-bg bg-image" style="background-image: url(images/header/p-header3.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="page-heading">
                        <h2 class="page-name text-capitalize">Register</h2>
                    </div><!--/.page-heading-->
                </div><!--/.col-md-12-->
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/.page-heading-area-->


    <div class="register-page page-wrapper s-pd100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="login-form-area register-form-area">
                        <form action="post">
                            <h2>REGISTER</h2>
                            <div id="socila-register" class="social-login-area">
                                <a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
                                <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                                <a class="google" href="#"><i class="fa fa-google-plus"></i></a>
                                <a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                            </div><!--/.social-login-area-->
                            <div class="divider-or text-center">
                                <span>or</span>
                            </div>
                            <p><input class="form-control" type="text" name="name" id="user-first-name" placeholder="First Name"></p>
                            <p><input class="form-control" type="text" name="name" id="user-last-name" placeholder="Last Name"></p>
                            <p><input class="form-control" type="text" name="email" id="user-email" placeholder="Email"></p>
                            <p><input class="form-control" type="password" name="pwd" id="user-pass" placeholder="Password"></p>
                            <p><input class="form-control" type="password" name="pwd" id="user-confirm-pass" placeholder="Confirm Password"></p>
                            <p><button class="btn btn-default btn-primary" type="submit">Sign up new account</button></p>
                            <div class="login-form-register-now"><p> Have an account? <a href="login.html">LOGIN NOW</a></p></div>
                        </form>
                    </div><!--/.register-form-area-->
                </div><!--/.col-lg-4-->
            </div><!--/.row-->
        </div><!--/.container-->
    </div><!--/.login-page-->

<?php
include 'footer.php';
 ?>
