<?php

    session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events</title>
    <link rel="icon" href="image/logo.jpg" type="image/x-icon">
    <link rel="stylesheet" href="bootstrap.css">
</head>
<body>
    <header>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid container">
          <a class="navbar-brand alert" href="index.html" style="display: flex;"><img src="image/logo.jpg" alt="" width="60px"><p class="d-lg-block d-md-block d-none" style="padding-top: 10px;">OboyEntertainment</p> </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link alert" href="index.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link alert" href="#about">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link alert" href="#service">Service</a>
              </li>
              <li class="nav-item">
                <a class="nav-link alert" href="#artist">Artist</a>
              </li>
              <li class="nav-item">
                <a class="nav-link alert" href="#contact">Contact us</a>
              </li>
              
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <div class="mx-auto my-5 p-3 shadow rounded w-50 w-lg-50 w-sm-100">
        <?php
        if (isset($_SESSION['message'])) {
            $clas = $_SESSION['class'];
            echo "<div class='$clas'><strong>".$_SESSION['message']."</strong></div>";
            unset($_SESSION['message']);
        }
        ?>
        <form action="processor.php" method="post" enctype="multipart/form-data">
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="Artist name" name="name">
            <label for="floatingInput">Artist Name</label>
        </div>
        <!-- <div class="form-floating mb-3">
            <textarea type="text" class="form-control" id="floatingInput" placeholder="About Artist" name="name"></textarea>
            <label for="floatingInput">About Artist</label>
        </div> -->
        <div class="input-group mb-3">
            <span class="input-group-text">About Artist</span>
            <textarea class="form-control" name="about" rows="5" aria-label="About Artist"></textarea>
        </div>
        <div class="d-inline-flex w-100">
            <div class=" mb-3 w-100">
                <input type="file" class="form-control " id="floatingInput" name="file">
            </div>
            <input type="date" name="date" id="" class="form-control ms-2 mb-3 w-50">
        </div>
        <button type="submit" class="btn btn-outline-warning w-50 mx-auto" name="submit">Submit</button>
        </form>
    </div>
</body>
</html>
