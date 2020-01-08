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
              <div class="col-md-12 form-group">
                <label class="text-black font-weight-bold" for="event_purpose"><?php echo $this->texts["event_purpose"]; ?></label>
                <input type="text" name="event_purpose" id="event_purpose" class="form-control ">
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
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>
                    <option value="21">21</option>
                    <option value="22">22</option>
                    <option value="23">23</option>
                    <option value="24">24</option>
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
