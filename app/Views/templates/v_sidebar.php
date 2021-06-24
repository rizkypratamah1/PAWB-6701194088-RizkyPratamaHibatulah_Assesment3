 <!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

     <!-- Sidebar - Brand -->
     <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url(); ?>">
         <div class="sidebar-brand-icon">
             <i class="fas fa-school"></i>
         </div>
         <div class="sidebar-brand-text mx-3">DIABETES.SECURE <sup>ASS 3</sup></div>
     </a>

     <!-- Divider -->
     <hr class="sidebar-divider my-0">

     <!-- Nav Item - Dashboard -->
     <li class="nav-item">
         <a class="nav-link" href="<?= base_url(); ?>">
             <i class="fas fa-fw fa-tachometer-alt"></i>
             <span>Home</span></a>
     </li>

     <!-- Divider -->
     <hr class="sidebar-divider">

     <!-- Heading -->
     <div class="sidebar-heading">
         Tables
     </div>

     <!-- Nav Item - Pages Collapse Menu -->
     <li class="nav-item">
         <a class="nav-link collapsed" href="<?= base_url('daftar'); ?>">
             <i class="fas fa-fw fa-table"></i>
             <span>Data Akun</span>
         </a>


     </li>




     <!-- Divider -->
     <hr class="sidebar-divider d-none d-md-block">

     <!-- Heading -->
     <div class="sidebar-heading">
         Actions
     </div>

     <!-- Nav Item - Pages Collapse Menu -->
     <li class="nav-item">
         <a class="nav-link collapsed" data-toggle="modal" data-target="#modalTambah">
             <i class="fas fa-fw fa-tools"></i>

             <span>Tambah Akun</span>
         </a>
         <a class="nav-link collapsed" data-toggle="modal" data-target="#modalHapus">
             <i class="fas fa-fw fa-tools"></i>
             <span>Hapus Akun</span>
         </a>
         <a class="nav-link collapsed" data-toggle="modal" data-target="#modalUbah">
             <i class="fas fa-fw fa-tools"></i>
             <span>Update Akun</span>
         </a>
         <!-- Divider -->
         <hr class="sidebar-divider d-none d-md-block">

     </li>

     <!-- Sidebar Toggler (Sidebar) -->
     <div class="text-center d-none d-md-inline">
         <button class="rounded-circle border-0" id="sidebarToggle"></button>
     </div>

 </ul>
 <!-- End of Sidebar -->