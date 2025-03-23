<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
<?php include("php_include/head.php")?>
<title>Login</title>
</head>
<body>

    <!--preloader start-->
	<?php include("php_include/preloader.php")?>
    <!--preloader end-->
    <div class="main-wrapper">

        <!--header section start-->
        <?php include("php_include/header.php")?>
          <!--register section start-->
        <section class="sign-up-in-section bg-dark ptb-60" style="background: url('assets/img/page-header-bg.svg')no-repeat right bottom">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-5 col-md-8 col-12">
                        <div class="register-wrap p-5 bg-light-subtle shadow rounded-custom">
                            <h1 class="h3">Login Here</h1>
                            <form method="POST"class="mt-4 register-form">
                                <div class="row">
								<div class="col-sm-12">
								<center><img src="images/login.gif" style="width:100px; height:100px;"></center>
								</div>
                                    <div class="col-sm-12">
                                        <div class="input-group mb-3">
                                            <input type="email" class="form-control" placeholder="Email" id="email" name="email"   required aria-label="email">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="input-group mb-3">
                                            <input type="password" class="form-control" name="password" placeholder="Password" id="password" required aria-label="Password">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" name="submit" class="btn btn-primary mt-3 d-block w-100">Submit</button>
                                    </div>
                                
                                <p class="font-monospace fw-medium text-center text-muted mt-3 pt-4 mb-0">Don’t have an
                                    account? <a href="register.php" class="text-decoration-none">Sign up </a>
                                    <br>
                                    <a href="forgot_password.php" class="text-decoration-none">Forgot password</a>
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