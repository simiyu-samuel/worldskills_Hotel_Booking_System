<?php
require 'dbconn.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "DELETE FROM users WHERE id = '$id'";
    $res = mysqli_query($conn, $sql);
    if($res){
         echo "
          <script>
            alert('User removed successfully!');
            window.location.href = 'adminstaffs.php';
          </script>

        ";
    } else{
         echo "
          <script>
            alert('User could not be removed!');
            window.location.href = 'adminstaffs.php';
          </script>

        ";
    }
}