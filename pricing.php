<?php
//include_once('session_check.php');
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title> pricing page</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

 

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <link href="style2.css" rel="stylesheet">

  <style type="text/css">


    #header {
  height: 70px;
  transition: all 0.5s;
  z-index: 997;
  background: white;
}

#header .logo h1 {
  font-size: 20px;
  margin: 1.5;
  padding: 8px 0;
  line-height: 1;
  font-weight: 700;
  letter-spacing: 2px;
  text-transform: uppercase;
}

#header .logo h1 a, #header .logo h1 a:hover {
  color: orange;
  text-decoration: none;
}

#header .logo img {
  padding: 0;
  margin: 0;
  max-height: px;
}

@media (max-width: 992px) {
  #header {
    height: 60px;
  }
}

/*--------------------------------------------------------------
# Navigation Menu
--------------------------------------------------------------*/
/**
* Desktop Navigation 
*/
.navbar {
  padding: 0;
}

.navbar ul {
  margin: 0;
  padding: 0;
  display: flex;
  list-style: none;
  align-items: center;
}

.navbar li {
  position: relative;
}

.navbar > ul > li + li {
  margin-left: 30px;
}

.navbar a, .navbar a:focus {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 12px 0;
  font-size: 14px;
  color: rgba(255, 255, 255, 0.8);
  white-space: nowrap;
  transition: 0.3s;
  position: relative;
}

.navbar a i, .navbar a:focus i {
  font-size: 12px;
  line-height: 0;
  margin-left: 5px;
}

.navbar > ul > li > a:before {
  content: "";
  position: absolute;
  width: 100%;
  height: 2px;
  bottom: 3px;
  left: 0;
  background-color: #1bac91;
  visibility: hidden;
  width: 0px;
  transition: all 0.3s ease-in-out 0s;
}

.navbar a:hover:before, .navbar li:hover > a:before, .navbar .active:before {
  visibility: visible;
  width: 100%;
}

.navbar a:hover, .navbar .active, .navbar .active:focus, .navbar li:hover > a {
  color: #fff;
}

.navbar .dropdown ul {
  display: block;
  position: absolute;
  left: 0;
  top: 100%;
  margin: 0;
  padding: 10px 0;
  z-index: 99;
  opacity: 0;
  visibility: hidden;
  background: #fff;
  box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25);
  transition: 0.3s;
}

.navbar .dropdown ul li {
  min-width: 200px;
}

.navbar .dropdown ul a {
  padding: 10px 20px;
  font-size: 14px;
  text-transform: none;
  font-weight: 500;
  color: #062822;
}

.navbar .dropdown ul a i {
  font-size: 12px;
}

.navbar .dropdown ul a:hover, .navbar .dropdown ul .active:hover, .navbar .dropdown ul li:hover > a {
  color: #1bac91;
}

.navbar .dropdown:hover > ul {
  opacity: 1;
  visibility: visible;
}

.navbar .dropdown .dropdown ul {
  top: 0;
  left: calc(100% - 30px);
  visibility: hidden;
}

.navbar .dropdown .dropdown:hover > ul {
  opacity: 1;
  top: 0;
  left: 100%;
  visibility: visible;
}

@media (max-width: 1366px) {
  .navbar .dropdown .dropdown ul {
    left: -90%;
  }
  .navbar .dropdown .dropdown:hover > ul {
    left: -100%;
  }
}

/**
* Mobile Navigation 
*/
.mobile-nav-toggle {
  color: #fff;
  font-size: 28px;
  cursor: pointer;
  display: none;
  line-height: 0;
  transition: 0.5s;
}

@media (max-width: 991px) {
  .mobile-nav-toggle {
    display: block;
  }
  .navbar ul {
    display: none;
  }
}

.navbar-mobile {
  position: fixed;
  overflow: hidden;
  top: 0;
  right: 0;
  left: 0;
  bottom: 0;
  background: rgba(16, 31, 29, 0.9);
  transition: 0.3s;
  z-index: 0;
}

.navbar-mobile .mobile-nav-toggle {
  position: absolute;
  top: 15px;
  right: 15px;
}

.navbar-mobile ul {
  display: block;
  position: absolute;
  top: 55px;
  right: 15px;
  bottom: 15px;
  left: 15px;
  padding: 10px 0;
  background-color: #fff;
  overflow-y: auto;
  transition: 0.3s;
}

.navbar-mobile > ul > li + li {
  margin: 0;
}

.navbar-mobile a:hover:before, .navbar-mobile li:hover > a:before, .navbar-mobile .active:before {
  visibility: hidden;
}

.navbar-mobile a {
  padding: 10px 20px;
  font-size: 15px;
  color: #21413c;
}

.navbar-mobile a:hover, .navbar-mobile .active, .navbar-mobile li:hover > a {
  color: #1bac91;
}

.navbar-mobile .getstarted {
  margin: 15px;
}

.navbar-mobile .dropdown ul {
  position: static;
  display: none;
  margin: 10px 20px;
  padding: 10px 0;
  z-index: 99;
  opacity: 1;
  visibility: visible;
  background: #fff;
  box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25);
}

.navbar-mobile .dropdown ul li {
  min-width: 200px;
}

.navbar-mobile .dropdown ul a {
  padding: 10px 20px;
}

.navbar-mobile .dropdown ul a i {
  font-size: 12px;
}

.navbar-mobile .dropdown ul a:hover, .navbar-mobile .dropdown ul .active:hover, .navbar-mobile .dropdown ul li:hover > a {
  color: #1bac91;
}

.navbar-mobile .dropdown > .dropdown-active {
  display: block;
}

   body{margin-top:20px;}
.pricing-box {
  -webkit-box-shadow: 0px 5px 30px -10px rgba(0, 0, 0, 0.1);
          box-shadow: 0px 5px 30px -10px rgba(0, 0, 0, 0.1);
  padding: 35px 50px;
  border-radius: 20px;
  position: relative;
}

.pricing-box .plan {
  font-size: 34px;
}

.pricing-badge {
  position: absolute;
  top: 0;
  z-index: 999;
  right: 0;
  width: 100%;
  display: block;
  font-size: 15px;
  padding: 0;
  overflow: hidden;
  height: 100px;
}

.pricing-badge .badge {
  float: right;
  -webkit-transform: rotate(45deg);
          transform: rotate(45deg);
  right: -67px;
  top: 17px;
  position: relative;
  text-align: center;
  width: 200px;
  font-size: 13px;
  margin: 0;
  padding: 7px 10px;
  font-weight: 500;
  color: #ffffff;
  background: #fb7179;
}
.mb-2, .my-2 {
    margin-bottom: .5rem!important;
}
p {
    line-height: 1.7;
}

  </style>
</head>

<body>
<!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <!--<h1 class="logo me-auto"><a href="index.html">SOOKY</a></h1>-->
       <a href="index.html" class="logo me-auto"><img src="image/logo2.png" width="100" height="70" style="margin-left: -7em;" alt="" ></a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto " href="home2.php" style="color: orange; font-weight: bold;">HOME</a></li>
          <li><a class="nav-link scrollto" href="customers.php"style="color: orange; font-weight: bold;">CUSTOMERS</a></li>
          <li><a class="nav-link scrollto" href="affiliateHome.php"style="color: orange; font-weight: bold;">Affiliate</a></li>
          
          <li class="dropdown"><a href="#"style="color: orange; font-weight: bold;"><span>PRODUCT TOUR</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="features.php"style="color: orange; font-weight: bold;">features</a></li>
                         <li><a href="enterprisem.php" style="color: orange; font-weight: bold;">package enterprise</a></li>

               
              <li><a class="active" href="pricing.php"style="color: orange; font-weight: bold;">pricing</a></li>
             
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="marketplaceHome.php"style="color: orange; font-weight: bold;">MARKETPLACE</a></li>
          <li><a class="getstarted scrollto" href="register.php"style="color: orange; font-weight: bold;">Get Started</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
<br>
<br>
  <section class="section" id="pricing">
    <div class="container">

        <div class="row" style="background-color: lightblue;" >
            <div class="col-lg-12">
                <div class="title-box text-center">
                    <h3 class="title-heading mt-4">Build.Manage.Succeed with affiliate marketing </h3>
                    <p class="text-muted f-17 mt-3">try SOOKY for free , pick a plan later</p>

                    <img src="images/home-border.png" height="15" class="mt-3" alt="">
                </div>
            </div>
        </div>


        <div class="row mt-5 pt-4">
            <div class="col-lg-4">
                <div class="pricing-box mt-4">
                    <i class="mdi mdi-account h1"></i>
                    <h3 class="f-20">FREE</h3>

                    <div class="mt-4 pt-2">
                        <h3 class="mb-2 f-18">Features</h3>
                        <br>
<ul>
                      <li> Customizable affiliate registration form </li>

                     <li> Tracking by affiliate links</li>

                       <li>Tracking by coupons</li>

                        <li>Automated email templates</li>

                          <li>Marketplace listing</li>
</ul>

                    </div>

                    <p class="mt-4 pt-2 text-muted">All the basics for starting an affiliate campaign.
                    </p>
                    <div class="pricing-plan mt-4 pt-2">
                        <h4 class="text-muted"> <span class="plan pl-3 text-dark">$0 </span></h4>
                        <p class="text-muted mb-0">Per Month</p>
                    </div>


                    <div class="mt-4 pt-3">
                        <a href="" class="btn btn-primary btn-rounded">Purchase Now</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="pricing-box mt-4">
                    <div class="pricing-badge">
                        <span class="badge">popular</span>
                    </div>

                    <i class="mdi mdi-account-multiple h1 text-primary"></i>
                    <h3 class="f-20 text-primary">Growth</h3>


                    <div class="mt-4 pt-2">
                        <h3 class="mb-2 f-18">Features</h3>
<br>
                       <ul>
                      <li> Everything in Free </li>

                     <li> Convert customers to affiliates</li>

                       <li>Find affiliate on Marketplace</li>

                        <li>Store credit payment</li>
                                            <li> Chat with affiliates</li>

                          
</ul>
                    </div>

                    <p class="mt-4 pt-2 text-muted">More options to build and grow your affiliate team
                    </p>

                    <div class="pricing-plan mt-4 pt-2">
                        <h4 class="text-muted"> <span class="plan pl-3 text-dark">$18.99 </span></h4>
                        <p class="text-muted mb-0">Per Month</p>
                    </div>

                    <div class="mt-4 pt-3">
                        <a href="" class="btn btn-primary btn-rounded">Purchase Now</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="pricing-box mt-4">
                    <i class="mdi mdi-account-multiple-plus h1"></i>
                    <h3 class="f-20">Professional</h3>


                    <div class="mt-4 pt-2">
                                              <h3 class="mb-2 f-18">Features</h3>
                                              <br>

                      <ul>
                      <li> Everything in Growth</li>

                     <li>     Customize affiliate link</li>

                        <li> Product analytics</li>

                       <li> Auto-generate coupon</li>

                        <li> Auto-tier commission</li>

                      <li> Multi-level marketing</li>

                    </div>

                    <p class="mt-4 pt-2 text-muted">Dedicated solution to manage your affiliate team like a pro.
                    </p>

                    <div class="pricing-plan mt-4 pt-2">
                        <h4 class="text-muted"> <span class="plan pl-3 text-dark">$89.99 </span></h4>
                        <p class="text-muted mb-0">Per Month</p>
                    </div>

                    <div class="mt-4 pt-3">
                        <a href="" class="btn btn-primary btn-rounded">Purchase Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>SOOKY</h3>
              <p>
               Al-Remal street <br>
                gaza-Palestine<br><br>
                <strong>Phone:</strong> +970 0569243200<br>
                <strong>Email:</strong> info@example.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="home2.php">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="customers.php">customer</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="features.php">features</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="enterprisem.php">enterprise packages</a></li>
            </ul>
          </div>

          

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>SOOKY</span></strong>. All Rights Reserved
      </div>
      
    </div>
  </footer><!-- End Footer-->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
   <script>
      Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
      });
    </script>

</body>

</html>