<?php
require 'dbconn.php';

if(isset($_POST['add-staff'])){
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $sql = "INSERT INTO users (username, email) VALUES ('$name', '$email')";
    $res = mysqli_query($conn, $sql);

    if($res){
            echo "
            <script>
              alert('Staff added successfully!');
              window.location.href =  'adminstaffs.php';
            </script>";
        } else{
            echo "
            <script>
              alert('Staff couldn't be added!');
              window.location.href =  'adminstaffs.php';
            </script>";
        }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add room</title>
    <link rel="stylesheet" href="style.css"> 
   <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">
   <script src="bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
   <style>
      form{
        width: 60%;
        margin-left: 20%;
      }
   </style>
</head>
<body>
    <form method="POST" class="form-group mt-5"">
        <a href="admindashboard.php" class="btn btn-danger">BACK</a>
        <h2 class="mt-4">ADD STAFF</h2>
        <div class="fomr-control">
            <label>USERNAME:</label>
            <input type="text" name="name" required class="form-control"/>
        </div>
        <div class="form-control">
            <label>EMAIL:</label>
            <input type="text" name="email" required class="form-control"/>
        </div>

        <button type="submit" class="btn btn-success mt-4" name="add-staff">ADD</button>
    </form>
</body>
</html>