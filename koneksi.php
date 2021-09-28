<?php

$server = "reno.si";
$user = "root";
$password = "";
$database = "tokobuku";

$koneksi = mysqli_connect($server, $user, $password, $database) or die("Koneksi gagal");
// $koneksi = mysqli_connect('reno.si', 'root', '', 'tokobuku') or die("Koneksi gagal");
