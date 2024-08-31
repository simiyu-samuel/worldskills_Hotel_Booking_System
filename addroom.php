<?php
require 'dbconn.php';

if(isset($_POST['add-room'])){
    $roomType = mysqli_real_escape_string($conn, $_POST['type']);
    $filename = $_FILES['image']['name'];
    $tmpname = $_FILES['image']['tmp_name'];
    $folder = "uploads/".$filename;

    $sql = "INSERT INTO rooms (type, img) VALUES ('$roomType', '$filename')";
    $res = mysqli_query($conn, $sql);

    if($res){
        if(move_uploaded_file($tmpname, $folder)){
            echo "
            <script>
              alert('Room added successfully!');
              window.location.href =  'addroom.php';
            </script>";
        } else{
            echo "
            <script>
              alert('Room couldn't be added!');
              window.location.href =  'addroom.php';
            </script>";
        }
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
    <form method="POST" class="form-group mt-5" enctype="multipart/form-data">
        <a href="admindashboard.php" class="btn btn-danger">BACK</a>
        <h2 class="mt-4">ADD ROOM</h2>
        <div class="fomr-control">
            <label>Room type:</label>
            <input type="text" name="type" required class="form-control"/>
        </div>
        <div class="form-control">
            <label>Image:</label>
            <input type="file" name="image" required class="form-control"/>
        </div>

        <button type="submit" class="btn btn-success mt-4" name="add-room">ADD</button>
    </form>
</body>
</html>