<?php 
// Sebelumnya, kita hubungkan dulu file koneksinya agar variable koneksi bisa digunakan disini
include_once('koneksi.php');
// Nah disini saya membuat variable-variable untuk menampung data-data yang ada di form tadi
// Untuk mengambil datanya kita menggunakan POST

$judul = $_POST['judul'];
$penyewa = $_POST['penyewa'];
$durasi = $_POST['durasi'];

$tanggal_sewa = date('Y-m-d');


// Setelah datanya sudah masuk, disini saya membuat query kedalam database untuk memasukan data-datanya
mysqli_query($koneksi, "INSERT INTO sewa (judul, penyewa, durasi, tanggal_sewa) VALUES ('$judul', '$penyewa', '$durasi', '$tanggal_sewa')");

// Setelah data-data telah berhasil dimasukan kedalam database, kita kembalikan halamannya ke awal
header('location: tabelSewa.php');
?>