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
    $kelas = $_POST['kelas']; 
 
    // buat query
    $sql = "INSERT INTO siswa_10 (nis, nama, alamat, jenis_kelamin, agama, no_hp,kelas) VALUE ('$nis','$nama', '$alamat', '$jk', '$agama', '$nohp','$kelas')";
    $query = mysqli_query($connect, $sql);
 
    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header("location: ../admin-utama.php");
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        die("Gagal menyimpan perubahan...");
    }
 
 
} else {
    die("Akses dilarang...");
}

if(isset($_POST['daftar-ortu'])){
 
    // ambil data dari formulir
  $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $nohp = $_POST['no_hp'];
 
    // buat query
    $sql = "INSERT INTO orangtua (nama, alamat, no_hp) VALUE ('$nama', '$alamat', '$nohp')";
    $query = mysqli_query($connect, $sql);
 
    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header("location: ../admin-orangtua.php");
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        die("Gagal menyimpan perubahan...");
    }
 
 
} else {
    die("Akses dilarang...");
}

if(isset($_POST['daftar-guru'])){
 
    // ambil data dari formulir
  $id = $_POST['id'];
    $nis = $_POST['nip'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $mapel = $_POST['mapel']; 
    $nohp = $_POST['no_hp'];

 
    // buat query
    $sql = "INSERT INTO guru (nip, nama, alamat, jenis_kelamin, agama,mapel,no_hp) VALUE ('$nis','$nama', '$alamat', '$jk', '$agama', '$mapel','$nohp')";
    $query = mysqli_query($connect, $sql);
 
    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header("location: ../admin-guru.php");
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        die("Gagal menyimpan perubahan...");
    }
 
 
} else {
    die("Akses dilarang...");
}
 
 
?>