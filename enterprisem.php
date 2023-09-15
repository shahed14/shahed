<?php
//include_once('session_check.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>enterprise package</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

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
          <li><a class="nav-link scrollto" href="refferal/index.php"style="color: orange; font-weight: bold;">Affiliate</a></li>
          
          <li class="dropdown"><a href="#"style="color: orange; font-weight: bold;"><span>PRODUCT TOUR</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="features.php"style="color: orange; font-weight: bold;">features</a></li>
                         <li><a href="enterprisem.php" style="color: orange; font-weight: bold;">package enterprise</a></li>

               
              <li><a href="pricing.php"style="color: orange; font-weight: bold;">pricing</a></li>
             
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
  <div class="b-example-divider"></div>

  <div class="container col-xxl-8 px-4 py-5">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
      <div class="col-10 col-sm-8 col-lg-6">
        <img src="image/enter.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
      </div>
      <div class="col-lg-6">
        <h1 class="display-5 fw-bold lh-1 mb-3">Affiliate management at its best</h1>
        <p class="lead">Advanced affiliate solution for top brands.
Let us help your business go viral by building the best ambassador team.</p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
          <button type="button" class="btn btn-warning btn-lg px-4 me-md-2">start for free</button>
        </div>
      </div>
    </div>
  </div>
 <section id="features" class="features">
      <div class="container">
      <h2 class="text-center">Benefits</h2>
      <br>
      <br>


        <div class="row">
          <div class="col-lg-4 mb-5 mb-lg-0" data-aos="fade-right">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item">
                <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">
                  <h4>Everything unlimited</h4>
                  <p> Unlock every advanced feature and quantity limit. No need to worry about blocked functions, Grow your business exponentially. </p>
                </a>
              </li>
              <li class="nav-item mt-2">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-2">
                  <h4>Connect multiple-stores</h4>
                  <p> Easily access and manage your stores, sync new affiliates and track affiliates' performances across connected stores  </p>
                </a>
              </li>
              <li class="nav-item mt-2">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-3">
                  <h4>Custom development</h4>
                  <p> Request your own custom features to meet your business requirements  </p>
                </a>
              </li>
              <li class="nav-item mt-2">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-4">
                  <h4>Prioritized support</h4>
                  <p>24/7 live agents ready to assist and support you. Your requests are our absolute priority</p>
                </a>
              </li>
                        <button type="button" class="btn btn-warning btn-lg px-4 me-md-2">start for free</button>

            </ul>
          </div>
          <div class="col-lg-7 ml-auto" data-aos="fade-left">
            <div class="tab-content">
              <div class="tab-pane active show" id="tab-1">
                <figure>
                  <img src="image/b1.png" alt="" class="img-fluid">
                </figure>
              </div>
              <div class="tab-pane" id="tab-2">
                <figure>
                  <img src="image/b2.png" alt="" class="img-fluid">
                </figure>
              </div>
              <div class="tab-pane" id="tab-3">
                <figure>
                  <img src="image/b3.png" alt="" class="img-fluid">
                </figure>
              </div>
              <div class="tab-pane" id="tab-4">
                <figure>
                  <img src="image/b4.png" alt="" class="img-fluid">
                </figure>
              </div>
            </div>
          </div>
        </div>

      </div>
<!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Testimonials</h2>
          <p>Welcome to our testimonial section, where our valued clients share their experiences and success stories with the SOOKY affiliate marketing platform. Discover how affiliate marketers, advertisers, publishers, and e-commerce store owners have achieved remarkable results and growth through our user-friendly platform. Read on to gain insights into the power of SOOKY and how it can elevate your affiliate marketing journey.</p>
        </div>

        <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  thanks to the SOOKY affiliate marketing platform, my online business has witnessed remarkable growth. The user-friendly dashboard allows me to track my earnings, analyze performance metrics, and access a wide range of promotional materials. With SOOKY's extensive network of reputable advertisers, I've been able to find relevant products to promote and earn substantial commissions. I highly recommend SOOKY to anyone looking to excel in affiliate marketing.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3>Ahmed Khalil </h3>
                <h4> Affiliate Marketer</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  "SOOKY's affiliate marketing platform has been a game-changer for my advertising campaigns. The platform's advanced technology and tracking capabilities have made it effortless to manage my affiliate program, track conversions, and measure the effectiveness of my campaigns. The user-friendly interface and detailed analytics have provided valuable insights to optimize my marketing strategies. If you're an advertiser seeking a reliable affiliate marketing solution, look no further than SOOKY.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                <h3>Sara Hassan</h3>
                <h4>Publisher</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                 I've had a fantastic experience as a publisher with the SOOKY affiliate marketing platform. Their platform offers a wide range of high-quality offers from renowned brands. The intuitive interface has made it easy for me to find and promote relevant products to my audience. With their prompt payments and excellent customer support, SOOKY has become my go-to choice. If you're a publisher looking for a reliable affiliate marketing platform, I highly recommend SOOKY."
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                <h3>Aisha Ahmad</h3>
                <h4>Store Owner</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                 "SOOKY's affiliate marketing platform has been instrumental in expanding my e-commerce store's reach. The seamless integration with my website allowed me to set up an affiliate program effortlessly. With SOOKY's tracking and reporting features, I can measure the success of my affiliate partnerships and optimize my marketing efforts. Thanks to SOOKY, my revenue has skyrocketed, and my brand has gained significant visibility in the market."
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                <h3>Mohammed Hassan </h3>
                <h4>Freelancer</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Ever since I joined the SOOKY affiliate marketing platform, my online business has soared to new heights. The platform's intuitive interface and comprehensive tools have made it a breeze to manage my affiliate campaigns. SOOKY's diverse range of high-converting offers and generous commission structure have allowed me to earn substantial income. With their prompt payments and dedicated support, I've found a reliable partner in SOOKY. I highly recommend their platform to any affiliate marketer looking for success.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                <h3>Laila Abbas</h3>
                <h4> E-commerce Store Owner</h4>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->
     <h2 class="text-center">share your needs with us</h2>
<div class="row mt-5 justify-content-center" data-aos="fade-up">
          <div class="col-lg-10">
            <form action="#" method="post" role="form" class="php-email-form" >
                <br>
                <br>
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
             <br>
             <br>
                        <button type="button" class="btn btn-warning btn-lg px-4 me-md-2" style="align-items: center;">send message</button>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

<br>
<br>
<footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>SOOKY</h3>
              <p>
                Al-Remal street <br>
                Gaza-Palestine<br><br>
                <strong>Phone:</strong> +1 5589 55488 55<br>
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
              <li><i class="bx bx-chevron-right"></i> <a href="enterprise.php">enterprise packages</a></li>
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
  </footer><!-- End Footer

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

</body>

</html>