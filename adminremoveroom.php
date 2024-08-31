<?php
require 'dbconn.php';

if(isset($_GET['id'])){
    $bookingid = $_GET['id'];
    $sql = "DELETE FROM bookings WHERE id = '$bookingid'";
    $res = mysqli_query($conn, $sql);
    if($res){
         echo "
          <script>
            alert('Room Booking deleted successfully!');
            window.location.href = 'adminroombooking.php';
          </script>

        ";
    } else{
         echo "
          <script>
            alert('Room Booking could not be deleted!');
            window.location.href = 'adminroombooking.php';
          </script>

        ";
    }
}