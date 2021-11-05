<!-- Sidebar -->
<ul class="navbar-nav bg-white sidebar sidebar-light accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= site_url('dashboard'); ?>">
        <img src="<?= base_url('assets/adm/img/logo_baru.png'); ?>" class="rounded mx-auto d-block" width="180">
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link <?= $sidebar == "course" ? "active" : "" ?>" href="<?= site_url('course'); ?>">
            <i class="fas fa-tachometer-alt"></i>
            <span>Course</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <li class="nav-item active">
        <a class="nav-link <?= $sidebar == "event" ? "active" : "" ?>" href="<?= site_url('event'); ?>">
            <i class="fas fa-align-justify"></i>
            <span>Event</span>
        </a>
    </li>

    <!-- Divider -->
    <!-- <hr class="sidebar-divider my-0">

    <li class="nav-item active">
        <a class="nav-link" href="<?= site_url('user'); ?>">
            <i class="fas fa-user"></i>
            <span>Pengguna</span>
        </a>
    </li> -->

    <!-- Divider -->
    <!-- <hr class="sidebar-divider my-0">

    <li class="nav-item active">
        <a class="nav-link" href="<?= site_url('transaction'); ?>">
            <i class="fas fa-chart-bar"></i>
            <span>Transaksi</span>
        </a>
    </li> -->

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- <li class="nav-item active">
        <a class="nav-link" href="<?= site_url('week'); ?>">
            <i class="fas fa-calendar-alt"></i>
            <span>Tabel Mingguan</span>
        </a>
    </li> -->

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0 " id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">