<?php
$connect = mysqli_connect("localhost", "root", "", "siswa");

if(mysqli_connect_error()) echo "Koneksi Gagal : " . mysqli_connect_error();
?>