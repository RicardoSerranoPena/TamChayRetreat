<?php
  include_once 'dbh.php';

  session_start();

  //check if submit button was clicked
  if (isset($_POST['submit'])) {
    //check if values are empty
    if (isset($_POST['name'])) {
      $name = $_POST['name']; //guests
    }
    if (isset($_POST['phone'])) {
      $phone = $_POST['phone']; //guests
    }
    if (isset($_POST['email'])) {
      $email = $_POST['email']; //guests
    }
    //sql insertion
    $contact_info_sql = "INSERT INTO `group_contact`
    (`name`, `phone`, `email`)
    VALUES (
      '$name',
      '$phone',
      '$email'
    );";
    //make insertation and retrieve the id from last insert
    if ($conn->query($contact_info_sql) === TRUE ) {
      $last_contact_id = $conn->insert_id;
      saveContactInfo($name, $phone, $email);
    }
    //check if values are empty
    if (isset($_POST['event_name'])) {
      $event_name = $_POST['event_name']; //guests
    }
    if (isset($_POST['event_purpose'])) {
      $event_purpose = $_POST['event_purpose']; //guests
    }
    if (isset($_POST['event_start'])) {
      $input_event_start = $_POST['event_start'];
      $event_start = date("Y-m-d H:i:s", strtotime($input_event_start)); //reservation
    }
    if (isset($_POST['event_end'])) {
      $input_event_end = $_POST['event_end'];
      $event_end = date("Y-m-d H:i:s", strtotime($input_event_end)); //reservation
    }
    if (isset($_POST['guests'])) {
      $event_guests = $_POST['guests']; //reservation
    }
    if (isset($_POST['message'])) {
      $event_message = $_POST['message']; //guests
    }
    //call to make group reservation
    makeGroupReservation($conn, $event_name, $event_purpose, $event_start, $event_end, $event_guests, $event_message, $last_contact_id);
    //redirection to the page users see
    header("Location: ../vn-successful_group_reservation.php");
  }

  /*
  A function to make the group reservation given the parameters
  $conn
  $event_name
  $event_purpose
  $event_start
  $event_end
  $event_guests
  $event_message
  $last_contact_id
  */
  function makeGroupReservation($conn, $event_name, $event_purpose, $event_start, $event_end, $event_guests, $event_message, $last_contact_id) {
    $group_reservation_id = generateReservationNumber();
    $group_reservation_sql = "INSERT INTO `group_reservations`
    (`event_id`, `event_name`, `event_purpose`, `event_start_date`, `event_end_date`, `event_guests`, `event_message`, `event_contact`)
    VALUES (
      '$group_reservation_id',
      '$event_name',
      '$event_purpose',
      '$event_start',
      '$event_end',
      '$event_guests',
      '$event_message',
      '$last_contact_id'
    );";
    if ($conn->query($group_reservation_sql) === TRUE ) {
      saveReservationInfo($group_reservation_id, $event_name, $event_start, $event_end, $event_guests);
    }
  }

  /*
  A function to generate a Reservation Number
  */
  function generateReservationNumber() {
    $reservation_id = mt_rand(8000000,9999999);
    return $reservation_id;
  }

  /*
  A function to store the contact information to the session
  */
  function saveContactInfo($name, $phone, $email) {
    $_SESSION["name"] = $name;
    $_SESSION["phone"] = $phone;
    $_SESSION["email"] = $email;
  }

  /*
  A function to store the reservation information to the session
  */
  function saveReservationInfo($group_reservation_id, $event_name, $event_start, $event_end, $event_guests) {
    $_SESSION["group_reservation_id"] = $group_reservation_id;
    $_SESSION["event_name"] = $event_name;
    $_SESSION["event_start"] = $event_start;
    $_SESSION["event_end"] = $event_end;
    $_SESSION["event_guests"] = $event_guests;
  }
?>
