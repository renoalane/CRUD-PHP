<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Form Sewa</title>
</head>

<body>
  <form action="prosesSewa.php" method="POST">
    <label for="">Judul Buku</label>
    <div><input type="text" name="judul" /></div>

    <label for="">Nama Penyewa</label>
    <div><input type="text" name="penyewa" /></div>

    <label for="">Durasi Sewa</label>
    <div><input type="text" name="durasi" /></div>

    <div>
      <input type="submit" name="sewa" value="Sewa Buku" />
    </div>
  </form>
</body>

</html>