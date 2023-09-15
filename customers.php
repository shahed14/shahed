<!DOCTYPE html>
<html>
<head>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>customers page</title>
	<link rel="apple-touch-icon" href="/docs/5.3/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.3/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.3/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
<link rel="icon" href="/docs/5.3/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#712cf9">
<link rel="stylesheet" type="text/css" href="home.css">
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


	.bd-placeholder-img{
		font-size: 1.125em;
		text-anchor: middle;
		-webkit-user-select: none;
		-moz-user-select: none;
		user-select: none;
	}	
	@media(min-width: 768px){
		.bd-placeholder-img-lg{
			font-size: 4.5rem;
		}
	}
	.title-container {
            background-color: black;
            text-align: center;
            padding: 10px;
            color: orange;
        }
	
	.card:hover {
  box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15) !important;
  transform: translateY(-5px);
  transition: transform 0.3s ease-in-out;
}
.transparent-container {
  position: relative;
  text-align: center;
}

.transparent-image {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  opacity: 0.5; /* Adjust the opacity value as needed */
}

.content {
  position: relative;
  z-index: 1;
  padding: 20px;
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
          <li><a class="nav-link scrollto active" href="customers.php"style="color: orange; font-weight: bold;">CUSTOMERS</a></li>
          <li><a class="nav-link scrollto" href="refferal/index.php"style="color: orange; font-weight: bold;">Affiliate</a></li>
          
          <li class="dropdown"><a href=""style="color: orange; font-weight: bold;">PRODUCT TOUR</a>
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

<br>
<br>
<br>
  <div class="jumbotron p-3 p-md-5 text-black rounded bg-lightorange" style="width: 90%; margin: 0 auto;">
    <div class="col-md-12 text-center">
        <h1 class="display-4 font-italic">Listen to inspiring stories from companies like yours</h1>
        <p class="lead my-3">See how companies around the world are conquering common problems and elevating their affiliate marketing strategy.</p>
    </div>
</div>
<br>
<br>
<br>
<section class="p-4 p-md-5 text-center text-lg-start shadow-1-strong rounded" style="
    background-color:darkslategray;
  ">
  <div class="row d-flex justify-content-center">
    <div class="col-md-10">
      <div class="card">
        <div class="card-body m-3">
          <div class="row">
            <div class="col-lg-4 d-flex justify-content-center align-items-center mb-4 mb-lg-0">
              <img src="assets/img/team/team-1.jpg"
                class="rounded-circle img-fluid shadow-1" alt="woman avatar" width="200" height="200" />
            </div>
            <div class="col-lg-8">
              <p class="text-muted fw-light mb-4">
                Meet our talented Product Manager, Emily Johnson. With her passion for innovation and deep understanding of customer needs, Emily plays a vital role in driving the success of our products.
              </p>
              <p class="fw-bold lead mb-2"><strong>Ahmad Anwar</strong></p>
              <p class="fw-bold text-muted mb-0">Product manager</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<br>
<br>
<br>
<section>
  <div class="row d-flex justify-content-center">
    <div class="col-md-10 col-xl-8 text-center">
      <h3 class="mb-4">Testimonials</h3>
      <p class="mb-4 pb-2 mb-md-5 pb-md-0">
        Welcome to our testimonial section, where our valued clients share their experiences and success stories with the SOOKY affiliate marketing platform. Discover how affiliate marketers, advertisers, publishers, and e-commerce store owners have achieved remarkable results and growth through our user-friendly platform. Read on to gain insights into the power of SOOKY and how it can elevate your affiliate marketing journey.
      </p>
    </div>
  </div>

  <div class="row text-center d-flex align-items-stretch">
    <div class="col-md-4 mb-5 mb-md-0 d-flex align-items-stretch">
      <div class="card testimonial-card">
        <div class="card-up" style="background-color: #9d789b;"></div>
        <div class="avatar mx-auto bg-white">
          <img src="assets/img/team/team-2.jpg"
            class="rounded-circle img-fluid" />
        </div>
        <div class="card-body">
          <h4 class="mb-4"> Sarah A.</h4>
          <hr />
          <p class="dark-grey-text mt-4">
            <i class="fas fa-quote-left pe-2"></i>"SOOKY has revolutionized my affiliate marketing game. The platform's intuitive interface, vast network of advertisers, and prompt payments have boosted my earnings significantly. Highly recommended!" 
          </p>
        </div>
      </div>
    </div>
    <div class="col-md-4 mb-5 mb-md-0 d-flex align-items-stretch">
      <div class="card testimonial-card">
        <div class="card-up" style="background-color: darkorange;"></div>
        <div class="avatar mx-auto bg-white">
          <img src="assets/img/team/team-3.jpg"
            class="rounded-circle img-fluid" />
        </div>
        <div class="card-body">
          <h4 class="mb-4"> Ahmad R.</h4>
          <hr />
          <p class="dark-grey-text mt-4">
            <i class="fas fa-quote-left pe-2"></i>"SOOKY's responsive team, user-friendly interface, and top-notch features have made it a pleasure to work with. My affiliate marketing efforts have never been better!".
          </p>
        </div>
      </div>
    </div>
    <div class="col-md-4 mb-0 d-flex align-items-stretch">
      <div class="card testimonial-card">
        <div class="card-up" style="background-color: #6d5b98;"></div>
        <div class="avatar mx-auto bg-white">
          <img src="assets/img/team/team-4.jpg"
            class="rounded-circle img-fluid" / >
        </div>
        <div class="card-body">
          <h4 class="mb-4"> Amal K.</h4>
          <hr />
          <p class="dark-grey-text mt-4">
            <i class="fas fa-quote-left pe-2"></i>As an advertiser, I've found great success with SOOKY. Their diverse pool of quality affiliates and robust tracking system have helped drive conversions and increase my revenue. Couldn't be happier!".
          </p>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="p-4 p-md-5 text-center text-lg-start shadow-1-strong rounded" style="
    background-color:darkslategray;
  ">
  <div class="row d-flex justify-content-center">
    <div class="col-md-10">
      <div class="card">
        <div class="card-body m-3">
          <div class="row">
            <div class="col-lg-4 d-flex justify-content-center align-items-center mb-4 mb-lg-0">
              <img src="assets/img/testimonials/testimonials-1.jpg"
                class="rounded-circle img-fluid shadow-1" alt="woman avatar" width="200" height="200" />
            </div>
            <div class="col-lg-8">
              <p class="text-muted fw-light mb-4">
               With her passion for innovation and deep understanding of customer needs, Emily plays a vital role in driving the success of our products.
              </p>
              <p class="fw-bold lead mb-2"><strong>Omar khaled</strong></p>
              <p class="fw-bold text-muted mb-0">CEO</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<br>
<br>
<section>
  <div class="row d-flex justify-content-center">
    <div class="col-md-10 col-xl-8 text-center">
      <h3 class="mb-4">Testimonials</h3>
      
    </div>
  </div>

  <div class="row text-center d-flex align-items-stretch">
    <div class="col-md-4 mb-5 mb-md-0 d-flex align-items-stretch">
      <div class="card testimonial-card">
        <div class="card-up" style="background-color: #9d789b;"></div>
        <div class="avatar mx-auto bg-white">
          <img src="assets/img/testimonials/testimonials-1.jpg"
            class="rounded-circle img-fluid" />
        </div>
        <div class="card-body">
          <h4 class="mb-4"> Omar M.</h4>
          <hr />
          <p class="dark-grey-text mt-4">
            <i class="fas fa-quote-left pe-2"></i>"SOOKY is a game-changer for publishers like me. The wide range of high-quality offers, timely payouts, and exceptional support make it my go-to platform. Thumbs up!" .
          </p>
        </div>
      </div>
    </div>
    <div class="col-md-4 mb-5 mb-md-0 d-flex align-items-stretch">
      <div class="card testimonial-card">
        <div class="card-up" style="background-color: darkorange;"></div>
        <div class="avatar mx-auto bg-white">
          <img src="assets/img/testimonials/testimonials-2.jpg"
            class="rounded-circle img-fluid" />
        </div>
        <div class="card-body">
          <h4 class="mb-4"> Lana S.</h4>
          <hr />
          <p class="dark-grey-text mt-4">
            <i class="fas fa-quote-left pe-2"></i>"SOOKY has helped me monetize my website effortlessly. With their wide range of promotional materials and reliable tracking, I've seen a significant increase in my affiliate earnings." .
          </p>
        </div>
      </div>
    </div>
    <div class="col-md-4 mb-0 d-flex align-items-stretch">
      <div class="card testimonial-card">
        <div class="card-up" style="background-color: #6d5b98;"></div>
        <div class="avatar mx-auto bg-white">
          <img src="assets/img/testimonials/testimonials-3.jpg"
            class="rounded-circle img-fluid" / >
        </div>
        <div class="card-body">
          <h4 class="mb-4"> Sama S</h4>
          <hr />
          <p class="dark-grey-text mt-4">
            <i class="fas fa-quote-left pe-2"></i>The SOOKY affiliate marketing platform is a dream come true for e-commerce store owners. It's easy to set up, track performance, and find quality affiliates. My sales have soared!".
          </p>
        </div>
      </div>
    </div>
  </div>
</section>
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
</body>
</html>