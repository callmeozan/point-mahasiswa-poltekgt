 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
   <!-- Brand Logo -->
   <a class="brand-link">
     <img src="<?= base_url('dist/img/logopoltek.png') ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
     <span class="sidebar-brand-text mx-3">SISTEM KONDITE</span>
     <!--<span class="brand-text font-weight-light">KONDITE POLTEK-GT</span>-->
   </a>

   <!-- Sidebar -->
   <div class="sidebar">
     <!-- Sidebar user panel (optional) -->
     <div class="user-panel mt-3 pb-3 mb-3 d-flex">
       <div class="image">
         <img src="<?= base_url('dist/img/default.svg') ?>" class="img-circle elevation-2" alt="User Image">
       </div>
       <div class="info">
         <a href="#" class="d-block"> <strong><?= $username ?></strong></a>
         <small><a href="#"><i class="fa fa-circle text-success"></i> Online</a></small>
       </div>
     </div>

     <!-- Sidebar Menu -->
     <nav class="mt-2">
       <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

         <li class="nav-item">
           <a href="/User" class="nav-link <?= $menu == 'dashboard' ? 'active' : '' ?>">
             <i class="nav-icon fas fa-tv"></i>
             <p>DASHBOARD</p>
           </a>
         </li>

         <li class="nav-item">
           <a href="<?= base_url('mahasiswa/profilku'); ?>" class="nav-link <?= $menu == 'profil' ? 'active' : '' ?>">
             <i class="nav-icon fas fa-user"></i>
             <p>PROFIL</p>
           </a>
         </li>

         <li class="nav-item <?= $menu == 'kondite' ? 'menu-open' : '' ?>">
           <a href="#" class="nav-link <?= $menu == 'kondite' ? 'active' : '' ?>">
             <i class="nav-icon fas fa-hammer"></i>
             <p>KONDITE<i class="right fas fa-angle-left"></i></p>
           </a>
           <ul class="nav nav-treeview">
             <li class="nav-item">
               <a href="<?= base_url('/mahasiswa/input-data'); ?>" class="nav-link <?= $submenu == 'plus' ? 'active' : '' ?>">
                 <i class="far fa-circle text-primary"></i>
                 <p>Data Plus</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="<?= base_url('/mahasiswa/data-minus'); ?>" class="nav-link <?= $submenu == 'minus' ? 'active' : '' ?>">
                 <i class="far fa-circle text-danger"></i>
                 <p>Data Minus</p>
               </a>
             </li>
           </ul>
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