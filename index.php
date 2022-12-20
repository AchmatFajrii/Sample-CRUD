<!-- Kita hubungkan koneksinya terlebih dahulu -->
<?php
include_once('koneksi.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Penyewaan Buku</title>
</head>

<body>
    <!-- Buat tombol untuk tambah data sewa-->
    <a href="formSewa.php">Tambah Sewa</a>
    <!-- Disini kita membuat table untuk memunculkan data-datanya pada halaman web yang merupakan fungsi read pada CRUD -->
    <table border="1px">
        <tr>
            <td>No</td>
            <td>Judul</td>
            <td>Penyewa</td>
            <td>Tanggal Sewa</td>
            <td>Durasi</td>
            <td>Action</td>
        </tr>

        <!-- Lalu disini kita membuat query untuk membaca data yang ada didalam table sewa di database -->
        <?php
        $query = mysqli_query($koneksi, 'SELECT * FROM sewa');

        $no = 1;
        while ($row = mysqli_fetch_array($query)) {
        
            echo "<tr>";
            echo "<td>$no</td>";
            echo "<td>$row[judul]</td>";
            echo "<td>$row[penyewa]</td>";
            echo "<td>$row[tanggal_sewa]</td>";
            echo "<td>$row[durasi]</td>";
            echo "<td><a href='formEditSewa.php?id=$row[id]'>Edit</a>
                        <a href='prosesHapusSewa.php?id=$row[id]'>Hapus</a></td>";

            $no++;
        }
        ?>
    </table>
</body>

</html>