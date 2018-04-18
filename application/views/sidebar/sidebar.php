<body class="app header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden">
  <header class="app-header navbar">
    <button class="navbar-toggler mobile-sidebar-toggler d-lg-none mr-auto" type="button">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button">
      <span class="navbar-toggler-icon"></span>
    </button>

    <ul class="nav navbar-nav d-md-down-none">
      <li class="nav-item px-3">
        <!-- <a class="nav-link" href="#"> Codeigniter Online Learning Application</a> -->
      </li>
      <!-- <li class="nav-item px-3">
        <a class="nav-link" href="#">Users</a>
      </li>
      <li class="nav-item px-3">
        <a class="nav-link" href="#">Settings</a>
      </li> -->
    </ul>
    <ul class="nav navbar-nav ml-auto">
      <li class="nav-item d-md-down-none">
        <a class="nav-link" href="#"><i class="icon-bell"></i><span class="badge badge-pill badge-danger">5</span></a>
      </li>
      <li class="nav-item d-md-down-none">
        <a class="nav-link" href="#"><i class="icon-list"></i></a>
      </li>
      <li class="nav-item d-md-down-none">
        <a class="nav-link" href="#">Selamat datang, <?php echo $session_user['user']->name ;?></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
          <img src="<?php echo base_url('assets/img/avatars/5.jpg');?>" class="img-avatar" alt="admin@bootstrapmaster.com">
        </a>
        <div class="dropdown-menu dropdown-menu-right">
          <div class="dropdown-header text-center">
            <strong>Account</strong>
          </div>
          <a class="dropdown-item" href="#"><i class="fa fa-user"></i> Profile</a>
          <div class="divider"></div>
          <a class="dropdown-item" href="<?php echo base_url();?>index.php/login/logout"><i class="fa fa-lock"></i> Logout</a>
        </div>
      </li>
    </ul>
    <!-- <button class="navbar-toggler aside-menu-toggler" type="button">
      <span class="navbar-toggler-icon"></span>
    </button> -->

  </header>

    <div class="app-body">
    <div class="sidebar">
    <div class="sidebar-header">
        <img src="<?php echo base_url();?>assets/img/avatars/8.jpg" class="img-avatar" alt="Avatar">
        <div>
          <strong><?php echo $session_user['user']->name ;?></strong>
        </div>
        <div class="text-muted">
          <small><?php echo $session_user['user']->email ;?></small>
        </div>
        <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
          <button type="button" class="btn btn-link">
            <i class="icon-settings"></i>
          </button>
          <button type="button" class="btn btn-link">
            <i class="icon-speech"></i>
          </button>
          <div class="btn-group" role="group">
            <button type="button" class="btn btn-link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="icon-user"></i>
            </button>
            <div class="dropdown-menu">
              <div class="dropdown-header text-center">
                <strong>Account</strong>
              </div>
              <a class="dropdown-item" href="#"><i class="fa fa-user"></i> Profile</a>
              <a class="dropdown-item" href="#"><i class="fa fa-lock"></i> Logout</a>
            </div>
          </div>
        </div>
      </div>
      <nav class="sidebar-nav">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url();?>index.php/home"><i class="icon-speedometer"></i> Dashboard </a>
          </li>
          <li class="nav-title">
            Menus
          </li>

          <?php echo $session_user['menu'];?>

          <li class="nav-item mt-auto">
            <a class="nav-link nav-link-success" href="http://coreui.io/" target="_top"><i class="icon-cloud-download"></i> Download CoreUI</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-link-danger" href="http://coreui.io/pro/" target="_top"><i class="icon-layers"></i> Try CoreUI <strong>PRO</strong></a>
          </li>

        </ul>
      </nav>
      <button class="sidebar-minimizer brand-minimizer" type="button"></button>
    </div>