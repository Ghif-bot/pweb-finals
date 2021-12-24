<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>DAFTAR ORTU</title>

    <!-- Custom fonts for this template-->
    <link href="./admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="./admin/css/sb-admin-2.min.css" rel="stylesheet">
    <style>
      .gradient {
        background: linear-gradient(90deg, #F6E5A0 70%, #FED99B 100%);
      }
    </style>
</head>

<body class="leading-normal tracking-normal text-white gradient" style="font-family: 'Source Sans Pro', sans-serif;">
    <?php 
        include './php/config.php';
        session_start();
        if(!isset($_SESSION['id'])){
            header("location:./index.php");
        }
        $id = $_SESSION['id'];
        $query = mysqli_query($connect, "select * from user where id_user = '$id'");
        $fill = mysqli_fetch_array($query);
    ?>
    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-1">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block">
                        <img src="./img/google.jpg" width="500" height="650">
                    </div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <img src="./img/logo(2).png" width="100" height="100">
                                        <br>
                                        <br>
                            </div>
                            <form class="user"  method="post" action="./php/check_wali.php">
                                <div class="form-group">
                                    <input type="hidden" class="form-control form-control-user" id="exampleInputEmail" name="id"
                                        placeholder="id" value="<?php echo $id; ?>">
                                </div>
                                <div class="form-group">
                                    <input type="hidden" class="form-control form-control-user" id="exampleInputEmail" name="name"
                                        placeholder="nama" value="<?php echo $fill['name']; ?>" require>
                                </div>
                                <div class="form-group">
                                    <select class="form-control form-control-user" name="id_siswa" list="category_name" id="category_name">
                                        <?php
                                        $querry = mysqli_query($connect, "select * from siswa_10");

                                        while($list = mysqli_fetch_array($querry)){
                                            ?>
                                            <option value="<?= $list['id'];?>"><?=$list['nama']; ?></option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                    </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Masuk Daftar Orang Tua
                                </button>
                            </form>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="./admin/vendor/jquery/jquery.min.js"></script>
    <script src="./admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="./admin/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="./admin/js/sb-admin-2.min.js"></script>

</body>

</html>