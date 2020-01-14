<?php  ?>

  <section class="py-5 bg-light">
    <div class="container">
      <div class="row justify-content-center align-items-center">
        <div class="col-md-7 mb-5 text-center">
          <h2 class="heading"><?php echo $this->texts["what_we_do"]; ?></h2>
        </div>
      </div>
      <div class="row align-items-center">
        <div class="col-md-12 col-lg-7 ml-auto order-lg-2 position-relative mb-5" data-aos="fade-up">
          <figure class="img-absolute">
            <img src="images/white_backpacker.jpg" alt="Image" class="img-fluid">
          </figure>
          <img src="images/tay_ninh.jpg" alt="Image" class="img-fluid rounded">
        </div>
        <div class="col-md-12 col-lg-4 order-lg-1" data-aos="fade-up">
          <h1><?php echo $this->texts["our_philosophy"]; ?></h1>
          <p class="mb-4"><?php echo $this->texts["our_philosophy_prgrph"]; ?></p>
          </div>

        </div>
      </div>
    </section>

    <div class="section">
      <div class="container">

        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-7 mb-5">
            <h2 class="heading" data-aos="fade"><?php echo $this->texts["milestones"]; ?></h2>
          </div>
        </div>

        <div class="row justify-content-center">
          <div class="col-md-8">
            <div class="timeline-item" date-is='<?php echo $this->texts["future"]; ?>' data-aos="fade">
              <h3><?php echo $this->texts["tamchay_future"]; ?></h3>
              <p>
                <?php echo $this->texts["coming_soon"]; ?>
              </p>
            </div>
            <div class="timeline-item" date-is='2020' data-aos="fade">
              <h3><?php echo $this->texts["tamchay_birth"]; ?></h3>
              <p>
                <?php echo $this->texts["tamchay_birth_prgrph"]; ?>
              </p>
            </div>
            <div class="timeline-item" date-is='2019' data-aos="fade">
              <h3><?php echo $this->texts["expansion"]; ?></h3>
              <p>
                <?php echo $this->texts["expansion_prgrph"]; ?>
              </p>
            </div>
            <div class="timeline-item" date-is='2017' data-aos="fade">
              <h3><?php echo $this->texts["brand_born"]; ?></h3>
              <p>
                <?php echo $this->texts["brand_born_prgrph"]; ?>
              </p>
            </div>
          </div>
        </div>

      </div>
    </div>

    <section class="py-5 bg-light">
    <div class="container section">

      <div class="row justify-content-center text-center mb-5">
        <div class="col-md-7 mb-5">
          <h2 class="heading" data-aos="fade-up"><?php echo $this->texts["team"]; ?></h2>
        </div>
      </div>

      <div class="row justify-content-center">
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
          <div class="block-2">
            <div class="flipper">
              <div class="front" style="background-image: url(images/ngoc_pham.jpg);">
                <div class="box">
                  <h1>Ngoc Pham</h1>
                  <p><?php echo $this->texts["project_director"]; ?></p>
                </div>
              </div>
              <div class="back">
                <!-- back content -->
                <blockquote>
                  <p><?php echo $this->texts["ngoc_description"]; ?></p>
                </blockquote>
                <div class="author d-flex">
                  <div class="image mr-3 align-self-center">
                    <img src="images/ngoc_pham.jpg" alt="">
                  </div>
                  <div class="name align-self-center">Ngoc Pham <span class="position"><?php echo $this->texts["project_director"]; ?></span></div>
                </div>
              </div>
            </div>
          </div> <!-- .flip-container -->
        </div>

        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
          <div class="block-2"> <!-- .hover -->
            <div class="flipper">
              <div class="front" style="background-image: url(images/thuy.jpg);">
                <div class="box">
                  <h1>Thuy Nguyen</h1>
                  <p><?php echo $this->texts["advisor"]; ?></p>
                </div>
              </div>
              <div class="back">
                <!-- back content -->
                <blockquote>
                  <p><?php echo $this->texts["thuy_description"]; ?></p>
                </blockquote>
                <div class="author d-flex">
                  <div class="image mr-3 align-self-center">
                    <img src="images/thuy.jpg" alt="">
                  </div>
                  <div class="name align-self-center">Thuy Nguyen<span class="position"><?php echo $this->texts["advisor"]; ?></span></div>
                </div>
              </div>
            </div>
          </div> <!-- .flip-container -->
        </div>

      </div>
    </div>
  </section>
    <!-- END .block-2 -->

    <section class="section slider-section">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-7">
            <h1 data-aos="fade-up"><?php echo $this->texts["photos"]; ?></h1>
            <p data-aos="fade-up" data-aos-delay="100"><?php echo $this->texts["photos_prgrph"]; ?></p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="home-slider major-caousel owl-carousel mb-5" data-aos="fade-up" data-aos-delay="200">
              <div class="slider-item">
                <a href="images/slider-1.jpg" data-fancybox="images" data-caption="Caption for this image"><img src="images/slider-1.jpg" alt="Image placeholder" class="img-fluid"></a>
              </div>
              <div class="slider-item">
                <a href="images/slider-2.jpg" data-fancybox="images" data-caption="Caption for this image"><img src="images/slider-2.jpg" alt="Image placeholder" class="img-fluid"></a>
              </div>
              <div class="slider-item">
                <a href="images/slider-3.jpg" data-fancybox="images" data-caption="Caption for this image"><img src="images/slider-3.jpg" alt="Image placeholder" class="img-fluid"></a>
              </div>
              <div class="slider-item">
                <a href="images/slider-4.jpg" data-fancybox="images" data-caption="Caption for this image"><img src="images/slider-4.jpg" alt="Image placeholder" class="img-fluid"></a>
              </div>
              <div class="slider-item">
                <a href="images/slider-5.jpg" data-fancybox="images" data-caption="Caption for this image"><img src="images/slider-5.jpg" alt="Image placeholder" class="img-fluid"></a>
              </div>
              <div class="slider-item">
                <a href="images/slider-6.jpg" data-fancybox="images" data-caption="Caption for this image"><img src="images/slider-6.jpg" alt="Image placeholder" class="img-fluid"></a>
              </div>
              <div class="slider-item">
                <a href="images/slider-7.jpg" data-fancybox="images" data-caption="Caption for this image"><img src="images/slider-7.jpg" alt="Image placeholder" class="img-fluid"></a>
              </div>
            </div>
            <!-- END slider -->
            <p><?php echo $this->texts["disclaimer"]; ?></p>
          </div>

        </div>
      </div>
    </section>
    <!-- END section -->
