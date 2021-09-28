<?php

include_once('koneksi.php');

$id = $_GET['id'];

$query = mysqli_query($koneksi, "SELECT * FROM sewa WHERE id='$id'");
$row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Form Edit Sewa</title>
</head>

<body>
    <form action="prosesEditSewa.php?id=<?php echo $id; ?>" method="POST">
        <label for="">Judul Buku</label>
        <!-- name harus sama kayak column tabel phpmyAdmin -->
        <div><input type="text" name="judul" value="<?php echo $row['judul']; ?>" /></div>

        <label for="">Nama Penyewa</label>
        <div><input type="text" name="penyewa" value="<?php echo $row['penyewa']; ?>" /></div>

        <label for="">Durasi Sewa</label>
        <div><input type="text" name="durasi" value="<?php echo $row['durasi']; ?>" /></div>

        <div>
            <input type="submit" name="sewa" value="Sewa Buku" />
        </div>
    </form>
</body>

</html>