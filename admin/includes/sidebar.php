<?php
  $current_page = substr($_SERVER['SCRIPT_NAME'], strrpos($_SERVER['SCRIPT_NAME'], "/") + 1); 
  // echo $current_page;
?>


<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index.php" class="brand-link">
      <img src="dist/img/admin.png" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Human ADMIN</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a href="./me.php" class="d-block">Kitikorn Khanthasen</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="./index.php" class="nav-link <?= ($current_page == 'index.php') ? 'active' : ''; ?>">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard 
              </p>
            </a>
            
          </li>

          <!-- Table -->
          <li class="nav-item">
            <a href="./table.php" class="nav-link <?= ($current_page == 'table.php') ? 'active' : ''; ?>">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Tables
              </p>
            </a>
          </li>
          <!-- <li class="nav-header">MISCELLANEOUS</li> -->
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
