<aside class="main-sidebar">
    <section class="sidebar">
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url();?>/uploads/logo/logo.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $this->session->userdata('UserName');?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview">
          <a href="#" class="nav-link" onclick="loadpage('<?php echo base_url();?>index.php?adminController/loadpage/users/')">
            <i class="fa fa-user"></i>
            <span>User Management</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right"></span>
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Report Management</span>
            <span class="pull-right-container"> 
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"class="nav-link" onclick="loadpage('<?php echo base_url();?>index.php?adminController/loadpage/reportIndex/')"><i class="fa fa-circle-o"></i>Call Complaint Report</a></li>
             <li><a href="#"class="nav-link" onclick="loadpage('<?php echo base_url();?>index.php?adminController/loadpage/Entry/')"><i class="fa fa-circle-o"></i> SMS Complaint Report</a></li>
              <li><a href="#"class="nav-link" onclick="loadpage('<?php echo base_url();?>index.php?adminController/loadpage/Entry/')"><i class="fa fa-circle-o"></i> Email Complaint Report</a></li>
          </ul>
        </li>
       <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>System Management</span>
            <span class="pull-right-container"> 
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"class="nav-link" onclick="loadpage('<?php echo base_url();?>index.php?adminController/loadpage/AddHostReferal/')"><i class="fa fa-circle-o"></i>Email Configuration</a></li>
             <li><a href="#"class="nav-link" onclick="loadpage('<?php echo base_url();?>index.php?adminController/loadpage/Entry/')"><i class="fa fa-circle-o"></i>SMS Configuration</a></li>
              <li><a href="#"class="nav-link" onclick="loadpage('<?php echo base_url();?>index.php?adminController/loadpage/Entry/')"><i class="fa fa-circle-o"></i> Email Complaint Report</a></li>
          </ul>
        </li>
        
        
      </ul>
    </section>
  </aside>