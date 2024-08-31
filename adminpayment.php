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
                    <a href="adminroombooking.php" class="nav-item nav-link">ROOM BOOKING</a>
                    <a href="adminpayment.php" class="nav-item nav-link active">PAYMENT</a>
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
  <h2>LIST OF PAYMENTS</h2>        
  <table border="2" class="table table-striped">
    <thead>
      <tr>
        <th>PID</th>
        <th>ROOM NO</th>
        <th>TYPE</th>
        <th>ROOM PRICE</th>
        <th>AMOUNT PAID</th>
      </tr>
    </thead>
    <tbody>
                <?php
        $sql = "SELECT * FROM payments";
        $res = mysqli_query($conn, $sql);
        if(mysqli_num_rows($res) > 0){
            while($row = mysqli_fetch_assoc($res)){
                ?>
      <tr>
                <td><?= $row['Pid'] ?></td>
                <td><?= $row['roomno'] ?></td>
                <td><?= $row['type'] ?></td>
                <td><?= $row['roomprice'] ?></td>
                <td><?= $row['amountpaid'] ?></td>
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