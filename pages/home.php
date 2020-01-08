<?php

 ?>

  <section class="section bg-light pb-0"  >
    <div class="container">

      <div class="row check-availabilty" id="next">
        <div class="block-32" data-aos="fade-up" data-aos-offset="-200">

          <form action="booking.html" method="post">
            <div class="row">
              <div class="col-md-6 mb-3 mb-lg-0 col-lg-3">
                <label for="checkin_date" class="font-weight-bold text-black"><?php echo $this->texts["check_in_date"]?></label>
                <div class="field-icon-wrap">
                  <div class="icon"><span class="icon-calendar"></span></div>
                  <input type="text" id="checkin_date" class="form-control">
                </div>
              </div>
              <div class="col-md-6 mb-3 mb-lg-0 col-lg-3">
                <label for="checkout_date" class="font-weight-bold text-black"><?php echo $this->texts["check_out_date"]?></label>
                <div class="field-icon-wrap">
                  <div class="icon"><span class="icon-calendar"></span></div>
                  <input type="text" id="checkout_date" class="form-control">
                </div>
              </div>
              <div class="col-md-6 mb-3 mb-md-0 col-lg-3">
                <div class="row">
                  <div class="col-md-6 mb-3 mb-md-0">
                    <label for="adults" class="font-weight-bold text-black"><?php echo $this->texts["guests"]; ?></label>
                    <div class="field-icon-wrap">
                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                      <select name="adults" id="adults" class="form-control">
                        <option value="">1</option>
                        <option value="">2</option>
                        <option value="">3</option>
                        <option value="">4+</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-3 align-self-end">
                <button class="btn btn-primary btn-block text-white"><?php echo $this->texts["search"]; ?></button>
              </div>
            </div>
          </form>
        </div>

      </div>
    </div>
  </section>

  <section class="py-5 bg-light">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-12 col-lg-7 ml-auto order-lg-2 position-relative mb-5" data-aos="fade-up">
          <figure class="img-absolute">
            <img src="images/white_backpacker.jpg" alt="Image" class="img-fluid">
          </figure>
          <img src="images/tay_ninh.jpg" alt="Image" class="img-fluid rounded">
        </div>
        <div class="col-md-12 col-lg-4 order-lg-1" data-aos="fade-up">
          <h2 class="heading"><?php echo $this->texts["our_philosophy"]; ?></h2>
          <p class="mb-4"><?php echo $this->texts["our_philosophy_prgrph"]; ?></p>
            <p><a href="index.php?page=about" class="btn btn-primary text-white py-2 mr-3"><?php echo $this->texts["learn_more"]; ?></a></p>
          </div>

        </div>
      </div>
    </section>

    <section class="section">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-7">
            <h2 class="heading" data-aos="fade-up"><?php echo $this->texts["rooms"]; ?></h2>
            <p data-aos="fade-up" data-aos-delay="100"><?php echo $this->texts["rooms_prgrph"]; ?></p>
          </div>
        </div>
        <div class="row">

          <div class="col-md-6 col-lg-4" data-aos="fade-up">
            <a href="#" class="room">
              <figure class="img-wrap">
                <img src="images/img_3.jpg" alt="Free website template" class="img-fluid mb-3">
              </figure>
              <div class="p-3 text-center room-info">
                <h2><?php echo $this->texts["standard_bed"]; ?></h2>
                <span class="text-uppercase letter-spacing-1"><?php echo $this->texts["standard_bed_price"]; ?></span>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-4" data-aos="fade-up">
            <a href="#" class="room">
              <figure class="img-wrap">
                <img src="images/img_2.jpg" alt="Free website template" class="img-fluid mb-3">
              </figure>
              <div class="p-3 text-center room-info">
                <h2><?php echo $this->texts["double_room"]; ?></h2>
                <span class="text-uppercase letter-spacing-1"><?php echo $this->texts["double_room_price"]; ?></span>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-4" data-aos="fade-up">
            <a href="rooms.html" class="room">
              <figure class="img-wrap">
                <img src="images/img_1.jpg" alt="Free website template" class="img-fluid mb-3">
              </figure>
              <div class="p-3 text-center room-info">
                <h2><?php echo $this->texts["single_room"]; ?></h2>
                <span class="text-uppercase letter-spacing-1"><?php echo $this->texts["single_room_price"]; ?></span>
              </div>
            </a>
          </div>

        </div>
      </div>
    </section>
