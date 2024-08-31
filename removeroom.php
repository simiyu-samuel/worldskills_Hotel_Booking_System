<?php
require 'dbconn.php';

if(isset($_GET['id'])){
    $roomid = $_GET['id'];
    $sql = "DELETE FROM rooms WHERE id = '$roomid'";
    $res = mysqli_query($conn, $sql);
    if($res){
         echo "
          <script>
            alert('Room deleted successfully!');
            window.location.href = 'adminrooms.php';
          </script>

        ";
    } else{
         echo "
          <script>
            alert('Booking could not deleted!');
            window.location.href = 'adminrooms.php';
          </script>

        ";
    }
}