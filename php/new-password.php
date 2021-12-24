<?php
    session_start();
    include 'config.php';
if (isset($_POST['change'])) {

$email = $_POST['email'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];
$code = 0;

if ($password != $cpassword) {
    $_SESSION['msg'] = "<strong>Password</strong> doesn't match";
    header("location:../new-password.php");

} else {
    $sql = "UPDATE user SET Password ='$password' WHERE email = '$email'";

    $query = mysqli_query($con, $sql);
    header("location:../login.php");
}
}
?>
