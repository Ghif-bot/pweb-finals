<?php include('./php/config.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Portfolio Details - Ninestars Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link href="./admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="./admin/css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Favicons -->
  <link href="./Ninestars/assets/img/favicon.png" rel="icon">
  <link href="./Ninestars/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="./Ninestars/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="./Ninestars/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="./Ninestars/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="./Ninestars/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="./Ninestars/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="./Ninestars/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="./Ninestars/assets/css/style.css" rel="stylesheet">
  <!-- =======================================================
  * Template Name: Ninestars - v4.7.0
  * Template URL: https://bootstrapmade.comNinestars-free-bootstrap-3-theme-for-creative/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body id="page-top">
    <?php 
        session_start();
        if(!isset($_SESSION['id'])){
            header("location:./index.php");
        }
        $id = $_SESSION['id'];
        $query = mysqli_query($connect, "select * from user where id_user = '$id'");
        $fill = mysqli_fetch_array($query);
    
    ?>
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include ('./fragment/sidebar.php'); ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    
                    <div class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 align-items-center justify-content-center mb-4">
                           <h1 class="h3 mb-0 text-gray-800">Daftar Guru</h1>
                       </div>
                       <!-- Sidebar Toggle (Topbar) -->
                       <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                           <i class="fa fa-bars"></i>
                       </button>
   
                       <!-- Topbar Search -->
                       <form
                           class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                           <div class="input-group">
                               <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                   aria-label="Search" aria-describedby="basic-addon2">
                               <div class="input-group-append">
                                   <button class="btn btn-primary" type="button">
                                       <i class="fas fa-search fa-sm"></i>
                                   </button>
                               </div>
                           </div>
                       </form>
   
                       <!-- Topbar Navbar -->
                       <ul class="navbar-nav ml-auto">
                           
   
                           <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                           <li class="nav-item dropdown no-arrow d-sm-none">
   
                       
                               <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                   <i class="fas fa-search fa-fw"></i>
                               </a>
                               <!-- Dropdown - Messages -->
                               <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                   aria-labelledby="searchDropdown">
                                   <form class="form-inline mr-auto w-100 navbar-search">
                                       <div class="input-group">
                                           <input type="text" class="form-control bg-light border-0 small"
                                               placeholder="Search for..." aria-label="Search"
                                               aria-describedby="basic-addon2">
                                           <div class="input-group-append">
                                               <button class="btn btn-primary" type="button">
                                                   <i class="fas fa-search fa-sm"></i>
                                               </button>
                                           </div>
                                       </div>
                                   </form>
                               </div>
                           </li>
   
                           <!-- Nav Item - Alerts -->
                           <li class="nav-item dropdown no-arrow mx-1">
                               <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                   <i class="fas fa-bell fa-fw"></i>
                                   <!-- Counter - Alerts -->
                                   <span class="badge badge-danger badge-counter">3+</span>
                               </a>
                               <!-- Dropdown - Alerts -->
                               <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                   aria-labelledby="alertsDropdown">
                                   <h6 class="dropdown-header">
                                       Alerts Center
                                   </h6>
                                   <a class="dropdown-item d-flex align-items-center" href="#">
                                       <div class="mr-3">
                                           <div class="icon-circle bg-primary">
                                               <i class="fas fa-file-alt text-white"></i>
                                           </div>
                                       </div>
                                       <div>
                                           <div class="small text-gray-500">December 12, 2019</div>
                                           <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                       </div>
                                   </a>
                                   <a class="dropdown-item d-flex align-items-center" href="#">
                                       <div class="mr-3">
                                           <div class="icon-circle bg-success">
                                               <i class="fas fa-donate text-white"></i>
                                           </div>
                                       </div>
                                       <div>
                                           <div class="small text-gray-500">December 7, 2019</div>
                                           $290.29 has been deposited into your account!
                                       </div>
                                   </a>
                                   <a class="dropdown-item d-flex align-items-center" href="#">
                                       <div class="mr-3">
                                           <div class="icon-circle bg-warning">
                                               <i class="fas fa-exclamation-triangle text-white"></i>
                                           </div>
                                       </div>
                                       <div>
                                           <div class="small text-gray-500">December 2, 2019</div>
                                           Spending Alert: We've noticed unusually high spending for your account.
                                       </div>
                                   </a>
                                   <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                               </div>
                           </li>
                            <div class="topbar-divider d-none d-sm-block"></div>
                             <div class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                   <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $fill['name']?></span>
                                   <img class="img-profile rounded-circle"
                                       src="img/undraw_profile.svg">
                               </a>
                           </div>
   
   
                           <!-- Nav Item - User Information -->
                             
   
                       </ul>
   
                   </nav>
                <div class="container-fluid">
                     <div class="card shadow mb-4">
                         <br>
                          <div class="d-sm-flex align-items-center justify-content-between mb-4 pr-3 px-3">
                        <h1 class="h3 mb-0 text-gray-800 ">List Guru</h1>
                        <a href="form-tambah-guru.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i>Tambah Guru</a>
                    </div>
                                 
                            <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-no-border" id="dataTable" width="100%" cellspacing="0">
                                    <thead class="thead-dark">
                                         <tr>
                                            <th scope="col">NIP</th>     
                                            <th scope="col">Nama</th>                                     
                                            <th scope="col">Alamat</th>
                                            <th scope="col">Agama</th>
                                            <th scope ="col">Jenis Kelamin</th>
                                            <th scope="col">Mata Pelajaran</th>
                                            <th scope="col">No HP</th>
                                            <th scope="col">Tindakan</th>
                                        </tr>
                                    </thead> 
                                     <tbody>
                                         <?php
                                            $sql = "SELECT * FROM guru"; 
                                            $query = mysqli_query($connect, $sql);
                                            while($guru = mysqli_fetch_array($query)){
                                         echo "<tr>";
                                        echo "<td>".$guru['nip']."</td>";
                                         echo "<td>".$guru['nama']."</td>";                                   
                                        echo "<td>".$guru['alamat']."</td>";
                                        echo "<td>".$siswa['jenis_kelamin']."</td>";
                                        echo "<td>".$siswa['agama']."</td>";
                                        echo "<td>".$siswa['mata_pelajaran']."</td>";
                                        echo "<td>".$guru['no_hp']."</td>";
                                        echo "<td>";
                                        echo "<a href='form-edit-guru.php?id=".$guru['id']."'>Edit</a> | ";
                                        echo "<a href='./php/hapus.php?id=".$guru['id']."'>Hapus</a>";
                                        echo "</td>";
                                        echo "</tr>";
                                        }
                                        ?>
                                    </tbody>                               
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- End of Topbar -->

                <!-- Begin Page Content --> 
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

        </div>
        
            
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="admin/vendor/jquery/jquery.min.js"></script>
    <script src="admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="admin/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="admin/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="admin/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="admin/js/demo/chart-area-demo.js"></script>
    <script src="admin/js/demo/chart-pie-demo.js"></script>

</body>

</html>