 <!-- /.navbar -->

 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
     <!-- Brand Logo -->
     <a href="index3.html" class="brand-link">
         <img src="<?php echo base_url() ?>assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
         <span class="brand-text font-weight-light">Agrobis-Id</span>
     </a>



     <!-- Sidebar -->
     <div class="sidebar">
         <!-- Sidebar user panel (optional) -->
         <div class="user-panel mt-3 pb-3 mb-3 d-flex">
             <div class="image">
                 <img src="<?php echo base_url() ?>assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
             </div>
             <div class="info">

                 <a href="#" class="d-block"><?= $login['name']; ?></a>
             </div>
         </div>

         <!-- SidebarSearch Form -->
         <div class="form-inline">
             <div class="input-group" data-widget="sidebar-search">
                 <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                 <div class="input-group-append">
                     <button class="btn btn-sidebar">
                         <i class="fas fa-search fa-fw"></i>
                     </button>
                 </div>
             </div>
         </div>

         <!-- Sidebar Menu -->
         <nav class="mt-2">
             <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
                 <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

                 <!-- Menu Dashboard-->
                 <li class="nav-item menu-open">
                     <a href="<?= base_url() ?>admin" class="nav-link active">
                         <i class="nav-icon fal fa-tachometer-alt"></i>
                         <p>
                             Dashboard
                         </p>
                     </a>
                 </li>



                 <!-- Menu Cek Harian-->
                 <li class="nav-item">
                     <a href="<?= base_url() ?>pengecekan/cekharian/CekHarian" class="nav-link">
                         <i class="nav-icon fal fa-clipboard-check"></i>
                         <p>
                             Data Harian
                         </p>
                     </a>
                 </li>



                 <!-- Menu Cek Sampel-->
                 <li class="nav-item">
                     <a href="<?= base_url() ?>pengecekan/ceksampel/CekSampel" class="nav-link">
                         <i class="nav-icon fal fa-vial"></i>
                         <p>
                             Data Sampel
                         </p>
                     </a>
                 </li>



                 <!-- Menu Inventory-->

                 <li class="nav-item">
                     <a href="#" class="nav-link">
                         <i class="nav-icon fal fa-warehouse-alt"></i>
                         <p>
                             Inventory
                             <i class="fas fa-angle-left right"></i>
                         </p>
                     </a>
                     <ul class="nav nav-treeview" style="display: block;">
                         <li class="nav-item">
                             <a href="<?= base_url() ?>inventory/stok-barang/StokBarang" class="nav-link">
                                 <i class="nav-icon fal fa-boxes"></i>
                                 <p>Stok Barang</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="<?= base_url() ?>inventory/barang-masuk/BarangMasuk" class="nav-link">
                                 <i class="nav-icon fal fa-truck-loading"></i>
                                 <p>Barang Masuk</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="<?= base_url() ?>inventory/barang-keluar/BarangKeluar" class="nav-link">
                                 <i class="nav-icon fal fa-truck-moving"></i>
                                 <p>Barang Keluar</p>
                             </a>
                         </li>
                     </ul>
                 </li>

                 <li class="nav-item">
                     <a href="<?= base_url('login/login') ?>" class="nav-link">
                         <i class="nav-icon fal fa-sign-out-alt"></i>
                         <p>
                             Sign Out
                         </p>
                     </a>
                 </li>

             </ul>
         </nav>
         <!-- /.sidebar-menu -->
     </div>
     <!-- /.sidebar -->
 </aside>