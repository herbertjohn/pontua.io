<?php include("header.php");  ?>
  <!-- ======= Blog Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Blog</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Blog</li>
          </ol>
        </div>

      </div>
    </section><!-- End Blog Section -->
  <?php
        if (isset($_GET["subscribed"])) {
          echo 
          '<div class="alert alert-success" >
                          <a href="#" class="close" data-dismiss="alert" aria-label="close"></a>
                         <strong>Inscrição Enviada!!! </strong><p> Obrigado por se inscreve. Vamos mantê-lo informado sobre as tendências de Marketing Digital.</p>
                    </div>'
          ;
        }
        elseif (isset($_GET["fail"])) {
          echo 
          '<div class="alert alert-danger" >
                          <a href="#" class="close" data-dismiss="alert" aria-label="close"></a>
                         <strong>Ooops!! </strong><p> Parece que você já está inscrito em nossa lista de e-mails :) </p>
                    </div>'
          ;
        }
      ?>  
    <!-- ======= Blog Section ======= -->
    <section class="blog" data-aos="fade-up" data-aos-easing="ease-in-out">
      <div class="container">

        <div class="row">

          <div class="col-lg-8 entries">

           <?php 
                $no_posts_per_page = 5;
                if (isset($_GET['page']))
                {
                  $page = $_GET['page'];
                }
                else
                {
                  $page = 1;
                }
                $start = $no_posts_per_page * $page - $no_posts_per_page;
                $sql_select_post = "SELECT * FROM posts WHERE post_status = 1 ORDER BY id desc LIMIT {$start} ,{$no_posts_per_page} ";
                $result_sql_select_post = mysqli_query($dbconnection, $sql_select_post);
                while ($rowpost = mysqli_fetch_assoc($result_sql_select_post))
                {
                  $view_post_id = $rowpost['id'];
                  $view_post_category = $rowpost['post_category'];
                  $view_post_title = $rowpost['post_title'];
                  $view_post_autor = $rowpost['post_autor'];
                  $view_post_date = $rowpost['post_date'];
                  $view_post_edit_date = $rowpost['post_edit_date'];
                  $view_post_image = $rowpost['post_image'];
                  $view_post_text = $rowpost['post_text'];
                  $view_post_tag = $rowpost['post_tag'];
                  $view_post_visit_counter = $rowpost['post_visit_counter'];
                  $view_post_status = $rowpost['post_status'];
                  $view_post_priority = $rowpost['post_priority'];
             ?>

            <article class="entry">

              <div class="entry-img">

                <img class="card-img-top" src="admin/images/blog/<?php  echo $view_post_image; ?>" alt="Card image cap">
              </div>

              <h2 class="entry-title">
               <a href="post.php?postid=<?= $view_post_id; ?>">    <?php echo $view_post_title; ?> </a>
              </h2>

              <div class="entry-meta">
                <ul>

                  <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> 
                    <?php echo $view_post_date; ?>
                  </li>
                 </ul>
              </div>

              <div class="entry-content">
                <p class="card-text">
              <?php //echo $view_post_text; 
              echo substr($view_post_text, 0, 400) . "...";?>
            </p>
                <div class="read-more">
<a href="post.php?postid=<?= $view_post_id; ?>" class="btn btn-primary">Ler mais &rarr;</a>
                </div>
              </div>

            </article><!-- End blog entry -->


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
                   

      <?php } ?>

<!-- Pagination -->
<div class="blog-pagination">
        <ul class="pagination justify-content-center mb-4">
          <li class="page-item">
            <?php 
                  $select_post_query = "SELECT * FROM posts WHERE post_status = 1";
                  $result_select_post_query = mysqli_query ($dbconnection, $select_post_query);
                  $sum_posts = mysqli_num_rows($result_select_post_query) ;
                  
                  $allpages = ceil($sum_posts / $no_posts_per_page);
                  
                if($page > 1)
                {
                  $previous= $page - 1;

               ?>
            <a class="page-link" href="blog.php?page=<?php echo $previous ?>"> <i class="icofont-rounded-left"></i></a>
             <?php } ?>
          </li>
          <li class="page-item">
            <?php 
                if ($page < $allpages)
                  {
                    $next= $page + 1;
              ?>
            <a class="page-link" href="blog.php?page=<?php echo $next ?>"><i class="icofont-rounded-right"></i></a>
            <?php } ?>
          </li>
        </ul>

      </div>
          </div><!-- End blog entries list -->

                    <!-- Sidebar Widgets Column -->
                    <?php include "layout/sidebar.php"; ?>

           </div><!-- End .row -->

      </div><!-- End .container -->

    </section><!-- End Blog Section -->

  <?php include("footer.php");  ?>
