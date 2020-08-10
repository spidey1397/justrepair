<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link text-center">
      <img src="{{url('images')}}/admin.png" alt="AdminLTE Logo" class="brand-image float-none">
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="https://img.icons8.com/dotty/80/000000/user.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
        <a href="#" class="d-block">{{Auth::user()->name}}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{url('newproject')}}" class="nav-link">
              <i class="fas fa-plus"></i>
              <p>Create Project</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('category')}}" class="nav-link">
              <i class="fas fa-plus"></i>
              <p>Create Category</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{url('update')}}" class="nav-link">
              <i class="fas fa-plus"></i>
              <p>Update Category</p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="{{url('upload')}}" class="nav-link">
              <i class="fas fa-plus"></i>
              <p>Upload Image</p>
            </a>
          </li>
        </ul> 
            
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
