<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

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

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block">
                                <img src="./img/google.jpg" width="500" height="520">
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center success">
                                         <div class="p text-gray-900 mb-5">We've sent a password reset opt to your <br> email - <?php echo $_SESSION['email']; ?></div>
                                          <!-- Error Msg -->
                                          <?php if (isset($_SESSION['msg'])) {  ?>

                                        <div class="err" id="closeMsg">
                                        <div><?php echo $_SESSION['msg']; ?></div>
                                               <i class="fas fa-times"></i>
                                         </div>
                                          <?php
                                        unset($_SESSION['msg']);
                                       }
                                     ?>
                                    </div>
                                    <form class="user" action="./php/verification.php">
                                        <div class="form-group">
                                            <input type="code" name ="code" class="form-control form-control-user"
                                                id="exampleInpuCode" placeholder="Input Code" required>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block" name="verification">
                                    New Password
                                        </button>
                                    </form>
                                </div>
                            </div>
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
    <script src="./adminvendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="./admin/js/sb-admin-2.min.js"></script>

</body>

</html>