<?php


?>

<div class="">
    <nav class="navbar tc-navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php?page=home">Tâm Chay Retreat Homestay</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMain">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarMain">
            <ul class="navbar-nav ml-auto ">
                <li class="nav-item">
                    <a class="nav-link" href="index.php?page=about"><?php echo $this->texts["about"]; ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?page=contact"><?php echo $this->texts["contact"]; ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?page=rooms"><?php echo $this->texts["rooms"]; ?></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdownForTravelers" data-toggle="dropdown"><?php echo $this->texts["for_travelers"]; ?></a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="index.php?page=guidelines"><?php echo $this->texts["guidelines"]; ?></a>
                        <a class="dropdown-item" href="index.php?page=booking"><?php echo $this->texts["booking"]; ?></a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdownForGroups" data-toggle="dropdown"><?php echo $this->texts["for_groups"]; ?></a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="index.php?page=guidelines"><?php echo $this->texts["guidelines"]; ?></a>
                        <a class="dropdown-item" href="index.php?page=booking_groups"><?php echo $this->texts["booking"]; ?></a>
                    </div>
                </li>
            </ul>
        </div>

    </nav>
</div>
