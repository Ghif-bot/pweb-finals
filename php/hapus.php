<?php
 
include("config.php");
 
$id = $_GET['id'];
$query = mysqli_query($connect, "select * from user where id_user = '$id'");
while($fill = mysqli_fetch_assoc($query)){
    $role = $fill['roles']; 
    if($role == 1){
        $delete1 = mysqli_query($connect, "delete from user where id_user = '$id'");
        $delete2 = mysqli_query($connect, "delete from siswa_10 where id = '$id'");
    }
    elseif($role == 3){
         $delete1 = mysqli_query($connect, "delete from user where id_user = '$id'");
          $delete2 = mysqli_query($connect, "delete from ortu where id = '$id'");
    }
    elseif($role == 2){
        $delete1 = mysqli_query($connect, "delete from user where id_user = '$id'");
        $delete2 = mysqli_query($connect, "delete from guru where id = '$id'");
    }

    header("location:../admin-utama.php");
}
 

?>