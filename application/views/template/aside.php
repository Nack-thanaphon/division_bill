<aside class="main-sidebar sidebar-light-primary elevation-1">
  <!-- Brand Logo -->
  <a href="./" class="brand-link text-center">
    <img src="<?php echo base_url('dist/img/Si_Eng_H_Color.jpg') ?>" width="100%">

    <span class="brand-text  font-weight-bold"></span>

  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <!-- <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image"> -->
      </div>
      <div class="info ">
        <a href="#" class="d-block text-start m-0 p-0">
          <b class="text-dark">ธนพล กัลปพฤกษ์</b><br>
          <small>เจ้าหน้าที่บริหารงานทั่วไป</small>
        </a>
      </div>
    </div>

    <!-- SidebarSearch Form -->
    <!-- <div class="form-inline">
          <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-sidebar">
                <i class="fas fa-search fa-fw"></i>
              </button>
            </div>
          </div>
        </div> -->

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item">
          <a href="<?php echo site_url('Dashboard') ?>" class="nav-link ">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
            </p>
          </a>

        </li>

        <li class="nav-item">
          <a href="<?php echo site_url('Form') ?>" class="nav-link">
            <i class="nav-icon fas fa-file-import"></i>
            <p>
              เอกสารที่ร้องขอ
            </p>
          </a>

        </li>
        <li class="nav-item">
          <a href="<?php echo site_url('Timeline') ?>" class="nav-link">
            <i class="nav-icon fas fa-bell"></i>
            <p>
              ติดตามสถานะ
            </p>
          </a>


        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-user-shield"></i>
            <p>
              ติดต่อเจ้าหน้าที่
            </p>
          </a>


        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fab fa-gitter"></i>
            <p>
              คู่มือใช้งาน

            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-sign-out-alt"></i>
            <p>
              ออกจากระบบ

            </p>
          </a>
        </li>


      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>