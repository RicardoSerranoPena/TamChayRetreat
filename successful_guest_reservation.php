<?php
  session_start();
?>

<!DOCTYPE HTML>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>Tâm Chay Retreat</title>

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <meta name="author" content="ricardoserranop" />
  <link rel="stylesheet" type="text/css" href="https://use.typekit.net/kri6xkz.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/aos.css">
  <link rel="stylesheet" href="css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="css/jquery.timepicker.css">
  <link rel="stylesheet" href="css/fancybox.min.css">

  <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">

  <!-- Theme Style -->
  <link rel="stylesheet" href="css/style.css">
</head>

<body>

  <header class="site-header js-site-header">
    <div class="container-fluid">
      <div class="row align-items-center">
        <div class="col-6 col-lg-4 site-logo" data-aos="fade"><a href="index.html">Tâm Chay Retreat</a></div>
        <div class="col-6 col-lg-8">


          <div class="site-menu-toggle js-site-menu-toggle"  data-aos="fade">
            <span></span>
            <span></span>
            <span></span>
          </div>
          <!-- END menu-toggle -->

          <div class="site-navbar js-site-navbar">
            <nav role="navigation">
              <div class="container">
                <div class="row full-height align-items-center">
                  <div class="col-md-3 mx-auto">
                    <ul class="list-unstyled menu">
                      <li class="active"><a href="index.html">Home</a></li>
                      <li><a href="about.html">About</a></li>
                      <li><a href="contact.html">Contact us</a></li>
                    </ul>
                  </div>
                  <div class="col-md-3 mx-auto">
                    <h4>for travellers:</h4>
                    <ul class="list-unstyled menu">
                      <li><a href="rooms.html">Rooms</a></li>
                      <li><a href="guidelines.html">Guidelines</a></li>
                      <li><a href="booking.html">Booking</a></li>
                    </ul>
                  </div>
                  <div class="col-md-3 mx-auto">
                  <h4>for groups:</h4>
                    <ul class="list-unstyled menu">
                      <li><a href="events.html">Events</a></li>
                      <li><a href="guidelines.html">Guidelines</a></li>
                      <li><a href="booking_groups.html">Booking</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- END head -->

  <section class="section slider-section bg-dark" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row justify-content-center align-items-center">
      </div>
    </div>
  </section>

  <section class="section slider-section bg-light">
    <div class="container">
      <div class="row justify-content-center align-items-center">
        <div class="col-md-10 text-center" data-aos="fade">
        <h2 data-aos="fade">You have successfully booked your stay at Tam Chay Retreat</h2>
        <p data-aos="fade">Make sure you save your booking number as you will need it when you're checking-in</p>
      </div>
      <div class="row justify-content-center align-items-left text-center">
        <?php
        $display_in_date = date("m-d-Y", strtotime($_SESSION["checkin_date"]));
        $display_out_date = date("m-d-Y", strtotime($_SESSION["checkout_date"]));
        echo "congratulations " . $_SESSION["first_name"] . " " . $_SESSION["last_name"] . " on your reservation<br>";
        echo "from " . $display_in_date . " to " . $display_out_date . "<br>";
        echo "for " . $_SESSION["female_guests"] . " females and " . $_SESSION["male_guests"] . " males <br>";
        echo "your booking id is: " . $_SESSION["reservation_id"] . "<br>";
        ?>
      </div>
    </div>
    </div>

  </section>



  <section class="section bg-image overlay" style="background-image: url('images/hero_1.jpg');">
    <div class="container" >
      <div class="row align-items-center">
        <div class="col-12 col-md-6 text-center mb-4 mb-md-0 text-md-left" data-aos="fade-up">
          <h2 class="text-white font-weight-bold">The environment for self-discovery and self-awareness development</h2>
        </div>
        <div class="col-12 col-md-6 text-center text-md-right" data-aos="fade-up" data-aos-delay="200">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#reserve-now">
            Reserve Now
          </button>
        </div>
      </div>
    </div>
  </section>

  <div class="modal fade" id="reserve-now" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title" id="exampleModalLongTitle">Reserve Now</h3>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <a href="booking.html" role="button" class="btn btn-primary" >Reserve for travellers</a>
          <a href="booking_groups.html" role="button" class="btn btn-primary">Reserve for groups</a>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>


<footer class="section footer-section">
  <div class="container">
    <div class="row mb-4">
      <div class="col-md-3 mb-5">
        <ul class="list-unstyled link">
          <li><a href="about.html">About Us</a></li>
          <li><a href="#">Terms &amp; Conditions</a></li>
          <li><a href="#">Privacy Policy</a></li>
          <li><a href="rooms.html">Rooms</a></li>
        </ul>
      </div>
      <div class="col-md-3 mb-5">
        <ul class="list-unstyled link">
          <li><a href="rooms.html">The Rooms</a></li>
          <li><a href="about.html">About Us</a></li>
          <li><a href="contact.html">Contact Us</a></li>
        </ul>
      </div>
      <div class="col-md-3 mb-5 pr-md-5 contact-info">
        <p><span class="d-block"><span class="ion-ios-location h5 mr-3 text-primary"></span>Address:</span> <span> 123 Viet St. </span></p>
        <p><span class="d-block"><span class="ion-ios-telephone h5 mr-3 text-primary"></span>Phone:</span> <span> (+84) 555-6688</span></p>
        <p><span class="d-block"><span class="ion-ios-email h5 mr-3 text-primary"></span>Email:</span> <span> tamchayretreat@gmail.com</span></p>
      </div>
    </div>
    <div class="row pt-5">
      <p class="col-md-6 text-left">
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
      </p>

      <p class="col-md-6 text-right social">
        <a href="#"><span class="fa fa-tripadvisor"></span></a>
        <a href="#"><span class="fa fa-facebook"></span></a>
        <a href="#"><span class="fa fa-twitter"></span></a>
      </p>
    </div>
  </div>
</footer>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/jquery.fancybox.min.js"></script>


<script src="js/aos.js"></script>

<script src="js/bootstrap-datepicker.js"></script>
<script src="js/jquery.timepicker.min.js"></script>



<script src="js/main.js"></script>
</body>
</html>
