<?php
include_once('koneksi.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read Sewa</title>
</head>

<body>

    <a href="formSewa.php">Tambah Sewa</a>

    <table border="1px">
        <thead>
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Penyewa</th>
                <th>Tanggal Sewa</th>
                <th>Durasi</th>
                <th>Tanggal Selesai</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php

            $query = mysqli_query($koneksi, "SELECT * FROM sewa");

            $no = 1;
            //Hasil query akan diubah ke array dan disimpan di variabel row
            while ($row = mysqli_fetch_array($query)) {

                $tanggal_selesai = date('Y-m-d', strtotime($row['tanggal_sewa'] . "+ $row[durasi] days")); // petik 2 berpengaruh anying

                echo "<tr>";
                echo "<td>$no</td>";
                echo "<td>$row[judul]</td>";
                echo "<td>$row[penyewa]</td>";
                echo "<td>$row[tanggal_sewa]</td>";
                echo "<td>$row[durasi]</td>";
                echo "<td>$tanggal_selesai</td>";
                echo "<td><a href='formEditSewa.php?id=$row[id]'>Edit</a>
                        <a href='prosesDeleteSewa.php?id=$row[id]'>Delete</a></td>";

                $no++;
            }

            ?>
        </tbody>
    </table>
</body>

</html>