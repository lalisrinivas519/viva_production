<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
<?php include("php_include/head.php")?>
<title>Register</title>
</head>
<body>

    <!--preloader start-->
	<?php include("php_include/preloader.php")?>
    <!--preloader end-->
    <div class="main-wrapper">

        <!--header section start-->
        <?php include("php_include/header.php")?>
        <!--register section start-->
        <section class="sign-up-in-section bg-dark ptb-120" style="background: url('assets/img/page-header-bg.svg')no-repeat bottom right">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-xl-5 col-lg-5 col-md-12 order-1 order-lg-0">
                        <div class="testimonial-tab-slider-wrap mt-5">
                            <hr>
                            <div class="tab-content testimonial-tab-content text-white-80" id="pills-tabContent">
                                <img src="images/register.png">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-7 col-md-12 order-0 order-lg-1">
                        <div class="register-wrap p-5 bg-white shadow rounded-custom mt-5 mt-lg-0 mt-xl-0">
                            <h3 class="fw-medium h4">Register Here....</h3>

                            <form method="POST" class="mt-4 register-form">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" name="referralid" placeholder="Referral ID" aria-label="name">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" name="userid" placeholder="UserID" aria-label="email">
                                        </div>
                                    </div>
									<div class="col-sm-12">
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" name="mobile" placeholder="Mobile" aria-label="email">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="input-group mb-3">
                                            <input type="email" class="form-control" placeholder="Email" aria-label="company-website">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="input-group mb-3">
                                            <input type="password" class="form-control" placeholder="Password" aria-label="work-Email">
                                        </div>
                                    </div>
									<div class="col-sm-12">
                                        <div class="input-group mb-3">
                                            <input type="confirm_password" class="form-control" placeholder="Confirm Password" aria-label="work-Email">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" name="submit" class="btn btn-primary mt-4 d-block w-100">Submit
                                        </button>
                                    </div>
                                    <p class="text-center text-muted mt-4 mb-0 fw-medium font-monospace">Already have an account? 
									<a href="login.php" class="text-decoration-none">Sign in</a>
									</p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--register section end-->


    </div>

    <!--build:js-->
    <script src="assets/js/vendors/jquery-3.6.0.min.js"></script>
    <script src="assets/js/vendors/bootstrap.bundle.min.js"></script>
    <script src="assets/js/vendors/swiper-bundle.min.js"></script>
    <script src="assets/js/vendors/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/vendors/parallax.min.js"></script>
    <script src="assets/js/vendors/aos.js"></script>
    <script src="assets/js/vendors/massonry.min.js"></script>
    <script src="assets/js/app.js"></script>
    <!--endbuild-->
</body>


</html>