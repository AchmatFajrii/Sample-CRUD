<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Sewa Buku</title>
</head>
<body>
<!-- Disini saya membuat form untuk memasukan data yang merupakan fungsi create pada CRUD, lalu datanya akan diproses pada file prosesSewa.php -->
    <form action="prosesSewa.php" method="post">
        <label>Judul Buku</label>
        <div><input type="text" name="judul"></div>
        <label>Penyewa</label>
        <div><input type="text" name="penyewa"></div>
        <label>Durasi Sewa</label>
        <div><input type="text" name="durasi"></div>
        <div>
            <input type="submit" name="sewa" value="Sewa Buku">
        </div>
    </form>

    <!-- saya tidak membuat input untuk tanggal sewanya karena ini bisa saja terjadi kecurangan oleh admin, jadi nanti saya akan atur tanggalnya otomatis -->
</body>
</html>