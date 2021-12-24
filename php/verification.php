<?php
    session_start();
    include 'config.php';
    if (isset($_POST['verification'])) {

    $code = $_POST['code'];

    $sql = "SELECT * FROM user WHERE code='$code'";
    $query = mysqli_query($connect, $sql);
    $count = mysqli_num_rows($query);

    if ($count > 0) {
        
        header("location:../php/new-password.php");
    } else {
        $_SESSION['msg'] = "Invalid Code";
        header("location:../php/code.php");
    }
}
?>