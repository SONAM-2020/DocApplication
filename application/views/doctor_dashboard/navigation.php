    <div class="main-wrapper">
      <header class="header">
        <nav class="navbar navbar-expand-lg header-nav">
          <div class="navbar-header">
            <a id="mobile_btn" href="javascript:void(0);">
              <span class="bar-icon">
                <span></span>
                <span></span>
                <span></span>
              </span>
            </a>
            <a href="index-2.html" class="navbar-brand logo">
              <img src="<?php echo base_url();?>Template/assets/img/logo.png" class="img-fluid" alt="Logo">
            </a>
          </div>
          <div class="main-menu-wrapper">
            <div class="menu-header">
              <a href="index-2.html" class="menu-logo">
                <img src="<?php echo base_url();?>Template/assets/img/logo.png" class="img-fluid" alt="Logo">
              </a>
              <a id="menu_close" class="menu-close" href="javascript:void(0);">
                <i class="fas fa-times"></i>
              </a>
            </div>
          </div>     
          <ul class="nav header-navbar-rht">
            <!-- User Menu -->
            <li class="nav-item dropdown has-arrow logged-item">
              <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                <span class="user-img">
                  <img class="rounded-circle" src="<?php echo base_url();?>Template/assets/img/doctors/doctor-thumb-02.jpg" width="31" alt="Darren Elder">
                </span>
              </a>
              <div class="dropdown-menu dropdown-menu-right">
                <div class="user-header">
                  <div class="avatar avatar-sm">
                    <img src="<?php echo base_url();?>Template/assets/img/doctors/doctor-thumb-02.jpg" alt="User Image" class="avatar-img rounded-circle">
                  </div>
                  <div class="user-text">
                    <h6>Darren Elder</h6>
                    <p class="text-muted mb-0">Doctor</p>
                  </div>
                </div>
                <a class="dropdown-item" href="doctor-dashboard.html">Dashboard</a>
                <a class="dropdown-item" href="doctor-profile-settings.html">Profile Settings</a>
                <a class="dropdown-item" href="login.html">Logout</a>
              </div>
            </li>
            <!-- /User Menu -->
            
          </ul>
        </nav>
      </header>
      <!-- /Header -->
      
      <!-- Breadcrumb -->
      <div class="breadcrumb-bar">
        <div class="container-fluid">
          <div class="row align-items-center">
            <div class="col-md-12 col-12">
              <nav aria-label="breadcrumb" class="page-breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                </ol>
              </nav>
              <h2 class="breadcrumb-title">Dashboard</h2>
            </div>
          </div>
        </div>
      </div>
      <!-- /Breadcrumb -->