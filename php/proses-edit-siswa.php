<?php
 
include("config.php");

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $nohp = $_POST['no_hp'];
    $kelas = $_POST['kelas'];
    
    $sql = "UPDATE siswa_10 SET nama='$nama', alamat='$alamat', jenis_kelamin='$jk', agama='$agama', no_hp='$nohp',kelas=$kelas WHERE id=$id";
    $query = mysqli_query($connect, $sql);

    $sql1 = "UPDATE user set name= '$nama' where id_user = '$id'";
    $query1 = mysqli_query($connect, $sql1);

     header("location: ../admin-utama.php");
?>