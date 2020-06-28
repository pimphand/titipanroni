<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.html" class="brand-link">
      <img src="<?php echo base_url('assets/backend/dist/img/logo2.png')?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light"><strong>Rawuh Madiun</strong></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url('assets/backend/dist/img/PAKANDAYU.png')?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="index.html" class="d-block">Pakandayu Kota Madiun</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->


               <li class="nav-header">PARIWISATA</li>
            <li class="nav-item has-treeview menu-open">
              <a href="#" class="nav-link active">
                <i class="fas fa-archway"></i>
                <p>
                  TENTANG KOTA MADIUN
                  <i class="right fas fa-angle-left"></i>
                </p>
                
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="./wisata.html" class="nav-link active">
                    <i class="far fa-circle nav-icon"></i>
                    <p>SEJARAH</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="./wisata.html" class="nav-link active">
                    <i class="far fa-circle nav-icon"></i>
                    <p>MAKNA DAN ARTI</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="./wisata.html" class="nav-link active">
                    <i class="far fa-circle nav-icon"></i>
                    <p>KONDISI MASYARAKAT</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo site_url('backend/post/add_new');?>" class="nav-link">
                    <i class="fas fa-plus"></i>
                    <p>TAMBAH</p>
                  </a>
                </li>
              </ul>
            </li>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
