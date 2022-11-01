<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ADAM_BOOKING</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <!-- Nav Bar -->
    <section>
        <ul class="nav justify-content-center bg-black">
            <li class="nav-item">
              <a class="nav-link text-muted" href="Home.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-muted" href="Booking.php">Booking</a>
            </li>
          </ul>
    </section>
    <!-- Form -->
        <div class="modal-body row">
            <div class="col-md-6">
                <img src="mustank.png" class="img-thumbnail mt-5 border-0" alt="mustang">
            </div>
            <div class="col-md-6">
                <h3 class="m-2">Rent your car now!</h3><br>
                <!-- Name -->
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Name</label>
                    <input class="form-control" style="width: 90% ;" type="text" value="<?=$_GET['name']?>" aria-label="Ford Mustang GT" disabled readonly>
                  </div>   
                <!-- Book Date -->                
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Book Date</label>                    
                    <input type="date" class="form-control" style="width: 90%" id="exampleFormControlInput1" placeholder="dd/mm/yyyy">
                  </div>
                <!-- Start Time -->
                <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Book Date</label>                    
                  <input type="time" class="form-control" style="width: 90%" id="exampleFormControlInput1" placeholder="dd/mm/yyyy">
                </div>
                <!-- Duration (days) -->
                <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Duration (Days)</label>
                  <input type="email" class="form-control" style="width: 90%" id="exampleFormControlInput1" placeholder="">
                </div>
                <!-- Car Type -->
                <label for="exampleFormControlInput1" class="form-label">Car Type</label>
                <?php if(isset($_GET['car'])):?>
                <select class="form-select" style="width: 90%;" aria-label="Default select example">
                  <option value="<?=$_GET['car']?>"><?=$_GET['car']?></option>
                </select>
                <?php else:?>
                <select class="form-select" style="width: 90%;" aria-label="Default select example">
                  <option selected>Ford Mustang GT</option>
                  <option value="1">Dodge Challenger</option>
                  <option value="2">BMW X5</option>
                </select>
                <?php endif?>
                <!-- Phone Number -->
                <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Phone Number</label>
                  <input type="email" class="form-control" style="width: 90%" id="exampleFormControlInput1" placeholder="">
                </div>
                <!-- Add Service -->
                <label for="exampleFormControlInput1" class="form-label">Add Service</label>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                    Health protocol / RP25.000
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                  <label class="form-check-label" for="flexCheckChecked">
                    Driver / RP100.000
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                  <label class="form-check-label" for="flexCheckChecked">
                    Fuel Filled / RP250.000
                  </label>
                </div>
                <br>
                <!-- Book -->
                <input type="radio" class="btn-check" name="options-outlined" id="success-outlined" autocomplete="off" checked>
                <label class="btn btn-outline-success" style="width: 90%;" for="success-outlined">Checked success radio</label>
            </div>     
                   
          </div>

          <section>
            <div class="d-flex justify-content-center">
              <p class="text-center fixed-bottom bg-light">Created by MUHAMMAD ADAM NUGRAHA_1202204311</p>
            </div>
          </section>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>