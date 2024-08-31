<?php
require 'dbconn.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Worldskills home</title>
    <link rel="stylesheet" href="style.css"> 
   <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">
   <script src="bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="m-4">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <img src="img/worldskills.jpg" class="logo" alt="">
            <a href="home.php" class="navbar-brand">KENYA NATIONAL WORLDSKILLS HOTEL</a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav">
                    <a href="home.php" class="nav-item nav-link active">Home</a>
                    <a href="room.php" class="nav-item nav-link">Rooms</a>
                    <a href="facility.php" class="nav-item nav-link">Facilities</a>
                    <a href="contact.php" class="nav-item nav-link">Contact us</a>
                </div>
                <div class="navbar-nav ms-auto">
                    <a href="index.php" class="nav-item nav-link btn btn-danger">Logout</a>
                </div>
            </div>
        </div>
    </nav>
    </div>
    <div id="home">
      <h1>Welcome To Kenya National Worldskills Hotel</h1>
    </div>
     <div id="room">
      <h1>OUR WORLD SKILLS ROOMS</h1>
      <div class="room-cont">
                  <?php
             $sql = "SELECT * FROM rooms";
             $res = mysqli_query($conn, $sql);
             if(mysqli_num_rows($res) > 0){
              while($row=mysqli_fetch_assoc($res)){
                ?>
        <div class="room-box">

               <img src="uploads/<?= $row['img'] ?>" alt="" />
               <div class="info">
                  <h3><?= $row['type'] ?></h3>
                  <a href="book.php?id=<?= $row['id'] ?>?roomno=<?= $row['id'] ?>"
                  ><button class="btn btn-success">Book</button></a>
               </div>
        </div>
                <?php

              }
             }
          ?>
      </div>
    </div>
      <div id="facility">
      <h1>WORLD SKILLS FACILITIES</h1>
      <div class="facility-cont">
        <div class="facility-box a">
            <h3>Swimming pool</h3>
        </div>
        <div class="facility-box b">
            <h3>Spa</h3>
        </div>
        <div class="facility-box c">
            <h3>24/7 Gym</h3>
        </div>
        <div class="facility-box d">
            <h3>Restarants</h3>
        </div>
      </div>
    </div>
</div>
<footer>
    
</footer>
</body>
</html>