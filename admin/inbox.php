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

    $sql = 'SELECT * FROM contacts';

    $query = mysqli_query($connection, $sql);

?>

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
        <h4>Recent Messages(<b style="color: orange;"><?php echo mysqli_num_rows($query);?></b>)</h4>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">




                            <!-- row -->
                            <div class="row">
                               
                                <div class="col-lg-12 col-md-9 col-sm-12 col-xs-12 mail_listing">
                                    <div class="inbox-center">


                                        <?php
                                    if (isset($_GET["deleted"])) {
                                        echo 
                                        '<div class="alert alert-warning" >
                                              <a href="#" class="close" data-dismiss="alert" aria-label="close"></a>
                                             <strong>DELETED!! </strong><p> The message has been successfully deleted.</p>
                                        </div>'
                                        ;
                                    }
                                    elseif (isset($_GET["del_error"])) {
                                        echo 
                                        '<div class="alert alert-danger" >
                                              <a href="#" class="close" data-dismiss="alert" aria-label="close"></a>
                                             <strong>ERROR!! </strong><p> There was an error during deleting this record. Please try again.</p>
                                        </div>'
                                        ;
                                    }
                                ?>  



                                        <table class="table table-hover">
                                            <thead>
                                                <tr style="text-align: center;">
                                                    <th class="info">
                                                        <h4>Remetente</h4>
                                                        <?php 
                                                             if (mysqli_num_rows($query)==0) {
                                                    echo "<i style='color:brown;'>No messages Yet :( </i> ";}
                                                        ?>
                                                    </th>
                                                    <th class="info"><h4>Mensagem</h4></th><th class="info"><h4>Data</h4></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                
                                                <?php
                                                while ($row = mysqli_fetch_array($query))
                                                {
                                              echo
                                              '
                                                <tr class="success">
                                                   <td class="hidden-xs"><a href="inbox-detail.php?id='.$row["id"].'" />'.$row["names"].'</td>
                                                    <td class="max-texts"><a href="inbox-detail.php?id='.$row["id"].'" />'.$row["message"].'</td>
                                                    <td class="text-right">'.$row["date"].'</td>
                                                </tr>';
                                            }
                                            ?>

                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-7 m-t-20"> Exibindo 1 - <?php echo mysqli_num_rows($query);?> </div>
                                        <div class="col-xs-5 m-t-20">
                                            <div class="btn-group pull-right">
                                                <button type="button" class="btn btn-default waves-effect"><i class="fa fa-chevron-left"></i></button>
                                                <button type="button" class="btn btn-default waves-effect"><i class="fa fa-chevron-right"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.row -->
                        </div>
                    </div>
                </div>
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
