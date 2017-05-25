<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Lago Mar Pizza</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="css/nav2.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://file.myfontastic.com/9u5L7rzNKz6N2o2Z2LUyib/icons.css" rel="stylesheet">
    <link rel="stylesheet" href="slick/slick.css">
    <link rel="stylesheet" href="slick/slick-theme.css">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js" charset="utf-8"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js" charset="utf-8"></script>
    <script type="text/javascript" src="slick/slick.min.js"></script>
  </head>
  <body>
    <div class="img-header">
      <div class="header-wrap">
        <div class='welcome-wrap'>
          <h1 class="welcome">Welcome to</h1>
          <img src="images/white-logo.png" alt="Lago Mar Pizza" class="header-logo img-responsive">
          <h1 class="welcome options text-center">Dine In | Take-Out | Delivery</h1>
        </div>
      </div>
      <a href="#main" class="scroll-main"><i id="scroll" class="icon-angle-down welcome text-center" aria-hidden="true"></i></a>
    </div>
    <div class="main" id="main">
      <?php include("includes/nav2.php") ?>
      <div class="main-header-container">
        <div class="logo-wrapper">
          <hr class="line left" />
          <img src="images/lagomarlogo.png" alt="Lago Mar Logo" class="logo" />
          <hr class="line right" />
        </div>
      </div>
      <div id="page-content">
        <div class="col-xs-12 mobile-logo-container">
          <img src="images/lagomarlogo.png" alt="Lago Mar Logo" class="mobile-logo center-block">
        </div>
        <div class="row">
          <div class="col-md-6 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-12 left-container">
            <div class="carousel-container">
              <div class="carousel">
                <img src="images/specials/monday.png" alt="monday specials" class="img-responsive">
                <img src="images/specials/tuesday.png" alt="monday specials" class="img-responsive">
                <img src="images/specials/wednesday.png" alt="monday specials" class="img-responsive">
                <img src="images/specials/thursday.png" alt="monday specials" class="img-responsive">
              </div>
            </div>
            <div class="social">
              <div class="social-container">
                <h3 class="social-header">VISIT US ON:</h3>
                <div class="social-images-container">
                  <a href="https://www.facebook.com/lagomarpizza/" target="_blank">
                    <img src="images/facebook.png" alt="Facebook Logo" class="img-responsive social-images">
                  </a>
                  <a href="https://www.tripadvisor.com/Restaurant_Review-g58277-d824462-Reviews-Lago_Mar_Pizza-Virginia_Beach_Virginia.html" target="_blank">
                    <img src="images/tripadvisor.png" alt="Trip Advisor Logo" class="img-responsive social-images">
                  </a>
                  <a href="https://www.yelp.com/biz/lago-mar-pizza-virginia-beach-2" target="_blank">
                    <img src="images/yelp.png" alt="Yelp Logo" class="img-responsive social-images">
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-md-offset-0 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
            <div class="contact-container text-center">
              <div class="contact-wrap">
                <a href="tel:7577212500">
                  <img src="images/contact/phone.png" alt="Phone Icon" class="contact-icons center-block">
                  <h3 class="contact-info">(757) 721 2500</h3>
                </a>
                <a href="https://www.google.com/maps/place/Lago+Mar+Pizza/@36.7460454,-75.9955836,16.79z/data=!4m5!3m4!1s0x89bac161b9bb61a9:0x3238f445b7952e77!8m2!3d36.7459399!4d-75.994443" target="_blank">
                  <img src="images/contact/location.png" alt="Location Icon" class="contact-icons center-block">
                  <h3 class="contact-info">1756 Sandbridge Rd<br>Virginia Beach, VA, 23456</h3>
                </a>
                <img src="images/contact/hours.png" alt="Hours Icon" class="contact-icons hours center-block">
                <h3 class="contact-info">SUN-THURS: 11 am - 10 pm<br>FRI &amp; SAT: 11 am - 11 pm</h3>
                <h3 class="contact-info">(Closing hours may<br>vary during winter)</h3>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xs-10 col-xs-offset-1 mobile-social">
          <div class="social-container">
            <h3 class="social-header">VISIT US ON:</h3>
            <div class="social-images-container">
              <a href="https://www.facebook.com/lagomarpizza/" target="_blank">
                <img src="images/facebook.png" alt="Facebook Logo" class="social-images">
              </a>
              <a href="https://www.tripadvisor.com/Restaurant_Review-g58277-d824462-Reviews-Lago_Mar_Pizza-Virginia_Beach_Virginia.html" target="_blank">
                <img src="images/tripadvisor.png" alt="Trip Advisor Logo" class="social-images">
              </a>
              <a href="https://www.yelp.com/biz/lago-mar-pizza-virginia-beach-2" target="_blank">
                <img src="images/yelp.png" alt="Yelp Logo" class="social-images">
              </a>
            </div>
          </div>
        </div>
        <div class="row">
          <?php include 'includes/footer.php'; ?>
        </div>
      </div>
    </div>
    <script src="js/index.js" charset="utf-8"></script>
    <script src="js/nav.js" charset="utf-8"></script>
    <script src="js/carousel.js" charset="utf-8"></script>
  </body>
</html>
