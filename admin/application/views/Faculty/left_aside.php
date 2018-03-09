<body class="hold-transition skin-blue sidebar-mini box">
<div class="overlay" style="display: none;">
  <i class="fa fa-refresh fa-spin"></i>
</div>
<div class="wrapper">
  <header class="main-header">
    <a href="<?php echo base_url(); ?>" class="logo">
      <span class="logo-mini"><?php echo $this->session->portal_config['short_name']; ?></span>
      <span class="logo-lg"><?php echo $this->session->portal_config['short_name']; ?></span>
    </a>
<nav class="navbar navbar-static-top">
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url('assets/dist/img/f000-icon.png'); ?>" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $this->session->login_data['user_id']; ?></span>
            </a>
            <ul class="dropdown-menu">
              <li class="user-header">
                <img src="<?php echo base_url('assets/dist/img/dfd1-icon.png'); ?>" class="img-circle" alt="User Image">
                <p>
                  <?php echo $this->session->login_data['user_id']; ?>
                  <small><?php echo $this->session->login_data['user_id']; ?></small>
                </p>
              </li>
               <li class="user-footer">
                <div class="pull-left">
                  <a href="<?php echo site_url('faculty/setting/setting'); ?>" class="btn btn-default btn-flat">Setting</a>
                </div>
                <div class="pull-right">
                  <a href="<?php echo site_url('login/logout'); ?>" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <aside class="main-sidebar">
    <section class="sidebar">

      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li>
          <a href="<?php echo base_url(); ?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>

         <li class="treeview">
          <a href="#">
            <i class="fa fa-group"></i>
            <span>Leaves</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url('faculty/leaves/add'); ?>"><i class="fa fa-user-plus"></i>Request for Leave</a></li>
            <li><a href="<?php echo site_url('faculty/leaves'); ?>"><i class="ion ion-clipboard"></i>Leave Requests</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-group"></i>
            <span>Lecture Repot</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url('faculty/lecturereport/add'); ?>"><i class="fa fa-user-plus"></i>Add Lecture Report</a></li>
            <li><a href="<?php echo site_url('faculty/lecturereport'); ?>"><i class="ion ion-clipboard"></i>Lecture Reports</a></li>
          </ul>
        </li>


         <li class="treeview">
          <a href="#">
            <i class="fa fa-book"></i>
            <span>Assignment</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url('faculty/assignment/add'); ?>"><i class="fa fa-book"></i>Add Assignment</a></li>
            <li><a href="<?php echo site_url('faculty/assignment'); ?>"><i class="ion ion-clipboard"></i>View Assignments</a></li>
          </ul>
        </li>


        <li class="treeview">
          <a href="#">
            <i class="fa fa-tasks"></i>
            <span>To-Do</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url('faculty/todo/add'); ?>"><i class="fa fa-tasks"></i>Add To-Do</a></li>
            <li><a href="<?php echo site_url('faculty/todo'); ?>"><i class="ion ion-clipboard"></i>View To-Do</a></li>
          </ul>
        </li>

      </ul>
    </section>
    
  </aside>
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        <?php echo $title; ?>
      </h1>
      <ol class="breadcrumb">
        <li class="active"><?php echo $title; ?></li>
      </ol>
    </section>

    