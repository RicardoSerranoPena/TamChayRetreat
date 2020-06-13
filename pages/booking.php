<?php  ?>

  <section class="section contact-section" id="next">
    <div class="container">
      <iframe frameborder="0" src="https://tamchayretreat.com/PHPBooking/iframe.php" width="100%" height="800"></iframe>
    </div>

    <div class="col-md-5" data-aos="fade-up" data-aos-delay="200">
      <div class="row">
        <div class="col-md-10 ml-auto contact-info">
          <p><span class="d-block"><?php echo $this->texts["address"]; ?></span>  <a target="_blank" href="<?php echo $this->texts["address_gmaps_link"]; ?>"><span><?php echo $this->texts["actual_address"]; ?></span></a></p>
          <p><span class="d-block"><?php echo $this->texts["phone"]; ?></span> <span><?php echo $this->texts["actual_phone"]; ?></span></p>
          <p><span class="d-block"><?php echo $this->texts["email"]; ?></span> <span><?php echo $this->texts["actual_email"]; ?></span></p>
          <p><span class="d-block"><?php echo $this->texts["facebook"]; ?></span> <a href="<?php echo $this->texts["facebook_link"]; ?>">facebook.com/tamchayhomestay</a></p>
        </div>
      </div>
    </div>
  </section>
