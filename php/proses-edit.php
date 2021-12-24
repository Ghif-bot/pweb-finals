<?php
 
include("config.php");
 
// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['simpan'])){
 
    // ambil data dari formulir
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $nohp = $_POST['no_hp'];
    $kelas = $_POST['kelas'];
    // buat query update
    $sql = "UPDATE siswa_10 SET nama='$nama', alamat='$alamat', jenis_kelamin='$jk', agama='$agama', no_hp='$nohp',kelas=$kelas WHERE id=$id";
    $query = mysqli_query($connect, $sql);

    
    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman list-siswa.php
        header("location: ../admin-utama.php");
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }
 
 
} else {
    die("Akses dilarang...");
}

if(isset($_POST['simpan_ortu'])){
 
    // ambil data dari formulir
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat =$_POST['id_siswa'];
    ;
    // buat query update
    $sql = "UPDATE ortu SET nama='$nama', nama_ortu='$nama_ortu',alamat='$alamat', no_hp='$nohp' WHERE id=$id";
    $query = mysqli_query($connect, $sql);

    
    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman list-siswa.php
        header("location: ../admin-orangtua.php");
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }
 
 
} else {
    die("Akses dilarang...");
}

if(isset($_POST['simpan_guru'])){
 
    // ambil data dari formulir
     $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $mapel = $_POST['mapel']; 
    $nohp = $_POST['no_hp'];

    ;
    // buat query update
    $sql = "UPDATE guru SET nama='$nama', alamat='$alamat', jenis_kelamin='$jk', agama='$agama', mapel='$mapel', no_hp='$nohp' WHERE id=$id";
    $query = mysqli_query($connect, $sql);

    
    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman list-siswa.php
        header("location: ../admin-guru.php");
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }
 
 
} else {
    die("Akses dilarang...");
}
 
 
?>