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
    $sql = "INSERT INTO siswa_10 (nis, nama, alamat, jenis_kelamin, agama, no_hp) VALUE ('$nis','$nama', '$alamat', '$jk', '$agama', '$nohp')";
    $query = mysqli_query($connect, $sql);
 
    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
           header("location:../admin-utama.php?pesan=berhasil");
     
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
         header("location:../admin-utama.php?pesan=gagal");
    }
 
 
} else {
    die("Akses dilarang...");
}
 
?>