    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3"><?php echo SITE_NAME ?></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo site_url('') ?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Data Validasi
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="<?php echo site_url('Data_Sebelumnya') ?>" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>Data Sebelumnya</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Daftar STO</h6>
            <a class="collapse-item" href="<?php echo site_url('Data_Sebelumnya/DMO') ?>">DMO</a>
            <a class="collapse-item" href="<?php echo site_url('Data_Sebelumnya/GBG') ?>">GBG</a>
            <a class="collapse-item" href="<?php echo site_url('Data_Sebelumnya/IJK') ?>">IJK</a>
            <a class="collapse-item" href="<?php echo site_url('Data_Sebelumnya/JGR') ?>">JGR</a>
            <a class="collapse-item" href="<?php echo site_url('Data_Sebelumnya/MYR') ?>">MYR</a>
            <a class="collapse-item" href="<?php echo site_url('Data_Sebelumnya/RKT') ?>">RKT</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="<?php echo site_url('Data_Validasi') ?>" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Data Proses Validasi</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">Daftar STO</h6>
            <a class="collapse-item" href="<?php echo site_url('Data_Validasi/DMO') ?>">DMO</a>
            <a class="collapse-item" href="<?php echo site_url('Data_Validasi/GBG') ?>">GBG</a>
            <a class="collapse-item" href="<?php echo site_url('Data_Validasi/IJK') ?>">IJK</a>
            <a class="collapse-item" href="<?php echo site_url('Data_Validasi/JGR') ?>">JGR</a>
            <a class="collapse-item" href="<?php echo site_url('Data_Validasi/MYR') ?>">MYR</a>
            <a class="collapse-item" href="<?php echo site_url('Data_Validasi/RKT') ?>">RKT</a>
          </div>
        </div>
      </li>      



      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->