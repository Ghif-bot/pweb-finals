<?php
    session_start();
    include 'config.php';

    if (isset($_POST['checkEmail'])) {

    $email = $_POST['email'];

    $sql = "SELECT * FROM user where email='$email' ";
    $query = mysqli_query($connect, $sql);
    $count = mysqli_num_rows ($query);

   // if($count > 0 ) {
        if($query){
        // kalau berhasil alihkan ke halaman list-siswa.php
        header("location: ../new-password.php?pesan=berhasil");
        //}
        } else {
        // kalau gagal tampilkan pesan
      die("Gagal menyimpan perubahan...");
        }
    
  //  }
 

    

    // if ($count > 0){
    //     $code = rand (11111, 99999);
    //     $sql1 ="UPDATE user SET code ='$code' where email ='$email'";
    //     $query1=mysqli_query($connect, $sql1);

    //     if ($query1) {
    //         $subject = "Password Reset Code";
    //         $message = "Your password reset code is $code";
    //         $sender = "From:vishwanathvishwabai@gmail.com";

    //         if (mail($email,$subject,$message,$sender)) {
    //             $_SESSION['email'] = $email;
    //             header("location: ../code.php");
    //         }else {
    //             $_SESSION['msg'] = "Failed while sending code!";
    //             header("location:../lupa-password.php");
    //         }
            
    //     }else {
    //         $_SESSION['msg'] = "Something went wrong!";
    //         header("location:../lupa-password.php");

    }
    else {
        die("This email address does not exist!");
    }
?>