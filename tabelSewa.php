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
    <style>
        *,
        html,
        body {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .container{
            width: 1400px;
            margin: 0 auto;
        }
        .datatable{
            display: flex;
        }
        .table{
            margin-left: 20px;
        }
        nav {
            width: 100%;
            height: 60px;
            color: white;
            background-color:#222222;
            display: flex;
            align-items: center;
        }
    </style>
</head>

<body>
    <nav>
        <div class="container">
            <h1>CRUD PHP MYSQL</h1>
        </div>
    </nav>
    <!-- Buat tombol untuk tambah data sewa-->
    <div class="container">
        <div class="datatable">
            <h1>Data Penyewaan Buku</h1>
            <div class="table">
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
            </div>
        </div>
    </div>
</body>

</html>