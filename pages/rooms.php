<?php  ?>

  <section class="section pb-4"  >
    <div class="container">

      <div class="row check-availabilty" id="next">
        <div class="block-32" data-aos="fade-up" data-aos-offset="-200">

          <form action="index.php?page=booking">
            <input type="hidden" name="page" value="booking"/>
            <div class="row">
              <div class="col-md-6 mb-3 mb-lg-0 col-lg-3">
                <label for="checkin_date" class="font-weight-bold text-black"><?php echo $this->texts["check_in_date"]; ?></label>
                <div class="field-icon-wrap">
                  <div class="icon"><span class="icon-calendar"></span></div>
                  <input type="text" id="checkin_date" class="form-control">
                </div>
              </div>
              <div class="col-md-6 mb-3 mb-lg-0 col-lg-3">
                <label for="checkout_date" class="font-weight-bold text-black"><?php echo $this->texts["check_out_date"]; ?></label>
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
                        <option value="">4</option>
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

  <section class="section">
    <div class="container">

      <div class="row">

        <div class="col-md-6 col-lg-4" data-aos="fade-up">
          <a class="room">
            <figure class="img-wrap">
              <img src="images/2_doubles_2_views.jpg" alt="Double Room for family of four" class="img-fluid mb-3">
            </figure>
            <div class="p-3 text-center room-info">
              <h2><?php echo $this->texts["two_twins_bed"]; ?></h2>
              <span class="text-uppercase letter-spacing-1"><?php echo $this->texts["two_twins_bed_price"]; ?></span>
            </div>
          </a>
        </div>
        <div class="col-md-6 col-lg-4" data-aos="fade-up">
          <a class="room">
            <figure class="img-wrap">
              <img src="images/1_king.jpg" alt="King bed room for two" class="img-fluid mb-3">
            </figure>
            <div class="p-3 text-center room-info">
              <h2><?php echo $this->texts["one_king"]; ?></h2>
              <span class="text-uppercase letter-spacing-1"><?php echo $this->texts["one_king_price"]; ?></span>
            </div>
          </a>
        </div>
        <div class="col-md-6 col-lg-4" data-aos="fade-up">
          <a class="room">
            <figure class="img-wrap">
              <img src="images/3_singles.jpg" alt="Dorm room with three single beds" class="img-fluid mb-3">
            </figure>
            <div class="p-3 text-center room-info">
              <h2><?php echo $this->texts["three_single_beds"]; ?></h2>
              <span class="text-uppercase letter-spacing-1"><?php echo $this->texts["three_single_beds_price"]; ?></span>
            </div>
          </a>
        </div>

      </div>
    </div>
  </section>

  <section class="section bg-light">

    <div class="container">
      <div class="row justify-content-center text-center mb-5">
        <div class="col-md-7">
          <h2 class="heading" data-aos="fade"><?php echo $this->texts["more_than_vacation"]; ?></h2>
          <p data-aos="fade"><?php echo $this->texts["rooms_prgrph"]; ?></p>
        </div>
      </div>
      <div class="site-block-half d-block d-lg-flex bg-white" data-aos="fade" data-aos-delay="100">
        <a href="index.php?page=booking" class="image d-block bg-image-2" style="background-image: url('images/2_doubles_2_views.jpg');"></a>
        <div class="text">
          <span class="d-block mb-4"><span class="display-4 text-primary"><?php echo $this->texts["t_t_b_price"]; ?></span> <span class="text-uppercase letter-spacing-2"><?php echo $this->texts["per_night"]; ?></span> </span>
          <h2 class="mb-4"><?php echo $this->texts["two_twins_bed"]; ?></h2>
          <p><?php echo $this->texts["two_twins_bed_description"]; ?></p>
          <p><a href="index.php?page=booking" class="btn btn-primary text-white"><?php echo $this->texts["book_now"]; ?></a></p>
        </div>
      </div>
      <div class="site-block-half d-block d-lg-flex bg-white" data-aos="fade" data-aos-delay="100">
        <a href="index.php?page=booking" class="image d-block bg-image-2 order-2" style="background-image: url('images/1_king.jpg');"></a>
        <div class="text order-1">
          <span class="d-block mb-4"><span class="display-4 text-primary"><?php echo $this->texts["o_k_price"]; ?></span> <span class="text-uppercase letter-spacing-2"><?php echo $this->texts["per_night"]; ?></span> </span>
          <h2 class="mb-4"><?php echo $this->texts["one_king"]; ?></h2>
          <p><?php echo $this->texts["one_king_description"]; ?></p>
          <p><a href="index.php?page=booking" class="btn btn-primary text-white"><?php echo $this->texts["book_now"]; ?></a></p>
        </div>
      </div>
      <div class="site-block-half d-block d-lg-flex bg-white" data-aos="fade" data-aos-delay="100">
        <a href="index.php?page=booking" class="image d-block bg-image-2" style="background-image: url('images/3_singles.jpg');"></a>
        <div class="text">
          <span class="d-block mb-4"><span class="display-4 text-primary"><?php echo $this->texts["t_s_b_price"]; ?></span> <span class="text-uppercase letter-spacing-2"><?php echo $this->texts["per_night"]; ?></span> </span>
          <h2 class="mb-4"><?php echo $this->texts["three_single_beds"]; ?></h2>
          <p><?php echo $this->texts["three_single_beds_description"]; ?></p>
          <p><a href="index.php?page=booking" class="btn btn-primary text-white"><?php echo $this->texts["book_now"]; ?></a></p>
        </div>
      </div>

    </div>
  </section>
