<?php
require 'dbconn.php';
session_start();

if(isset($_POST['login'])){
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    if($email == "" || $password == ""){
      echo "
          <script>
            alert('All fields are required!');
            window.location.href = 'index.php';
          </script>

        ";
           
    } else{
      $sql = "SELECT * FROM admins WHERE email = '$email' AND password = '$password'";
    $res = mysqli_query($conn, $sql);
    //print_r($res);
    if(mysqli_num_rows($res) > 0){
        echo "
          <script>
            alert('Login Success!');
            window.location.href = 'adminhome.php';
          </script>

        ";
    } else{
        echo "
          <script>
            alert('Wrong email, username or password!');
            window.location.href = 'adminindex.php';
          </script>

        ";
    }
    }
}
?>