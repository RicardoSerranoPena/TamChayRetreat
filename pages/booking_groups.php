<?php  ?>

  <section class="section contact-section" id="next">
    <div class="container">
      <div class="row">
        <div class="col-md-7" data-aos="fade-up" data-aos-delay="100">

          <form action="include/groups.php" method="post" class="bg-white p-md-5 p-4 mb-5 border">
            <div class="row">
              <div class="col-md-6 form-group">
                <label class="text-black font-weight-bold" for="name"><?php echo $this->texts["name"]; ?></label>
                <input type="text" name="name" id="first_name" class="form-control ">
              </div>
              <div class="col-md-6 form-group">
                <label class="text-black font-weight-bold" for="phone"><?php echo $this->texts["phone"]; ?></label>
                <input type="text" name="phone" id="phone" class="form-control" placeholder="<?php echo $this->texts["phone_placeholder"]; ?>">
              </div>
            </div>

            <div class="row">
              <div class="col-md-12 form-group">
                <label class="text-black font-weight-bold" for="email"><?php echo $this->texts["email"]; ?></label>
                <input type="email" name="email" id="email" class="form-control">
              </div>
            </div>

            <div class="row">
              <div class="col-md-12 form-group">
                <label class="text-black font-weight-bold" for="event_name"><?php echo $this->texts["event_name"]; ?></label>
                <input type="text" name="event_name" id="event_name" class="form-control ">
              </div>
            </div>

            <div class="row">
              <div class="col-md-6 form-group">
                <label class="text-black font-weight-bold" for="event_start"><?php echo $this->texts["event_start_date"]; ?></label>
                <input type="text" name="event_start" id="checkin_date" class="form-control">
              </div>
              <div class="col-md-6 form-group">
                <label class="text-black font-weight-bold" for="event_end"><?php echo $this->texts["event_end_date"]; ?></label>
                <input type="text" name="event_end" id="checkout_date" class="form-control">
              </div>
            </div>

            <div class="row">
              <div class="col-md-6 form-group">
                <label for="adults" class="font-weight-bold text-black"><?php echo $this->texts["guests_overnight"]; ?></label>
                <div class="field-icon-wrap">
                  <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                  <select name="guests" id="guests" class="form-control">
                    <option value="0">0</option>
                    <?php
                    for($i=1;$i<=24;$i++)
                    {
                      echo '<option '.($i==2?"selected":"").' value="'.$i.'">'.$i.'</option>';
                    }
                    ?>
                  </select>
                </div>
              </div>
            </div>

            <div class="row mb-4">
              <div class="col-md-12 form-group">
                <label class="text-black font-weight-bold" for="message"><?php echo $this->texts["message_or_questions"]; ?></label>
                <textarea name="message" id="message" class="form-control " cols="30" rows="8"></textarea>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 form-group">
                <input type="submit" name="submit" value="<?php echo $this->texts["book_now"]; ?>" class="btn btn-primary py-3 px-5 font-weight-bold">
              </div>
            </div>
          </form>

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
      </div>
    </div>
  </section>
