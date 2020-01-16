<?php
$heading_title;
?>
<?php if ($this->page=="home"): ?>
  <span class="custom-caption text-uppercase text-white d-block  mb-3"><?php echo $this->texts["wonder_subheading"]; ?></span>
  <h1 class="heading">Tâm Chay Retreat</h1>
<?php else: ?>
  <?php switch($this->page) {
    case "about":
      $heading_title = $this->texts["about"];
      break;
    case "booking_groups":
      $heading_title = $this->texts["group_booking"];
      break;
    case "group_success":
      $heading_title = $this->texts["group_booking"];
      break;
    case "booking":
      $heading_title = $this->texts["booking"];
      break;
    case "contact":
      $heading_title = $this->texts["contact"];
      break;
    case "guidelines":
      $heading_title = $this->texts["guidelines"];
      break;
    case "home":
      $heading_title = $this->texts["home"];
      break;
    case "partnerships":
      $heading_title = $this->texts["partnerships"];
      break;
    case "rooms":
      $heading_title = $this->texts["rooms"];
      break;
  }
  ?>
  <h1 class="heading mb-3"><?php echo ucfirst($heading_title);?></h1>
  <ul class="custom-breadcrumbs mb-4">
    <li><a href="index.php?page=home"><?php echo $this->texts["home"]; ?></a></li>
    <li>&bullet;</li>
    <li><?php echo ($heading_title);?></li>
  </ul>
<?php endif; ?>
