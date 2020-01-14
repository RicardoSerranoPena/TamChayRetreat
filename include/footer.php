<?php  ?>


<section class="section bg-image overlay" style="background-image: url('images/hero_1.jpg');">
  <div class="container" >
    <div class="row align-items-center">
      <div class="col-12 col-md-6 text-center mb-4 mb-md-0 text-md-left" data-aos="fade-up">
        <h2 class="text-white font-weight-bold"><?php echo $this->texts["footer_prgrph"]; ?></h2>
      </div>
      <div class="col-12 col-md-6 text-center text-md-right" data-aos="fade-up" data-aos-delay="200">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#reserve-now">
          <?php echo $this->texts["book_now"]; ?>
        </button>
      </div>
    </div>
  </div>
</section>

<div class="modal fade" id="reserve-now" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLongTitle"><?php echo $this->texts["book_now"]; ?></h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <a href="index.php?page=booking" role="button" class="btn btn-primary"><?php echo $this->texts["book_for_travellers"]; ?></a>
        <a href="index.php?page=booking_groups" role="button" class="btn btn-primary"><?php echo $this->texts["book_for_groups"]; ?></a>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo $this->texts["close"]; ?></button>
      </div>
    </div>
  </div>
</div>

<footer class="section footer-section">
  <div class="container">
    <div class="row mb-4">
      <div class="col-md-3 mb-5">
        <ul class="list-unstyled link">
          <li><a href="index.php?page=about"><?php echo $this->texts["about"]; ?></a></li>
          <li><a href="#"><?php echo $this->texts["terms_conditions"]; ?></a></li>
          <li><a href="#"><?php echo $this->texts["privacy_policy"]; ?></a></li>
        </ul>
      </div>
      <div class="col-md-3 mb-5">
        <ul class="list-unstyled link">
          <li><a href="index.php?page=rooms"><?php echo $this->texts["rooms"]; ?></a></li>
          <li><a href="index.php?page=guidelines"><?php echo $this->texts["guidelines"]; ?></a></li>
          <li><a href="index.php?page=contact"><?php echo $this->texts["contact"]; ?></a></li>
        </ul>
      </div>
      <div class="col-md-3 mb-5 pr-md-5 contact-info">
        <p><span class="d-block"><span class="ion-ios-location h5 mr-3 text-primary"></span><?php echo $this->texts["address"]; ?></span> <a target="_blank" href="<?php echo $this->texts["address_gmaps_link"]; ?>"><span><?php echo $this->texts["actual_address"]; ?> </span></a></p>
        <p><span class="d-block"><span class="ion-ios-telephone h5 mr-3 text-primary"></span><?php echo $this->texts["phone"]; ?></span> <span><?php echo $this->texts["actual_phone"]; ?></span></p>
        <p><span class="d-block"><span class="ion-ios-email h5 mr-3 text-primary"></span><?php echo $this->texts["email"]; ?></span> <span><?php echo $this->texts["actual_email"]; ?></span></p>
      </div>
    </div>
    <div class="row pt-5">
      <p class="col-md-6 text-left">
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib.</a>
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
      </p>

      <p class="col-md-6 text-right social">
        <a href="<?php echo $this->texts["facebook_link"]; ?>"><span class="fa fa-facebook"></span></a>
      </p>
    </div>
  </div>
</footer>
