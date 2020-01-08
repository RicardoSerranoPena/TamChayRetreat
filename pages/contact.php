<?php  ?>

  <section class="section contact-section" id="next">
    <div class="container">
      <div class="row">
        <div class="col-md-7" data-aos="fade-up" data-aos-delay="100">

          <form action="#" method="post" class="bg-white p-md-5 p-4 mb-5 border">
            <div class="row">
              <div class="col-md-6 form-group">
                <label for="name"><?php echo $this->texts["name"]; ?></label>
                <input type="text" id="name" class="form-control ">
              </div>
              <div class="col-md-6 form-group">
                <label for="phone"><?php echo $this->texts["phone"]; ?></label>
                <input type="text" id="phone" class="form-control ">
              </div>
            </div>

            <div class="row">
              <div class="col-md-12 form-group">
                <label for="email"><?php echo $this->texts["email"]; ?></label>
                <input type="email" id="email" class="form-control ">
              </div>
            </div>
            <div class="row mb-4">
              <div class="col-md-12 form-group">
                <label for="message"><?php echo $this->texts["message_or_questions"]; ?></label>
                <textarea name="message" id="message" class="form-control " cols="30" rows="8"></textarea>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 form-group">
                <input type="submit" value="<?php echo $this->texts["send_message"]; ?>" class="btn btn-primary text-white font-weight-bold">
              </div>
            </div>
          </form>

        </div>
        <div class="col-md-5" data-aos="fade-up" data-aos-delay="200">
          <div class="row">
            <div class="col-md-10 ml-auto contact-info">
              <p><span class="d-block"><?php echo $this->texts["address"]; ?></span> <span><?php echo $this->texts["actual_address"]; ?></span></p>
              <p><span class="d-block"><?php echo $this->texts["phone"]; ?></span> <span><?php echo $this->texts["actual_phone"]; ?></span></p>
              <p><span class="d-block"><?php echo $this->texts["email"]; ?></span> <span><?php echo $this->texts["actual_email"]; ?></span></p>
              <p><span class="d-block"><?php echo $this->texts["facebook"]; ?></span> <a href="<?php echo $this->texts["facebook_link"]; ?>">facebook.com/tamchayhomestay</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
