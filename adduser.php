<?php
require 'dbconn.php';

if(isset($_POST['signup'])){
    $name = mysqli_real_escape_string($conn, $_POST['fullname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $sql ="INSERT INTO users (username, email, password) VALUES ('$name', '$email', '$password')";
    $res =mysqli_query($conn, $sql);
    if($res){
         echo "
          <script>
            alert('User account registered successfully!');
            window.location.href = 'index.php';
          </script>

        ";
    } else{
         echo "
          <script>
            alert('User could not be registered!');
            window.location.href = 'signup.php';
          </script>

        ";
    }
}