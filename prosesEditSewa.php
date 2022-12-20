<?php
// Koneksikan lagi
include_once('koneksi.php');
// Nah disini saya membuat variable-variable untuk menampung data-data yang ada di form tadi
// Untuk mengambil datanya kita menggunakan POST

// Lalu kita ambil id-nya
$id = $_GET['id'];

$judul = $_POST['judul'];
$penyewa = $_POST['penyewa'];
$durasi = $_POST['durasi'];

$tanggal_sewa = date('Y-m-d');


// Disini kita melakukan query Untuk mengedit atau mengupdate datanya
mysqli_query($koneksi, "UPDATE sewa SET judul = '$judul', penyewa = '$penyewa', durasi = '$durasi' WHERE id = '$id'");

// Setelah data-data telah berhasil diupdate kedalam database, kita kembalikan halamannya ke awal
header('location: tabelSewa.php');
