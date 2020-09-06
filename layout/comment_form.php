    <?php
      $current_date = date('d/m/Y');
      if (isset($_POST['save_comment']))
      {
        $add_comm_posid = $selected_post_page;
        $add_comm_autor=$_POST['comm_autor'];
        $add_comm_email=$_POST['comm_email'];
        $add_comm_text=$_POST['comm_text'];

        $add_comm_autor = mysqli_real_escape_string($dbconnection, $add_comm_autor);
        $add_comm_email = mysqli_real_escape_string($dbconnection, $add_comm_email);
        $add_comm_text = mysqli_real_escape_string($dbconnection, $add_comm_text);

        $sql_add_comment = "INSERT INTO comments(postid, comm_autor, comm_email, comm_text, comm_status,comm_date) VALUES('$add_comm_posid', '$add_comm_autor', '$add_comm_email', '$add_comm_text', '0', '$current_date' )";
        $result_sql_add_comment= mysqli_query($dbconnection, $sql_add_comment);
        echo "Comentário ";
        if (!$sql_add_comment)
                {
                  die("Error description:" . mysqli_error());
                }
                else
                {
                  echo "adicionado com sucesso!";
                  header("Location: " . $_SERVER['REQUEST_URI']);
                }
      }
     ?> 

           
        <div class="reply-form">

          <h4>Faça um comentário</h4>
           <div class="row">
        <div class="col-md-12 form-group">
          

            <form method="post" action="" onsubmit="myFunction()">
              <div class="form-group">
                <?php 
                   if (!isset($_SESSION['type']))
                    {
                      # code...
                    

                 ?>
                <label for="autor" class="col-form-label">Nome:</label>
                <input type="text" class="form-control" id="comm_autor" name="comm_autor" required="" placeholder="Nome*">
                 <label for="email" class="col-form-label">Email:</label>
                <input type="email" class="form-control" id="comm_email" name="comm_email" required="" placeholder="Email*"><br>
                <?php 
                  }
                  else
                  {
                  
                 ?>
                 <p class="lead">
                   <img src="admin/images/users/<?php echo $success_login_image_admin; ?>" class="zoom3" alt="User Image" width="50" align="left" hspace="5">
                      <a href="#"><?php echo $success_login_name_admin; ?></a> <br>
                  </p>
                
                <input type="hidden" class="form-control" id="comm_autor" name="comm_autor" value="<?php echo $success_login_id; ?>" required="">

                <input type="hidden" class="form-control" id="comm_email" name="comm_email" value="<?php echo $success_login_email_admin; ?>" required=""><br>
                <?php } ?>
                <textarea class="form-control" name="comm_text" rows="6" required="" placeholder="Mensagem*"></textarea>
              </div>
              <button type="submit" name="save_comment" class="btn btn-primary">Submit</button>
            </form>
            
</div>
          </div>
        </div>
        <!-- Success Alert -->
    
        <script>
function myFunction() {
  alert("O seu comentário aguarda aprovação de um moderador e ficará visível após a sua aprovação!");
  document.getElementById("p11").innerHTML = '<label for="user_type" class="col-form-label"> User type:</label>';
  var messageSend = 1;
  //commentMessage();
}
</script>

