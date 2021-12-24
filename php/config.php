<?php
 
 $server = "localhost";
 $user = "root";
 $password = "";
 $nama_database = "siswa1";
  
 $connect = mysqli_connect($server, $user, $password, $nama_database);
  
 if( !$connect ){
     die("Gagal terhubung dengan database: " . mysqli_connect_error());
 }
 ?>