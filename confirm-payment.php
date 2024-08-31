<?php
require 'dbconn.php';
if(isset($_POST['confirm'])){
  $id = $_POST['id'];
  $sql = "UPDATE bookings SET status = 'completed' WHERE id = '$id'";
  $res = mysqli_query($conn, $sql);

  //if(mysqli_num_rows($res) > 0){
    echo "
          <script>
            alert('Success confirmed!');
            window.location.href = 'book.php';
          </script>

        ";
}   
//     } else{
// echo "
//           <script>
//             alert('Payment not made!');
//             window.location.href = 'mpesaform.php';
//           </script>

//         ";
//     }
// }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirm payment</title>
    <link rel="stylesheet" href="style.css"> 
   <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">
   <script src="bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
   <style>
    form{
      width: 40%;
      margin-left: 30%;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 3px 5px 3px grey;
      background-color: #ddd;
      margin-top: 50px;
      text-align: center;
    }
    </style>
</head>
<body>

<form action="" method="POST">
  <?php
  $id = "4";
  ?>
  <h1>Awesome, Confirm your payment for status update</h1>
  <input type="hidden" value="<?= $id?>" name="id">
  <button type="submit" class="btn btn-success" name="confirm">CONFIRM PAYMENT</button>
</form>
</body>
</html>