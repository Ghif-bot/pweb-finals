<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Register</title>

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
                            <form class="user"  method="post" action="./php/check_siswa.php">
                            <div class="form-group">
                                    <input type="number" class="form-control form-control-user" id="exampleInputEmail" name="nis"
                                        placeholder="NIS">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="exampleInputEmail" name="alamat"
                                        placeholder="Alamat">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <select name="agama" class="form-control form-control-user" id="agama">
                                            <option value="" disabled selected>Agama: </option>
                                            <option value="islam">Islam</option>
                                            <option value ="kristen">Kristen</option>
                                            <option value ="katolik">Katolik</option>
                                            <option value ="hindu">Hindu</option>
                                            <option value= "budha">Budha</option>
                                            <option value ="kongkuchu">Konghuchu</option>
                                        </select> 
                                    </div>
                                    <div class="col-sm-6">
                                        <select name="jk" class="form-control form-control-user" id="jk">
                                            <option value="" disabled selected>Jenis Kelamin: </option>
                                            <option value="laki-laki">Laki - Laki</option>
                                            <option value="perempuan">Perempuan</option>
                                        </select> 
                                    </div>
                                </div>
                                <div class="form-group">
                                    
                                </div>
                                <div class="form-group">
                                    <input type="number" class="form-control form-control-user" id="exampleInputEmail" name="nohape"
                                        placeholder="Nomor Hape">
                                </div>
                                 <div class="form-group">
                                    <select name="kelas" class="form-control form-control-user" id="kelas">
                                        <option value="" disabled selected>Kelas: </option>
                                        <option value="10">10</option>
                                        <option value ="11">11</option>
                                        <option value ="12">12</option>
                                    </select> 
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Masuk Daftar Siswa
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