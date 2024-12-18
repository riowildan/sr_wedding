<?php

$hostName = "localhost";
$userName = "root";
$password = "";
$dbName = "wedding";

$koneksi = mysqli_connect($hostName, $userName, $password, $dbName);

if (!$koneksi){
    echo "koneksi Gagal";
}