<?php
//include_once('session_check.php');
session_start();
// Check if the user is not logged in or doesn't have the required role
if (!isset($_SESSION['userId'])) {
  // Redirect the user to the login page or show an error message
  header("Location: login.php");
  exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SOOKY</title>
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

  
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <!--<h1 class="logo me-auto"><a href="index.html">SOOKY</a></h1>-->
       <a href="index.html" class="logo me-auto"><img src="image/logo2.png" width="100" height="70" style="margin-left: -7em;" alt="" ></a>

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

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="container text-center text-md-left" data-aos="fade-up">
      <h1>Welcome to SOOKY</h1>
      <h2>with affiliate marketing program<br>
        <p>
         tell your brands story
          <br>  
          let real-time tracking and powerful affiliate management
              software grow your brand.</p>
<br>
      <a href="#about" class="btn-get-started scrollto">Get Started</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row">
          <div class="col-xl-6 col-lg-7" data-aos="fade-right">
            <img src="assets/img/about-img.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-xl-6 col-lg-5 pt-5 pt-lg-0">
            <h3 data-aos="fade-up">How to succeed ?</h3>
            
            <div class="icon-box" data-aos="fade-up">
              <i class="bx bx-receipt"></i>
              
              <p>Find influencers that fit your niche and have an engaged audience</p>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-cube-alt"></i>
              
              <p>Give influencers a reason to work with you by providing value, such as free products or exclusive discounts.</p>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-cube-alt"></i>
              <p>Define what you want to achieve and communicate it clearly to the influencers.</p>
            </div>
            <div class="icon-box" data-aos="fade-up">
              <i class="bx bx-receipt"></i>
              
              <p>Measure the success of your campaigns and adjust your strategy as needed.</p>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Steps Section ======= -->
    
    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
      <div class="container">
      <h2 class="text-center">WHY SOOKY ?</h2>
      <br>
      <br>


        <div class="row">
          <div class="col-lg-4 mb-5 mb-lg-0" data-aos="fade-right">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item">
                <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">
                  <h4>Grow with SOOKY Marketplace</h4>
                  <p>List your affiliate offer on the SOOKY marketplace and get discovered by potential affiliates/influencers</p>
                </a>
              </li>
              <li class="nav-item mt-2">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-2">
                  <h4>Easy migration & integration</h4>
                  <p>Free migration from other affiliate platforms. All the key data can be moved with just a few clicks. </p>
                </a>
              </li>
              <li class="nav-item mt-2">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-3">
                  <h4>Powerful management</h4>
                  <p>Convenient communication options help you keep in touch with your team.White-labeled affiliate pages </p>
                </a>
              </li>
              <li class="nav-item mt-2">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-4">
                  <h4>free migration</h4>
                  <p>Free migration from other affiliate platforms. All the key data can be moved with just a few clicks.</p>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-lg-7 ml-auto" data-aos="fade-left">
            <div class="tab-content">
              <div class="tab-pane active show" id="tab-1">
                <figure>
                  <img src="image/steps1.png" alt="" class="img-fluid">
                </figure>
              </div>
              <div class="tab-pane" id="tab-2">
                <figure>
                  <img src="image/steps2.png" alt="" class="img-fluid">
                </figure>
              </div>
              <div class="tab-pane" id="tab-3">
                <figure>
                  <img src="image/steps3.png" alt="" class="img-fluid">
                </figure>
              </div>
              <div class="tab-pane" id="tab-4">
                <figure>
                  <img src="image/steps1.png" alt="" class="img-fluid">
                </figure>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Features Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>
Everything you need for affiliate management
</h2>

        </div>

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
            <div class="icon-box icon-box-pink">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4 class="title"><a href="">Recruit</a></h4>
              <p class="description">


<ul>
  <li>  Inviting potential affiliates</li>
  <li>  Listing your offer on the Marketplace</li>
  <li>  Converting customers to affiliates</li>
  <li>  Growing fast with Multi-level marketing</li>
</ul>
</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box icon-box-cyan">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><a href="">Customize</a></h4>
              <p class="description"><ul>
  <li>  Brand everything with white label email options.</li>
  <li>  Freely customize the affiliate registration page, affiliate account and email templates.</li>
  </ul>
</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box icon-box-green">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4 class="title"><a href="">Manage</a></h4>
              <p class="description"><ul>
  <li>  Create coupons, customized links or media to help affiliates promote your brand.</li>
  <li>  Review every conversion recorded</li>
  </ul></p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box icon-box-blue">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4 class="title"><a href="">Reward</a></h4>
              <p class="description"><ul>
  <li>  Pay your team through PayPal, store credit or manually.</li>
  <li> Easily add bonuses or build an auto-tier commission structure to motivate your team.</li>
  </ul></p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

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

    <!-- ======= Portfolio Section ======= -->
   

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Team</h2>
          <p>Meet the talented individuals behind the scenes who make the magic happen at SOOKY. Our dedicated team is passionate about affiliate marketing and committed to delivering exceptional results. With a diverse range of skills and expertise, we work together seamlessly to provide you with a cutting-edge platform and outstanding support. Get to know the faces behind SOOKY and see how our collaborative efforts drive success for our clients</p>
        </div>

        <div class="row">

          <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up">
            <div class="member">
              <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Walter White</h4>
                  <span>Chief Executive Officer</span>
                </div>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Sarah Jhonson</h4>
                  <span>Product Manager</span>
                </div>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>William Anderson</h4>
                  <span>CTO</span>
                </div>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <img src="assets/img/team/team-4.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Amanda Jepson</h4>
                  <span>Accountant</span>
                </div>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= F.A.Q Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>F.A.Q</h2>
          <p>Leverage affiliate management to reach the next level</p>
        </div>

        <div class="faq-list">
          <ul>
            <li data-aos="fade-up">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1"> How does the SOOKY affiliate marketing platform work? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                <p>
                 SOOKY is a user-friendly platform that connects advertisers with affiliate marketers. Advertisers provide promotional materials and set commission rates for affiliates. Affiliates promote the advertiser's products or services through various channels, earning a commission for each successful referral or sale
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed"> How can I join the SOOKY platform as an affiliate marketer? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                <p>
                  oining SOOKY as an affiliate marketer is easy! Simply visit our website and click on the "Sign Up" button. Fill out the registration form, provide the necessary details, and submit your application. Once approved, you'll gain access to our vast network of advertisers and start earning commissions.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">What types of promotional materials are available on the SOOKY platform? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                <p>
                   SOOKY provides a range of promotional materials, including banners, text links, and product widgets. These materials are designed to be visually appealing and easy to integrate into your website or marketing campaigns. We regularly update our library with fresh and engaging creatives to help you maximize your affiliate marketing efforts.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">How do I track my earnings and performance on the SOOKY platform? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                <p>
                 SOOKY offers a robust tracking system that enables you to monitor your earnings and performance in real-time. Through your personalized dashboard, you can access detailed reports, view clicks and conversions, track commission payouts, and analyze the effectiveness of your promotional campaigns.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">What kind of support does SOOKY provide? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                <p>
                At SOOKY, we are committed to providing excellent support to our users. We offer a dedicated support team that is ready to assist you with any questions, technical issues, or concerns you may have. You can reach out to us through our support portal or contact us directly via email. We strive to ensure your affiliate marketing experience on our platform is smooth and successful.
                </p>
              </div>
            </li>

          </ul>
        </div>

      </div>
    </section><!-- End F.A.Q Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Contact</h2>
          <p>Leverage affiliate management to reach the next level</p>
        </div>

        <div class="row no-gutters justify-content-center" data-aos="fade-up">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Al-Remal street - Gaza - Palestine</p>
              </div>

              <div class="email mt-4">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>info@example.com</p>
              </div>

              <div class="phone mt-4">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+9700569243200</p>
              </div>

            </div>

          </div>

          <div class="col-lg-5 d-flex align-items-stretch">
            <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d27206.08133840062!2d34.47627569025128!3d31.530746429229108!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2s!5e0!3m2!1sar!2s!4v1688889366558!5m2!1sar!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>

        </div>

        <div class="row mt-5 justify-content-center" data-aos="fade-up">
          <div class="col-lg-10">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
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
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>SOOKY</h3>
              <p>
               Al-Remal street <br> Gaza - Palestine<br>
                <strong>Phone:</strong> +9700569243200<br>
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
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">customer</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">features</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">enterprise packages</a></li>
            </ul>
          </div>

          

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Sign here for free</p>
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
  </footer><!-- End Footer -->

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