 <aside class="main-sidebar sidebar-dark-primary elevation-4">
     <!-- Brand Logo -->
     <a href="<?= base_url('dashboard') ?>" class="brand-link">
         <img src="<?= base_url() ?>assets/img/logo.png" alt="AdminLTE Logo" class="brand-image elevation-3" style="opacity: .8; height:20px;">
         <span class="brand-text font-weight-light"><br></span>
     </a>

     <!-- Sidebar -->
     <div class="sidebar">
         <!-- Sidebar user panel (optional) -->
         <div class="user-panel mt-3 pb-3 mb-3 d-flex">
             <div class="image">
                 <img src="<?php echo base_url(); ?>assets/img/profile/default.png" class="img-circle elevation-2" alt="User Image">
             </div>
             <div class="info">
                 <a href="#" class="d-block"><?= $user['nama']; ?></a>
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
             <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                 <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                 <li class="nav-item">
                     <a href="<?= base_url(); ?>dashboard" class="nav-link 
                     <?php if ($this->uri->segment('1') == 'dashboard' && $this->uri->segment('2') == '' || $this->uri->segment('1') == '') {
                            echo 'active';
                        } ?>
                     ">
                         <i class="nav-icon fas fa-tachometer-alt"></i>
                         <p>
                             Dashboard
                         </p>
                     </a>

                 </li>
                 <li class="nav-item">
                     <a href="<?= base_url(); ?>dashboard/data" class="nav-link 
                     <?php if ($this->uri->segment('2') == 'data') {
                            echo 'active';
                        } ?>
                     ">
                         <i class="nav-icon fas fa-database"></i>
                         <p>
                             Galeri
                         </p>
                     </a>
                 </li>


                 <li class="nav-header">WEBSITE</li>
                 <li class="nav-item">
                     <a href="<?= base_url(); ?>" target="_blank" class=" nav-link">
                         <i class="nav-icon fas fa-home"></i>
                         <p>
                             Home
                         </p>
                     </a>
                 </li>
             </ul>
         </nav>
         <!-- /.sidebar-menu -->
     </div>
     <!-- /.sidebar -->
 </aside>

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <div class="content-header">
         <div class="container-fluid">
             <div class="row mb-2">
                 <div class="col-sm-6">
                     <h1 class="m-0"><?= $title; ?></h1>
                 </div><!-- /.col -->
                 <div class="col-sm-6">
                     <ol class="breadcrumb float-sm-right">
                         <li class="breadcrumb-item"><a href="#">Home</a></li>
                         <li class="breadcrumb-item active"><?= $title; ?></li>
                     </ol>
                 </div><!-- /.col -->
             </div><!-- /.row -->
         </div><!-- /.container-fluid -->
     </div>
     <!-- /.content-header -->