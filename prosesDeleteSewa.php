<?php

include_once('koneksi.php');

$id = $_GET['id'];

// Delete
mysqli_query($koneksi, "DELETE FROM sewa WHERE id = '$id'");

header("location: index.php");
