
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="data:image/jpeg;base64,<?=$setting[0]->logo_aplikasi ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">SIMDUK</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?= base_url('assets/template/');?>dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        

        </div>
        <div class="info">
          <a href="#" class="d-block"><?= $nama_pengguna?></a>
        </div>
      </div>

     

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
  
          <li class="nav-item">
            <a href="pages/x.html" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Front Office
                <span class="right badge badge-danger">10</span>
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="pages/widgetrs.html" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Produksi
                <span class="right badge badge-danger">10</span>
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="pages/rsr.html" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Validator Capil
                <span class="right badge badge-danger">10</span>
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="pages/rr.html" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Validator Dafduk
                <span class="right badge badge-danger">10</span>
              </p>
            </a>
          </li>
      

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                Dafduk
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/UI/general.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>General</p>
                </a>
              </li>
           
            </ul>
          </li>
 
        
     
          <li class="nav-item">
            <a href="" onclick="logout();" class="nav-link">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p class="text">Logout</p>
            </a>
          </li>
         
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
