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
        <a class="nav-link" href="#"> Codeigniter Online Learning Application</a>
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
        <a class="nav-link" href="#">Selamat datang, <?php echo $user->name ;?></a>
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
      <nav class="sidebar-nav">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url();?>index.php/home"><i class="icon-speedometer"></i> Dashboard </a>
          </li>
          <li class="nav-title">
            Components
          </li>
          <li class="nav-item nav-dropdown">
            <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-cursor"></i> Buttons</a>
            <ul class="nav-dropdown-items">
              <li class="nav-item">
                <a class="nav-link" href="buttons-buttons.html"><i class="icon-cursor"></i> Buttons</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="buttons-button-group.html"><i class="icon-cursor"></i> Buttons Group</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="buttons-dropdowns.html"><i class="icon-cursor"></i> Dropdowns</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="buttons-social-buttons.html"><i class="icon-cursor"></i> Social Buttons</a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="charts.html"><i class="icon-pie-chart"></i> Charts</a>
          </li>
          <li class="nav-item nav-dropdown">
            <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-star"></i> Icons</a>
            <ul class="nav-dropdown-items">
              <li class="nav-item">
                <a class="nav-link" href="icons-flags.html"><i class="icon-star"></i> Flags <span class="badge badge-success">NEW</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="icons-font-awesome.html"><i class="icon-star"></i> Font Awesome <span class="badge badge-secondary">4.7</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="icons-simple-line-icons.html"><i class="icon-star"></i> Simple Line Icons</a>
              </li>
            </ul>
          </li>
          <li class="nav-item nav-dropdown">
            <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-bell"></i> Notifications</a>
            <ul class="nav-dropdown-items">
              <li class="nav-item">
                <a class="nav-link" href="notifications-alerts.html"><i class="icon-bell"></i> Alerts</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="notifications-badge.html"><i class="icon-bell"></i> Badge</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="notifications-modals.html"><i class="icon-bell"></i> Modals</a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="widgets.html"><i class="icon-calculator"></i> Widgets <span class="badge badge-primary">NEW</span></a>
          </li>
          <li class="divider"></li>
          <li class="nav-title">
            Extras
          </li>
          <li class="nav-item nav-dropdown">
            <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-star"></i> Pages</a>
            <ul class="nav-dropdown-items">
              <li class="nav-item">
                <a class="nav-link" href="pages-login.html" target="_top"><i class="icon-star"></i> Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="pages-register.html" target="_top"><i class="icon-star"></i> Register</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="pages-404.html" target="_top"><i class="icon-star"></i> Error 404</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="pages-500.html" target="_top"><i class="icon-star"></i> Error 500</a>
              </li>
            </ul>
          </li>
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