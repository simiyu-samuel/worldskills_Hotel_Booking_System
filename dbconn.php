<?php

$severname = "localhost";
$username = "root";
$password = "";
$db_name = "knwsh";

$conn = mysqli_connect($severname,$username,$password,$db_name, 3306);
if(!$conn){
    echo "Could not connect to database" .mysqli_connect_error();
}