<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
<?php include("php_include/head.php")?>
    <title>Contact Us</title>
</head>
<body>

    <!--preloader start-->
	<?php include("php_include/preloader.php")?>
    <!--preloader end-->
    <div class="main-wrapper">

        <!--header section start-->
        <?php include("php_include/header.php")?>
         <!--page header section start-->
		 <section class="page-header position-relative overflow-hidden ptb-120 bg-dark" style="background: url('images/contact.jpg') no-repeat center center; background-size: cover;">
            <div class="container">
               <div class="row">
                  <div class="col-lg-6 col-md-12">
                     <h1 class="display-5 fw-bold">Contact Us</h1>
                  </div>
               </div>
               <div class="bg-circle rounded-circle circle-shape-3 position-absolute bg-dark-light right-5"></div>
            </div>
         </section>
       
        <!--page header section end-->

        <!--contact us promo section start-->
        <section class="contact-promo ptb-120">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
                        <div class="contact-us-promo p-5 bg-white rounded-custom custom-shadow text-center d-flex flex-column h-100">
                            <span class="fas fa-comment fa-3x text-primary"></span>
                            <div class="contact-promo-info mb-4">
                                <h5>Chat with us</h5>
                                <p>We've got live Social Experts waiting to help you <strong>monday to saturday</strong> from
                                    <strong>9am to 5pm EST.</strong>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
                        <div class="contact-us-promo p-5 bg-white rounded-custom custom-shadow text-center d-flex flex-column h-100">
                            <span class="fas fa-envelope fa-3x text-primary"></span>
                            <div class="contact-promo-info mb-4">
                                <h5>Email Us</h5>
                                <p>Simple drop us an email at <strong>info@vivatech.me</strong>
                                    and you'll receive a reply within 24 hours</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
                        <div class="contact-us-promo p-5 bg-white rounded-custom custom-shadow text-center d-flex flex-column h-100">
                            <span class="fas fa-phone fa-3x text-primary"></span>
                            <div class="contact-promo-info mb-4">
                                <h5>Give us a call</h5>
								<p>+91 9513228259</p>
                                <p>Give us a ring.Our Experts are standing by <strong>monday to saturday</strong> from
                                    <strong>9am to 5pm EST.</strong>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--contact us promo section end-->

        <!--contact us form start-->
        <section class="contact-us-form pt-60 pb-120" style="background: url('assets/img/shape/contact-us-bg.svg')no-repeat center bottom">
            <div class="container">
                <div class="row justify-content-lg-between align-items-center">
                    <div class="col-lg-6 col-md-8">
                        <div class="section-heading">
                            <h2>Connect with Us and Watch Your Creative Dreams Take Flight!</h2>
                           
                        </div>
                        <form  class="register-form">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" name="name"id="firstName" required placeholder="Enter Your Name" aria-label="First name">
                                    </div>
                                </div>
                                <div class="col-sm-6 ">
                                    <div class="input-group mb-3">
                                        <input type="email" class="form-control" name="email"id="lastName" placeholder="Enter Your Email" aria-label="Last name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" name="mobile" id="phone" required placeholder="Enter Your Mobile" aria-label="Phone">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control"name="subject" id="email" required placeholder="Enter Your Subject" aria-label="Email">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-group mb-3">
                                        <textarea class="form-control"name="message" id="yourMessage" required placeholder="Enter Your Message" style="height: 120px"></textarea>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" name="submit"class="btn btn-primary mt-4">Submit</button>
                        </form>
                    </div>
                    <div class="col-lg-5 col-md-10">
                        <div class="contact-us-img">
                            <img src="assets/img/contact-us-img-2.svg" alt="contact us" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--contact us form end-->

        <!-- Footer -->
		<?php include("php_include/footer.php")?>
        <!-- Footer -->

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