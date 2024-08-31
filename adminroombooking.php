<?php
require 'dbconn.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
    <link rel="stylesheet" href="style.css"> 
   <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">
   <script src="bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="m-4">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <img src="img/worldskills.jpg" class="logo" alt="">
            <a href="admindashboard.php" class="navbar-brand">DASHBOARD ADMIN</a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav">
                    <a href="adminroombooking.php" class="nav-item nav-link active">ROOM BOOKING</a>
                    <a href="adminpayment.php" class="nav-item nav-link">PAYMENT</a>
                    <a href="adminrooms.php" class="nav-item nav-link">ROOMS</a>
                    <a href="adminstaffs.php" class="nav-item nav-link">STAFFS</a>
                </div>
                <div class="navbar-nav ms-auto">
                    <a href="home.php" class="nav-item nav-link btn btn-danger">View website</a>
                </div>
            </div>
        </div>
    </nav>
    </div>


    <div id="rooms">
        <div class="container">
  <h2>LIST OF BOOKED ROOMS</h2>        
  <table border="2" class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>FULLNAME</th>
        <th>EMAIL</th>
        <th>COUNTRY</th>
        <th>PHONE NO</th>
        <th>NO OF ROOMS</th>
        <th>ROOM TYPE</th>
        <th>BEDDING TYPE</th>
        <th>MEAL</th>
        <th>CHECKIN</th>
        <th>CHECKOUT</th>
        <th>ACTION</th>
      </tr>
    </thead>
    <tbody>
                <?php
        $sql = "SELECT * FROM bookings";
        $res = mysqli_query($conn, $sql);
        if(mysqli_num_rows($res) > 0){
            while($row = mysqli_fetch_assoc($res)){
                ?>
      <tr>
                <td><?= $row['id'] ?></td>
                <td><?= $row['fullname'] ?></td>
                <td><?= $row['email'] ?></td>
                <td><?= $row['country'] ?></td>
                <td><?= $row['phone'] ?></td>
                <td><?= $row['noOfRooms'] ?></td>
                <td><?= $row['roomType'] ?></td>
                <td><?= $row['beddingType'] ?></td>
                <td><?= $row['meal'] ?></td>
                <td><?= $row['checkin'] ?></td>
                <td><?= $row['checkout'] ?></td>
                <td style="display:flex; align-items:center; justify-content:space-around;">
                    <a href="admineditroom.php?id=<?= $row['id'] ?>" class="btn btn-info">EDIT</a>
                    <a href="adminremoveroom.php?id=<?= $row['id'] ?>" class="btn btn-danger">REMOVE</a>
                </td>
                <?php
            }
        }
        ?>
        
      </tr>
    </tbody>
  </table>
</div>

    </div>
    
</body>
</html>