<?php
 
include("config.php");
 
// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){
 
    // ambil data dari formulir
  $id = $_POST['id'];
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $nohp = $_POST['no_hp']; 
 
    // buat query
    $sql = "INSERT INTO siswa (nis, nama, alamat, jenis_kelamin, agama, no_hp) VALUE ('$nis','$nama', '$alamat', '$jk', '$agama', '$nohp')";
    $query = mysqli_query($db, $sql);
 
    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: index.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: index.php?status=gagal');
    }
 
 
} else {
    die("Akses dilarang...");
}
 
?>