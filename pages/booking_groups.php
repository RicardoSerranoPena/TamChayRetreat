<?php
namespace GroupBooking;

use PHPMailer\PHPMailer\{PHPMailer, SMTP, Exception};
require 'Mail/PHPMailer.php';
require 'Mail/SMTP.php';
require 'Mail/Exception.php';
$mail = new PHPMailer;


if (isset($_POST['submit']))
{
  if (($_POST['name'] != "") && ($_POST['phone'] != "") && ($_POST['email'] != ""))
  {
    //Saving the group booking information in the XML file
    $group_bookings = simplexml_load_file($this->$group_booking_file);
    $group_booking = $group_bookings->addChild('group_booking');
    $group_booking->addChild('code', $this->get_random_code());
    $group_booking->addChild('name', stripslashes($_POST['name']));
    $group_booking->addChild('phone', stripslashes($_POST['phone']));
    $group_booking->addChild('email', stripslashes($_POST['email']));
    $group_booking->addChild('event_name', stripslashes($_POST['event_name']));
    $group_booking->addChild('event_start', stripslashes($_POST['event_start']));
    $group_booking->addChild('event_end', stripslashes($_POST['event_end']));
    $group_booking->addChild('guests', stripslashes($_POST['guests']));
    $group_booking->addChild('message', stripslashes($_POST['message']));
    $group_booking->addChild('status', 0);

    $group_bookings->asXML($this->$group_booking_file);
    //End saving in the XML file

    //Sending an email notification to the site owner
    $_POST['name']=strip_tags(stripslashes($_POST['name']));
    $_POST['phone']=strip_tags(stripslashes($_POST['phone']));
    $_POST['email']=strip_tags(stripslashes($_POST['email']));
    $_POST['message']=strip_tags(stripslashes($_POST['message']));

    $email_text = "New Group Booking reservation made by " . strip_tags(stripslashes($_POST['name'])).
    ". email: " . strip_tags(stripslashes($_POST['email'])). " and phone: ". strip_tags(stripslashes($_POST['phone'])).
    "\n\n"."User message: " . strip_tags(stripslashes($_POST['message']));

    //PHPMailer starts here
    $mail->isSMTP();
    $mail->Host = $this->settings["email"]["smtp_server"];
    $mail->Port = 587;
    $mail->SMTPAuth = true;
    $mail->Username = $this->settings["email"]["smtp_user"];
    $mail->Password = $this->settings["email"]["smtp_password"];
    $mail->setFrom($this->settings["email"]["smtp_user"], 'Tam Chay Retreat');
    $mail->addAddress($this->settings["email"]["smtp_user"], 'Group Reservation');
    $mail->Subject = 'New Group Booking';
    $mail->Body = $email_text;

    if (!$mail->send())
    {
      echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else
    {
      echo 'Message sent!';
    }
    //PHPMailer ends here
    //end sending email
  }
}
?>

  <section class="section contact-section" id="next">
    <div class="container">
      <div class="row">
        <div class="col-md-7" data-aos="fade-up" data-aos-delay="100">

          <form action="index.php" class="bg-white p-md-5 p-4 mb-5 border">
          <input type="hidden" name="page" value="group_success">
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
              <p><span class="d-block"><?php echo $this->texts["facebook"]; ?></span> <a href="<?php echo $this->texts["facebook_link"]; ?>">facebook.com/tamchayretreathomestay</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
