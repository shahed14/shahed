<?php
//include_once('session_check.php');
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="home.css">
      <link href="style2.css" rel="stylesheet">

    <style>
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

        .hero {
            display: flex;
            align-items: center;
            background-color: #f8f9fa;
            padding: 130px 0;
            color: #fff;
            border: solid 1px black;
        }
        
        .hero-text {
            flex: 1;
            text-align: left;
            padding-right: 50px;
        }
        
        .hero-heading {
            font-size: 48px;
            font-weight: bold;
            margin-bottom: 30px;
        }
        
        .hero-subheading {
            font-size: 24px;
            margin-bottom: 50px;
        }
        
        .hero-image {
            flex: 1;
            text-align: right;
        }
        
        .hero-image img {
            max-width: 100%;
            height: auto;
        }
        
        .hero-button {
            font-size: 18px;
            font-weight: bold;
            padding: 15px 40px;
            border-radius: 30px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
        }
        .core-features {
            padding: 60px 0;
            background-color: #f8f9fa;
        }
        
        .core-feature-item {
            display: flex;
            align-items: center;
            margin-bottom: 40px;
        }
        
        .core-feature-image {
            flex: 1;
            text-align: center;
        }
          .core-feature-image img {
            max-width: 100%;
            height: auto;
        }
        
        .core-feature-content {
            flex: 1;
        }
        
        .core-feature-title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 10px;
        }
        
        .core-feature-description {
            color: #6c757d;
        }
         .centered-button {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 200px;
        }
        
        .orange-button {
            font-size: 24px;
            font-weight: bold;
            padding: 20px 40px;
            border-radius: 30px;
            background-color: orange;
            color: #fff;
            text-decoration: none;
        }
    </style>
</head>
<body>
   <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <!--<h1 class="logo me-auto"><a href="index.html">SOOKY</a></h1>-->
       <a href="index.html" class="logo me-auto"><img src="image/logo2.png" width="100" height="70" style="margin-left: -10em;" alt="" ></a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="home2.php" style="color: orange; font-weight: bold;">HOME</a></li>
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

   <div class="b-example-divider"></div>

  <div class="container col-xxl-8 px-4 py-5">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
      <div class="col-10 col-sm-8 col-lg-6">
        <img src="image/why-us.png" class="d-block mx-lg-fluid img-fluid" alt="hero" width="800" height="700" loading="lazy">
      </div>
      <div class="col-lg-6">
        <h1 class="display-5 fw-bold lh-1 mb-3">Discover the power of our products</h1>
        <p class="lead">unlock endless possiblities and grow your bussiness
</p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
          <button type="button" class="btn btn-warning btn-lg px-4 me-md-2">start for free</button>
        </div>
      </div>
    </div>
  </div>

     <section class="core-features">
        <div class="container">
            <h1>CORE FEATURES</h1>
            <div class="row">
                <div class="col-md-12">
                    <div class="core-feature-item">
                        <div class="core-feature-image">
                            <img src="image/feature1.png" alt="Feature Image">
                        </div>
                        <div class="core-feature-content">
                            <h3 class="core-feature-title">Build your team</h3>
                            <p class="core-feature-description" style="color: orange; font-weight :bold;"> Quickly onboard affiliates</p>
<ul>
  <li>  Create affiliate program(s) with any offer rules</li>
   <li> Invite affiliates to join through the affiliate registration form</li>
   <li> List your offer on the UpPromote marketplace</li>
  <li>  Invite customers to become affiliates</li>
    <li>Use multi-level marketing to grow your network</li>
</ul>
                        </div>
                    </div>
                    <div class="core-feature-item">
                        <div class="core-feature-image"style="float: right;">
                            <img src="image/feature2.png" alt="Feature Image" >
                        </div>
                        <div class="core-feature-content" style="float: left;">
                            <h3 class="core-feature-title">Customize your campaign</h3>
                            <p class="core-feature-description" style="color: orange; font-weight :bold;"> Your brand, your campaign </p>
                            <ul>

   <li> Customize affiliate registration form, email templates and affiliate account to match your brand's look.</li>
   <li> Customize the affiliate link and all promotion resources for affiliates.</li>
  <li>  Make custom development requests to make the campaign yours.</li>
</ul>
                        </div>
                    </div>
                    <div class="core-feature-item">
                        <div class="core-feature-image">
                            <img src="image/feature5.png" alt="Feature Image">
                        </div>
                        <div class="core-feature-content">
                            <h2 class="core-feature-title" >For affiliates</h2>
                            <p class="core-feature-description"style="color: orange; font-weight :bold;"> Advanced options for your affiliates </p>
                            <ul>
                                <li>Postback URL</li>
                                <li>Facebook pixel</li>
                                <li>Export invoices for paid referrals</li>
                                <li>Multi-ple languages available on affiliate accounts</li>

                        </div>
                    </div>
                    <div class="core-feature-item">
                        <div class="core-feature-image">
                            <img src="image/feature4.png" alt="Feature Image">
                        </div>
                        <div class="core-feature-content">
                            <h3 class="core-feature-title">Analytics and reports</h3>
                            <p class="core-feature-description"style="color: orange; font-weight :bold;"> View your team's performance </p>
                            <ul>
                                <li>View detailed data of clicks/orders/commission through a visualized report.</li>
                                    <li>Check the best performers</li>
                                        <li>See the most popular products being referred</li>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
  <div class="centered-button">
        <a href="pricing.php" class="orange-button">View pricing planes</a>
    </div>
<br>

<div class="container">
  <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
    <p class="col-md-4 mb-0 text-body-secondary">&copy; 2023 Company, Inc</p>

    <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
      <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
    </a>

    <ul class="nav col-md-4 justify-content-end">
      <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Home</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Features</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Pricing</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">FAQs</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">About</a></li>
    </ul>
  </footer>
</div>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
