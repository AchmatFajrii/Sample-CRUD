<?php 

// Untuk mengkoneksikan database, disini saya membuat datanya terlebih dahulu yang saya tampung dalam sebuah variable
$server = "localhost";
$user = "root";
$password = "";
$database = "tokobuku";

// kita koneksikan menggunakan perintah mysqli
$koneksi = mysqli_connect($server, $user, $password, $database) OR DIE ("Koneksi gagal");


?>