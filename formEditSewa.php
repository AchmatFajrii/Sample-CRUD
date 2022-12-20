<?php
// Kita koneksikan lagi
include_once('koneksi.php');
// Ambil id datanya
$id = $_GET['id'];

// Ambil semua datanya
$query = mysqli_query($koneksi, "SELECT * FROM sewa WHERE id = '$id'");
$row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Edit Sewa</title>
    <link rel="stylesheet" href="table.css">
</head>

<body>
    <nav>
        <div class="container">
            <h1>CRUD PHP MYSQL</h1>
        </div>
    </nav>
    <div class="container">
        <h1>Edit data</h1>
        <!-- Disini saya membuat form untuk mengupdate data yang merupakan fungsi update pada CRUD dan menambahkan valuenya -->
        <form action="prosesEditSewa.php?id=<?php echo $id; ?>" method="post">
            <label>Judul Buku</label>
            <div><input type="text" name="judul" value="<?php echo $row['judul']; ?>"></div>
            <label>Penyewa</label>
            <div><input type="text" name="penyewa" value="<?php echo $row['penyewa']; ?>"></div>
            <label>Durasi Sewa</label>
            <div><input type="text" name="durasi" value="<?php echo $row['durasi']; ?>"></div>
            <div>
                <input type="submit" name="sewa" value="Update data">
            </div>
        </form>
    </div>

</body>

</html>