<?php
include_once 'dbh.php';

session_start();

//check if submit buttom was clicked
if (isset($_POST['submit'])) {
  //check if values are empty
  if (isset($_POST['first_name'])) {
    $first_name = $_POST['first_name']; //guests
  }
  if (isset($_POST['last_name'])) {
    $last_name = $_POST['last_name']; //guests
  }
  if (isset($_POST['email'])) {
    $email = $_POST['email']; //guests
  }
  if (isset($_POST['phone'])) {
    $phone = $_POST['phone']; //guests
  }

  //check if the user already submitted
  if (isset($_SESSION['submit_id'])) {
    header("Location: ../successful_guest_reservation.php");
  } else {
    $_SESSION['submit_id'] = session_id();
    $last_id = makeContactQuery($conn, $first_name, $last_name, $email, $phone);
  }

  //check if values are empty
  if (isset($_POST['female_guests'])) {
    $female_guests = $_POST['female_guests']; //reservation
  }
  if (isset($_POST['male_guests'])) {
    $male_guests = $_POST['male_guests']; //reservation
  }
  if (isset($_POST['checkin_date'])) {
    $input_checkin_date = $_POST['checkin_date'];
    $checkin_date = date("Y-m-d H:i:s", strtotime($input_checkin_date)); //reservation
  }
  if (isset($_POST['checkout_date'])) {
    $input_checkout_date = $_POST['checkout_date'];
    $checkout_date = date("Y-m-d H:i:s", strtotime($input_checkout_date)); //reservation
  }
  if (isset($_POST['bed_type'])) {
    $bed_type = $_POST['bed_type']; //reservation
  }
  if (isset($_POST['message'])) {
    $message = $_POST['message']; //reservation
  }

  makeReservationQuery ($conn, $female_guests, $male_guests, $checkin_date, $checkout_date, $bed_type, $last_id, $message);

  header("Location: ../successful_guest_reservation.php");
}

function makeBedUnavailable($conn, $bed_id) {
  $bed_unavailable_sql = "UPDATE `beds`
  SET `available` = 0
  WHERE `id` = '$bed_id'
;";
if ($conn->query($bed_unavailable_sql) === TRUE) {  }
}

function getBedsReservedId($conn, $female_guests, $male_guests, $checkin_date, $checkout_date, $bed_type) {
  $selected_beds = getBeds($conn, $female_guests, $male_guests, $checkin_date, $checkout_date, $bed_type);
  $beds_reserved_id = rand();
  $count = count($selected_beds);
  for ($i=0; $i<$count; $i++) {
    $bed_id_str = implode("", $selected_beds[$i]);
    $beds_reserved_sql = "INSERT INTO `beds_reserved`
    (`beds_reserved_id`, `bed_id`)
    VALUES (
      '$beds_reserved_id',
      '$bed_id_str'
    );";
    if ($conn->query($beds_reserved_sql) === TRUE) {
      makeBedUnavailable($conn, $bed_id_str);
    }
  }
  return $beds_reserved_id;
}

/*
Gets the beds to be reserved according to the bed type and type of guests.
*/
function getBeds($conn, $female_guests, $male_guests, $checkin_date, $checkout_date, $bed_type) {
  $total_guests = $female_guests + $male_guests;
  switch ($bed_type) {
    case "standard_bed":
    $available_male_beds = getAvailableMaleBeds($conn, $male_guests, $checkin_date, $checkout_date);
    $available_female_beds = getAvailableFemaleBeds($conn, $female_guests, $checkin_date, $checkout_date);
    for ($i = 0; $i < $male_guests; $i++) {
      $selected_beds[] = $available_male_beds[$i];
    }
    for ($i = 0; $i < $female_guests; $i++) {
      $selected_beds[] = $available_female_beds[$i];
    }
    break;
    case "double_room":
    $ret_double_beds_sql = "SELECT `id` FROM `beds` WHERE (`room_number` > 2000 AND `room_number` < 3000) AND `available` = 1;";
    $ret_double_beds = mysqli_query($conn, $ret_double_beds_sql);
    if ($ret_double_beds) {
      for($i = 0; $available_double_beds[$i] = mysqli_fetch_assoc($ret_double_beds); $i++);
      array_pop($available_double_beds);
    }
    for ($i = 0; $i < $total_guests; $i++) {
      $selected_beds[] = $available_double_beds[$i];
    }
    break;
    case "single_room":
    $ret_single_beds_sql = "SELECT `id` FROM `beds` WHERE (`room_number` = 1100 AND `available` = 1);";
    $ret_single_beds = mysqli_query($conn, $ret_single_beds_sql);
    if ($ret_single_beds) {
      for($i = 0; $available_single_beds[$i] = mysqli_fetch_assoc($ret_single_beds); $i++);
      array_pop($available_single_beds);
    }
    for ($i = 0; $i < $total_guests; $i++) {
      $selected_beds[] = $available_single_beds[$i];
    }
    break;
    default:
    $selected_beds = NULL;
  }
  return $selected_beds;
}

function getAvailableMaleBeds($conn, $male_guests, $checkin_date, $checkout_date) {
  $ret_male_beds_sql = "SELECT `id` FROM `beds` WHERE (`room_number` = 3100 OR `room_number` = 4100) AND `available` = 1;";
  $ret_male_beds = mysqli_query($conn, $ret_male_beds_sql);
  if ($ret_male_beds) {
    for($i = 0; $available_male_beds[$i] = mysqli_fetch_assoc($ret_male_beds); $i++);
    array_pop($available_male_beds);
    return $available_male_beds;
  }
}

function getAvailableFemaleBeds($conn, $female_guests, $checkin_date, $checkout_date) {
  $ret_female_beds_sql = "SELECT `id` FROM `beds` WHERE (`room_number` = 3200 OR `room_number` = 4200) AND `available` = 1;";
  $ret_female_beds = mysqli_query($conn, $ret_female_beds_sql);
  if ($ret_female_beds) {
    for($i = 0; $available_female_beds[$i] = mysqli_fetch_assoc($ret_female_beds); $i++);
    array_pop($available_female_beds);
    return $available_female_beds;
  }
}
/*
A function to make the contact query given the parameters
$conn
$first_name
$last_name
$email
$phone
returns $last_id
*/
function makeContactQuery($conn, $first_name, $last_name, $email, $phone) {
  $user_info_sql = "INSERT INTO `guests`
  (`first_name`, `last_name`, `email`, `phone`)
  VALUES (
    '$first_name',
    '$last_name',
    '$email',
    '$phone'
  );";
  if ($conn->query($user_info_sql) === TRUE) {
    $last_id = $conn->insert_id;
    saveContactInfo($first_name, $last_name, $email, $phone);
  }
  return $last_id;
}

/*
A function to make the traveller reservation given the parameters
$conn
$checkin_date
$checkout_date
$bed_type
$last_id
$message
*/
function makeReservationQuery ($conn, $female_guests, $male_guests, $checkin_date, $checkout_date, $bed_type, $last_id, $message) {
  if (isset($last_id)) {
    $beds_reserved_id = getBedsReservedId($conn, $female_guests, $male_guests, $checkin_date, $checkout_date, $bed_type);
    $reservation_id = generateReservationNumber();
    $reservation_sql = "INSERT INTO `reservations`
    (`id`, `date_in`, `date_out`, `beds_reserved_id`, `guest_id`, `message`)
    VALUES (
      '$reservation_id',
      '$checkin_date',
      '$checkout_date',
      '$beds_reserved_id',
      '$last_id',
      '$message'
    );";
    if ($conn->query($reservation_sql) === TRUE) {
      saveReservationInfo($reservation_id, $checkin_date, $checkout_date, $female_guests, $male_guests);
    }
  }
}

/*
A function to generate a Reservation Number
*/
function generateReservationNumber() {
  $reservation_id = mt_rand(1000000,7999999);
  return $reservation_id;
}

/*
A function to store the contact information to the session
*/
function saveContactInfo($first_name, $last_name, $email, $phone) {
  $_SESSION["first_name"] = $first_name;
  $_SESSION["last_name"] = $last_name;
  $_SESSION["email"] = $email;
  $_SESSION["phone"] = $phone;
}

/*
A function to store the reservation information to the session
*/
function saveReservationInfo($reservation_id, $checkin_date, $checkout_date, $female_guests, $male_guests) {
  $_SESSION["reservation_id"] = $reservation_id;
  $_SESSION["checkin_date"] = $checkin_date;
  $_SESSION["checkout_date"] = $checkout_date;
  $_SESSION["female_guests"] = $female_guests;
  $_SESSION["male_guests"] = $male_guests;
}

?>
