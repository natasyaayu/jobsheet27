<?php

$server = "localhost";  //sesuaikan dengan nama server
$user = "root";  //sesuaikan username phpmyadmin
$password = "";  //sesuaikan password phpmyadmin
$database = "db_siswaa";  //sesuaikan nama database
$con = mysqli_connect($server, $user, $password, $database);

if (mysqli_connect_errno()) {
    echo "Gagal terhubung MySQL: " . mysqli_connect_error();
}