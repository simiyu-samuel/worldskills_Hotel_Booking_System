<?php
require 'dbconn.php';

if(isset($_POST['book'])){
    $id = $_POST['id'];
    $fname = $_POST['fullname'];
    $email = $_POST['email'];
    $country = $_POST['country'];
    $room = $_POST['no_of_rooms'];
    $phone = $_POST['phone'];
    $bedding = $_POST['bedding'];
    $meal = $_POST['meal'];
    $checkin= $_POST['checkin'];
    $checkout = $_POST['checkout'];
    $roomno = $_POST['roomno'];
    $status = "Not paid";

    $sql = "INSERT INTO bookings (fullname, roomno, email, country, phone,roomType, beddingType,noOfRooms,meal,checkin,checkout,status) VALUES
    ('$fname','$roomno','$email','$country','$phone','$room','$bedding','$room','$meal','$checkin','$checkout','$status')";
    $res =  mysqli_query($conn, $sql);
    if($res){
        echo "
            <script>
               alert('Booking details stored successful!');
               window.location.href = 'mpesaform.php';
            </script>
            ";
    }else{
        echo "
            <script>
               alert('Booking could not be proccessed!');
               window.location.href = 'book.php';
            </script>
            ";
    }
}