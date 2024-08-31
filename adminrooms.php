<?php
require 'dbconn.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin rooms</title>
        <link rel="stylesheet" href="style.css"> 
   <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">
   <script src="bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
</head>
<body>
        <div class="m-2">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <img src="img/worldskills.jpg" class="logo" alt="">
            <a href="admindashboard.php" class="navbar-brand">DASHBOARD ADMIN</a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav">
                    <a href="adminroombooking.php" class="nav-item nav-link ">ROOM BOOKING</a>
                    <a href="adminpayment.php" class="nav-item nav-link">PAYMENT</a>
                    <a href="adminrooms.php" class="nav-item nav-link active">ROOMS</a>
                    <a href="adminstaffs.php" class="nav-item nav-link">STAFFS</a>
                </div>
                <div class="navbar-nav ms-auto">
                    <a href="home.php" class="nav-item nav-link btn btn-danger">View website</a>
                </div>
            </div>
        </div>
    </nav>
    </div>
    
<div class="container mt-5">
  <h2>LIST OF ROOMS</h2>  
      <a href="addroom.php" class="btn btn-primary mt-4">ADD ROOM</a>         
  <table border="2" class="table table-striped mt-4">
    <thead>
      <tr>
        <th>ROOM NO</th>
        <th>ROOM TYPE</th>
        <th>ACTION</th>
      </tr>
    </thead>
    <tbody>
                <?php
        $sql = "SELECT * FROM rooms";
        $res = mysqli_query($conn, $sql);
        if(mysqli_num_rows($res) > 0){
            while($row = mysqli_fetch_assoc($res)){
                ?>
      <tr>
                <td><?= $row['id'] ?></td>
                <td><?= $row['type'] ?></td>
                <td>
                    <a href="removeroom.php?id=<?= $row['id'] ?>" class="btn btn-danger">REMOVE</a>
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