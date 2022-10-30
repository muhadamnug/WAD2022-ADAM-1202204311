<?php
$name = 'MUHAMMAD ADAM NUGRAHA_1202204311';
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ADAM_HOME</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <style>
      .container{
        margin-top: ;
      }
    </style>
  </head>
  <body>
    <!-- Nav Bar -->
    <section>
        <ul class="nav justify-content-center bg-black">
            <li class="nav-item">
              <a class="nav-link text-muted" href="Home.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-muted" href="Booking.php?name=<?=$name?>">Booking</a>
            </li>
          </ul>
    </section>

    <!-- Heading -->
    <section>
        <h3 class="text-center">WELCOME TO EAD RENT</h3>
        <h6 class="text-center">Find your best deal, here!</h6>
    </section>

    <!-- Card Container -->
    <section>
        <div class="container text-style">
  <div class="row align-items-center">
    <div class="col">
      <div class="card" style="width: 100%;">
        <img src="mustang.png" class="card-img-top" alt="mustang">
        <div class="card-body">
          <h5 class="card-title">Ford Mustang GT</h5>
          <p class="card-text text-muted">RP5.500.000 / Day</p></div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item text-center text-primary"><b>2 Kursi</b></li>
          <li class="list-group-item text-center text-primary"><b>5000 cc</b></li>
          <li class="list-group-item text-center text-primary"><b>8 Cylinder Automatic</b></li>
        </ul>
        <div class="card-body text-center bg-light">
          <a class="btn btn-primary" href="Booking.php?name=<?=$name?>&car=Ford Mustang GT" role="button">Book Now</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card" style="width: 100%;">
        <img src="Dodge-Challenger.png" class="card-img-top" alt="mustang">
        <div class="card-body">
          <h5 class="card-title">Dodge Challenger</h5>
          <p class="card-text text-muted">RP5.000.000 / Day</p></div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item text-center text-primary"><b>5 Kursi</b></li>
          <li class="list-group-item text-center text-primary"><b>721 HP</b></li>
          <li class="list-group-item text-center text-primary"><b>6 Cylinder Automatic</b></li>
        </ul>
        <div class="card-body text-center bg-light">
          <a class="btn btn-primary" href="Booking.php?name=<?=$name?>&car=Dodge Challenger" role="button">Book Now</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card" style="width: 100%;">
        <img src="BMW-X5.png" class="card-img-top" alt="mustang">
        <div class="card-body">
          <h5 class="card-title">BMW X5</h5>
          <p class="card-text text-muted">RP4.500.000 / Day</p></div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item text-center text-primary"><b>7 Kursi</b></li>
          <li class="list-group-item text-center text-primary"><b>335 HP</b></li>
          <li class="list-group-item text-center text-primary"><b>6 Cylinder Automatic</b></li>
        </ul>
        <div class="card-body text-center bg-light">
          <a class="btn btn-primary" href="Booking.php?name=<?=$name?>&car=BMW X5" role="button">Book Now</a>
        </div>
      </div>
    </div>
  </div>
            
          </section>
    <!-- Footer -->
    <section>
      <div class="d-flex justify-content-center">
        <p class="text-center fixed-bottom bg-light mt-0">Created by MUHAMMAD ADAM NUGRAHA_1202204311</p>
      </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>