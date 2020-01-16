<?php  ?>


<div class="container">
  <div class="row justify-content-center align-items-left text-center">
    <div class="col-md-10 text-center" data-aos="fade">
      <?php
      $message_text=$this->texts["group_booking_confirmation_message"];
      $message_text=str_replace("{NAME}", $this->group_contact_name, $message_text);
      $booking_details=$this->event_start . " - " . $this->event_end;
      $message_text=str_replace("{BOOKING_DETAILS}", $booking_details, $message_text);
      $message_text=str_replace("{BOOKING_CODE}", $this->group_reservation_id, $message_text);
      $message_text=str_replace("{GUESTS}", $this->event_guests, $message_text);

      echo $message_text;
      ?>
    </div>
  </div>
</div>
</section>
