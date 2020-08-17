<?php 
  ob_start();
  include "db_connection.php";
?>
<!DOCTYPE html>
<html>
<?php include "layout/head.php"; ?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php include "layout/header.php"; ?>
  <?php include "layout/leftsidebar.php"; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Painel de Controle
        <small>Pontúa Digital</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
<br>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">

<?php
    
    ob_start();
    require_once "functions/db.php";

    // Initialize the session

    session_start();

    // If session variable is not set it will redirect to login page

    if(!isset($_SESSION['email']) || empty($_SESSION['email'])){

      header("location: login.php");

      exit;
    }

    $email = $_SESSION['email'];

    $sql = "SELECT * FROM subscribers";
    $query = mysqli_query($connection, $sql);
?>

                <!-- /row -->

                                <table id="example23" class="table table-hover" cellspacing="0" width="100%">

                                    <?php 

                                    if (mysqli_num_rows($query)==0) {
                                                    echo "<i style='color:brown;'>No subscribers Yet :( </i> ";
                                                }
                                                else{

                                                    echo '
                                                    <thead>
                                                    <tr class="info">
                                                        <th>email</th>
                                                        <th>data</th>
                                                    </tr>
                                                </thead>
                                                <tfoot>
                                                    <tr>
                                                        <th>email</th>
                                                        <th>data</th>
                                                    </tr>
                                                </tfoot>
                                                <tbody>
                                                    ';
                                                }

                                        while ($row = mysqli_fetch_array($query)) {


                                    echo '
                                    

                                        <tr class="success">
                                            <td>'.$row["email"].'</td>
                                            <td>'.$row["date"].'</td>
                                        </tr>
                                        
                                    ';

                                    }

                                    ?>
                                    </tbody>
                                </table>

                <!-- /.row -->

          


        <!-- /.box-footer-->
      </div>
      <!-- /.box -->
    </section></div>
    <!-- /.content -->
     <!-- Modal add new category -->
      <?php include "layout/modal/add_new_category.php" ?>
     <!-- // Modal add new category -->
    <!-- Modal Delete Category-->
      <?php include "layout/modal/delete_category.php" ?>
    <!-- // Modal Delete Category-->
    <!-- Modal EDIT  category -->
    <?php include "layout/modal/edit_category.php" ?>
<!-- // Modal EDIT  category -->
<!-- Modal add new post -->
    <?php include "layout/modal/add_new_post.php"; ?>
     <!-- // Modal add new Post -->
     <!-- Modal EDIT  user -->
    <?php include "layout/modal/edit_user.php" ?>
<!-- // Modal EDIT  user -->
  </div>
  <!-- /.content-wrapper -->
  <?php include "layout/footer.php"; ?>

  <?php include "layout/rightsidebar.php"; ?>
<!-- ./wrapper -->
<?php include "layout/scripts.php"; ?>



</body>
</html>
