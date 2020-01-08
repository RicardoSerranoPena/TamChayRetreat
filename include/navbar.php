<?php  ?>

<div class="container-fluid">
  <div class="row align-items-center">
    <div class="col-4 col-lg-4 site-logo" data-aos="fade"><b href="index.html">Tâm Chay Retreat</b></div>
    <div class="col-8 col-lg-8">

      <div class="site-menu-toggle js-site-menu-toggle"  data-aos="fade">
        <span></span>
        <span></span>
        <span></span>
      </div>

      <div class="site-language-toggle" data-aos="fade">
        <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span class="fa fa-globe"></span>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="index.php?lang=en">English</a>
            <a class="dropdown-item" onclick="<?php $this->lang = "vi"; ?>">Tiếng Việt</a>
          </div>
        </button>
      </div>
      <!-- END menu-toggle -->

      <div class="site-navbar js-site-navbar">
        <nav role="navigation">
          <div class="container">
            <div class="row full-height align-items-center">
              <div class="col-md-3 mx-auto">
                <ul class="list-unstyled menu">
                  <li><a href="index.php?page=home"><?php echo $this->texts["home"]; ?></a></li>
                  <li><a href="index.php?page=about"><?php echo $this->texts["about"]; ?></a></li>
                  <li><a href="index.php?page=contact"><?php echo $this->texts["contact"]; ?></a></li>
                </ul>
              </div>
              <div class="col-md-3 mx-auto">
                <h4><?php echo $this->texts["for_travelers"]; ?>:</h4>
                <ul class="list-unstyled menu">
                  <li><a href="index.php?page=rooms"><?php echo $this->texts["rooms"]; ?></a></li>
                  <li><a href="index.php?page=guidelines"><?php echo $this->texts["guidelines"]; ?></a></li>
                  <li><a href="index.php?page=booking"><?php echo $this->texts["booking"]; ?></a></li>
                </ul>
              </div>
              <div class="col-md-3 mx-auto">
                <h4><?php echo $this->texts["for_groups"]; ?>:</h4>
                <ul class="list-unstyled menu">
                  <li><a href="index.php?page=partnerships"><?php echo $this->texts["partnerships"]; ?></a></li>
                  <li><a href="index.php?page=guidelines"><?php echo $this->texts["guidelines"]; ?></a></li>
                  <li><a href="index.php?page=booking_groups"><?php echo $this->texts["booking"]; ?></a></li>
                </ul>
              </div>
            </div>
          </div>
        </nav>
      </div>

    </div>
  </div>
</div>
