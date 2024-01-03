 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
   <!-- Brand Logo -->
   <a class="brand-link">
     <img src="<?= base_url('dist/img/logopoltek.png') ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
     <span class="sidebar-brand-text mx-3">SISTEM KONDITE</span>
     <!--<span class="brand-text font-weight-light">SISFO PGT</span>-->
   </a>

   <!-- Sidebar -->
   <div class="sidebar">
     <!-- Sidebar user panel (optional) -->
     <div class="user-panel mt-3 pb-3 mb-3 d-flex">
       <div class="image">
         <img src="<?= base_url('dist/img/default-admin.svg') ?>" class="img-circle elevation-2" alt="User Image">
       </div>
       <div class="info">
         <a href="#" class="d-block"> <strong><?= $username ?></strong></a>
         <small><a href="#"><i class="fa fa-circle text-success"></i> Online</a></small>
       </div>
     </div>

     <!-- Sidebar Menu -->
     <nav class="mt-2">
       <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
         <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

         <li class="nav-item">
           <a href="/admin" class="nav-link <?= $menu == 'dashboard' ? 'active' : '' ?>">
             <i class="nav-icon fas fa-tv"></i>
             <p>DASHBOARD
               <span class="badge badge-danger right" style="font-size: 14px;"><?= $konfirmasi; ?></span>
             </p>
           </a>
         </li>
         <li class="nav-header">LAINNYA</li>
         <li class="nav-item">
           <!-- <a href="<?= base_url('admin/kategori') ?>" class="nav-link <?= $menu == 'kategori' ? 'active' : '' ?>">
             <i class="nav-icon fas fa-list"></i>
             <p>Kategori Pelanggaran</p>
           </a> -->
         </li>
         </li>
         <li class="nav-item">
           <a href="<?= base_url('logout'); ?>" class="nav-link">
             <i class="nav-icon fas fa-sign-out-alt"></i>
             <p>KELUAR</p>
           </a>
         </li>
       </ul>
     </nav>
     <!-- /.sidebar-menu -->
   </div>
   <!-- /.sidebar -->
 </aside>