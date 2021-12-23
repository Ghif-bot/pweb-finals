<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/utama">
                <div class="sidebar-brand-icon">
                    <img src="./img/logo(2).png" width="50" height="50">
                </div>
                <div class="sidebar-brand-text mx-3">Admin</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="./admin-utama.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Data
            </div>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Siswa</span>
                </a>
                   <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Siswa:</h6>
                        <a class="collapse-item" href="siswa-10.php">Siswa Kelas 10</a>
                        <a class="collapse-item" href="siswa-11.php">Siswa Kelas 11</a>
                        <a class="collapse-item" href="siswa-12.php">Siswa Kelas 12</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="./admin-tambah.php">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Orang Tua</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./admin-tambah.php">
                    <i class="fas fa-fw fa-user"></i>
                <span>Guru</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./admin-tambah.php">
                    <i class="fas fa-fw fa-coins"></i>
                    <span>Pembayaran</span></a>
            </li>
             <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">
            <li class="nav-item">
                <a class="nav-link" type="button" href="./php/check_logout.php">
                    <i class="fas fa-sign-out-alt"></i>
                    <span>Log Out</span></a>
            </li>  

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>