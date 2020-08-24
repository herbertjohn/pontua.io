<?php 
  include "admin/db_connection.php";
?>
     <?php 
      if (isset($_GET['postid'])) 
      {
        $selected_post_page= $_GET['postid'];

                $sql_select_post_page = "SELECT * FROM posts WHERE id={$selected_post_page}";
                $result_sql_select_post_page = mysqli_query($dbconnection, $sql_select_post_page);
                while ($rowpostpage = mysqli_fetch_assoc($result_sql_select_post_page))
                {
                  $view_post_id = $rowpostpage['id'];
                  $view_post_category = $rowpostpage['post_category'];
                  $view_post_title = $rowpostpage['post_title'];
                  $view_post_autor = $rowpostpage['post_autor'];
                  $view_post_date = $rowpostpage['post_date'];
                  $view_post_edit_date = $rowpostpage['post_edit_date'];
                  $view_post_image = $rowpostpage['post_image'];
                  $view_post_text = $rowpostpage['post_text'];
                  $view_post_tag = $rowpostpage['post_tag'];
                  $view_post_visit_counter = $rowpostpage['post_visit_counter'];
                  $view_post_status = $rowpostpage['post_status'];
                  $view_post_priority = $rowpostpage['post_priority'];
                }
      }
      else
      {
        header("Location: index.php");
      }


       ?>

<?php
      
      if (isset($_GET['postid'])) 
      {
        $edit_post_id_visit=$_GET['postid'];

        $sql_select_post_visit = "SELECT * FROM posts WHERE id={$edit_post_id_visit}";
                $result_sql_select_post_visit = mysqli_query($dbconnection, $sql_select_post_visit);
                while ($rowpost_visit = mysqli_fetch_assoc($result_sql_select_post_visit))
                {
                  
                  $view_post_visit_counter_all_visits = $rowpost_visit['post_visit_counter'];

                }


        $sql_edit_post_visit = "UPDATE posts SET post_visit_counter='$view_post_visit_counter_all_visits'+1 WHERE id={$edit_post_id_visit}";
        $result_sql_edit_post_visit= mysqli_query($dbconnection, $sql_edit_post_visit);
        if (!$result_sql_edit_post_visit)
                {
                   die("Error description:" . mysqli_error());
                }
                else
                {
                  //echo "Data added successfully";
                  //header("Location: post_admin.php");
                }
      }
     ?>


<?php include("header.php");  ?>


    <!-- ======= Blog Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Blog</h2>

          <ol>
            <li><a href="index.php">Home</a></li>
            <li><a href="blog.php">Blog</a></li>
            <li><?php echo $view_post_title ?></li>
          </ol>
        </div>

      </div>
    </section><!-- End Blog Section -->

    <!-- ======= Blog Section ======= -->
    <section class="blog" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
      <div class="container">

        <div class="row">

          <div class="col-lg-8 entries">

                        <article class="entry entry-single">
              <div class="entry-img">
                <img class="img-fluid rounded" src="admin/images/blog/<?php  echo $view_post_image; ?>" alt="">
              </div>

              <h2 class="entry-title">
                <h1 class="mt-4"><?php echo $view_post_title ?></h1>
              </h2>

              <div class="entry-meta">
                <ul>
              

                  <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> 
                    <?php echo $view_post_date; ?>
                </li>
                  

                </ul>
              </div>

              <div class="entry-content">
                <p>
           <p class="lead"><?php echo $view_post_text; ?></p>

                </p>

              </div>

              <div class="entry-footer clearfix">
                <div class="float-left">


                </div>
              </div>


            </article>














            <div class="blog-author clearfix">

          <?php 
                $sql_select_users_article = "SELECT * FROM users WHERE id={$view_post_autor}";
                $result_sql_select_users_article = mysqli_query($dbconnection, $sql_select_users_article);
                while ($rowusers_article = mysqli_fetch_assoc($result_sql_select_users_article))
                {
                  $view_users_id = $rowusers_article['id'];
                  $view_users_name = $rowusers_article['name'];
                  $view_users_image = $rowusers_article['image'];
                } 
             ?>
      <p class="lead">
         <img src="admin/images/users/<?php echo $view_users_image; ?>" class="zoom3" alt="User Image" width="50" align="left" hspace="5">
            Por: <?php echo $view_users_name; ?>
          
        </p>
            </div><!-- End blog author bio -->












    <a href="" id="whatsapp-share-btt" rel="nofollow" target="_blank" class="whatsapp-share-button"></a>
    <a href="" id="facebook-share-btt" rel="nofollow" target="_blank" class="facebook-share-button"></a>
    <a href="" id="linkedin-share-btt" rel="nofollow" target="_blank" class="linkedin-share-button"></a>
    <a href="" id="telegram-share-btt" rel="nofollow" target="_blank" class="telegram-share-button"></a>    
    <a href="" id="twitter-share-btt" rel="nofollow" target="_blank" class="twitter-share-button"></a>
    <a href="" id="mail-share-btt" rel="nofollow" target="_blank" class="mail-share-button"></a>    
    <a href="" id="mail-share-btt" rel="nofollow" target="_blank" class="mail-share-button"></a>   





            <div class="blog-comments">

              <!-- Single Comment -->
        <?php include "layout/comments.php" ?>


              <!-- End comment #4 -->

              
               <!-- Comments Form -->
            <?php include "layout/comment_form.php" ?>

            </div><!-- End blog comments -->

          </div><!-- End blog entries list -->

          <!-- Sidebar Widgets Column -->
        <?php include "layout/sidebar.php"; ?>

        </div><!-- End row -->

      </div><!-- End container -->

    </section><!-- End Blog Section -->
  <!-- whatsapp -->
    <script type="text/javascript">
        //Constrói a URL depois que o DOM estiver pronto
        document.addEventListener("DOMContentLoaded", function() {
            //conteúdo que será compartilhado: Título da página + URL
            var conteudo = encodeURIComponent(document.title + " " + window.location.href);
            //altera a URL do botão
            document.getElementById("whatsapp-share-btt").href = "https://api.whatsapp.com/send?text=" + conteudo;
        }, false);
    </script>

  <!-- email -->
    <script type="text/javascript">
        //Constrói a URL depois que o DOM estiver pronto
        document.addEventListener("DOMContentLoaded", function() {
            var url = encodeURIComponent(window.location.href); //url
            var title = encodeURIComponent(document.title); //título
            //link de compartilhamento do AddThis
            var shareLinkAddThis = "https://api.addthis.com/oexchange/0.8/forward/email/offer?url="+url+"&title="+title;
            document.getElementById("mail-share-btt").href = shareLinkAddThis;
        }, false);
    </script>

  <!-- emai2 -->
    <script type="text/javascript">
        //Constrói a URL depois que o DOM estiver pronto
        document.addEventListener("DOMContentLoaded", function() {
            var url = window.location.href; //url
            var title = encodeURIComponent(document.title); //título
            var mailToLink = "mailto:?subject="+title;
            
            //tenta obter o conteúdo da meta tag description
            var desc = document.querySelector("meta[name='description']");            
            desc = (!!desc)? desc.getAttribute("content") : null;
            
            //se a meta tag description estiver ausente...
            if(!desc){
                //...tenta obter o conteúdo da meta tag og:description
                desc = document.querySelector("meta[property='og:description']");
                desc = (!!desc)? desc.getAttribute("content") : null;
            }
            //Se houver descrição, combina a descrição com a url
            //senão o corpo da mensagem terá apenas a url
            var body = (!!desc)? desc + " " + url : url;
            //altera o link do botão
            mailToLink = mailToLink + "&body=" + encodeURIComponent(body);
            document.getElementById("mail-share-btt").href = mailToLink;
        }, false);
    </script>
  <!-- facebook -->
      <script type="text/javascript">
        //Constrói a URL depois que o DOM estiver pronto
        document.addEventListener("DOMContentLoaded", function() {            
            //altera a URL do botão
            document.getElementById("facebook-share-btt").href = "https://www.facebook.com/sharer/sharer.php?u=" + encodeURIComponent(window.location.href);
        }, false);
    </script>
  <!-- twitter -->
    <script type="text/javascript">
        //Constrói a URL depois que o DOM estiver pronto
        document.addEventListener("DOMContentLoaded", function() {
            var url = encodeURIComponent(window.location.href);
            var titulo = encodeURIComponent(document.title);
            //var via = encodeURIComponent("usuario-twitter"); //nome de usuário do twitter do seu site
            //altera a URL do botão
            document.getElementById("twitter-share-btt").href = "https://twitter.com/intent/tweet?url="+url+"&text="+titulo;
            
            //se for usar o atributo via, utilize a seguinte url
            //document.getElementById("twitter-share-btt").href = "https://twitter.com/intent/tweet?url="+url+"&text="+titulo+"&via="+via;
        }, false);
    </script>
  <!-- LinkedIn -->
      <script type="text/javascript">
        //Constrói a URL depois que o DOM estiver pronto
        document.addEventListener("DOMContentLoaded", function() {
            var url = encodeURIComponent(window.location.href); //url
            var titulo = encodeURIComponent(document.title); //título
            var linkedinLink = "https://www.linkedin.com/shareArticle?mini=true&url="+url+"&title="+titulo;
            
            //tenta obter o conteúdo da meta tag description
            var summary = document.querySelector("meta[name='description']");            
            summary = (!!summary)? summary.getAttribute("content") : null;
            
            //se a meta tag description estiver ausente...
            if(!summary){
                //...tenta obter o conteúdo da meta tag og:description
                summary = document.querySelector("meta[property='og:description']");
                summary = (!!summary)? summary.getAttribute("content") : null;
            }
            //altera o link do botão
            linkedinLink = (!!summary)? linkedinLink + "&summary=" + encodeURIComponent(summary) : linkedinLink;
            document.getElementById("linkedin-share-btt").href = linkedinLink;
        }, false);
    </script>
  <!-- Pinterest -->
  <!-- Telegram -->
    <script type="text/javascript">
        //Constrói a URL depois que o DOM estiver pronto
        document.addEventListener("DOMContentLoaded", function() {
            var url = encodeURIComponent(window.location.href); //url
            var title = encodeURIComponent(document.title); //título
            var telegramLink = "https://telegram.me/share/url?url=" + url + "&text=" + title;
            document.getElementById("telegram-share-btt").href = telegramLink;
        }, false);
    </script>
    <?php include("footer.php");  ?>