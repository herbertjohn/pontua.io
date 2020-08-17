<header class="main-header">
    <!-- Logo -->
    <a href="index.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><img src="../../assets/img/favicon.png" width="20px"></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Pontúa</b>ADM</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <?php 
                $sql_select_new_comment = "SELECT * FROM comments WHERE comm_status=0";
                $result_sql_select_new_comment = mysqli_query($dbconnection, $sql_select_new_comment);
                $count_new_comments = 0 ;
                while ($rowcomment = mysqli_fetch_assoc($result_sql_select_new_comment))
                {
                 $count_new_comments++; 
                }
             ?>
          <li><a href="comment_admin.php">
              
              <i class="fa fa-comment"></i>
              <span class="label label-success"><?php echo $count_new_comments; ?></span>
            </a></li>
            <li data-toggle="modal" data-target="#InsertPost"><a href="#">
              <i class="fa fa-plus"></i><span class="hidden-xs"> Add post</span>
            </a></li>
            <!-- Modal add new post -->
            <?php //include "layout/modal/add_new_post.php"; ?>
             <!-- // Modal add new Post -->
          <!-- Messages: style can be found in dropdown.less-->

<?php

    ob_start();
    require_once "functions/db.php";

    // Initialize the session

    session_start();

    $sql_contacts = "SELECT * FROM contacts";
    $query_contacts = mysqli_query($connection, $sql_contacts);

    $sql_subscribers = "SELECT * FROM subscribers";
    $query_subscribers = mysqli_query($connection, $sql_subscribers);

?>
          <li>
            <a href="inbox.php">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success"><?php echo mysqli_num_rows($query_contacts);?></span>
            </a>
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          <li>
            <a href="subscribers.php">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning"><?php echo mysqli_num_rows($query_subscribers);?></span>
            </a>
          </li>
          <!-- Tasks: style can be found in dropdown.less -->
          <li class="dropdown tasks-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">0</span>
            </a>

          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="images/users/<?php echo $success_login_image_admin; ?>" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $success_login_name_admin; ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="images/users/<?php echo $success_login_image_admin; ?>" class="zoom3" alt="User Image">

                <p>
                  <?php echo $success_login_name_admin; ?>
                  <small>Since Ago.. 2020</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="subscribers.php">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="inbox.php">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="users_admin.php">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <button type="button" name="edit" class="btn btn-default btn-flat" data-toggle="modal" data-target="#EditUser" data-user_id_edit="<?= $success_login_id ?>" data-user_name_edit="<?= $success_login_name_admin ?>" data-user_username_edit="<?= $success_login_username_admin ?>" data-user_email_edit="<?= $success_login_email_admin ?>" data-user_image_edit="<?= $success_login_image_admin ?>" data-user_type_edit="<?= $success_login_type_admin ?>" data-user_type_edit1="<?= $success_login_type_admin ?>" data-user_gender_edit="<?= $success_login_gender_admin ?>" data-user_password_edit="<?= $success_login_type_password_admin ?>" > <span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Profile</button>
                </div>
                <div class="pull-right">
                  <a href="../layout/logout.php" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->