<?php include("header.php");  ?>
    <!-- ======= Blog Section ======= -->
        <?php 
        if (isset($_GET['catid'])) 
        {
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

          $selected_category_page= $_GET['catid'];
          $sql_select_category_page = "SELECT * FROM categories WHERE id = {$selected_category_page}";
          $result_sql_select_category_page = mysqli_query($dbconnection, $sql_select_category_page);
                while ($rowcategorypage = mysqli_fetch_assoc($result_sql_select_category_page))
                {
                  $view_category_id = $rowcategorypage['id'];
                  $view_cat_title = $rowcategorypage['cat_title'];
                }
        }

         ?>
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Blog</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li><a href="blog.php">Blog</a></li>
            <li><?php echo $view_cat_title; ?></li>
          </ol>
        </div>
      </div>
    </section><!-- End Blog Section -->

<!-- Page Content -->
    <section class="blog" data-aos="fade-up" data-aos-easing="ease-in-out">
      <div class="container">

        <div class="row">

          <div class="col-lg-8 entries">

        <h1 class="my-4"><?php echo $view_cat_title; ?>
          <!-- <small>Secondary Text</small>-->
        </h1>
        <?php 
                $sql_select_post = "SELECT * FROM posts WHERE post_status = 1 AND post_category = {$selected_category_page} ORDER BY id desc LIMIT {$start} ,{$no_posts_per_page}";
                $result_sql_select_post = mysqli_query($dbconnection, $sql_select_post);
                $post_counter_for_category = 0;
                while ($rowpost = mysqli_fetch_assoc($result_sql_select_post))
                {
                  $post_counter_for_category++;
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
        <!-- Blog Post -->
<article class="entry">
        <div class="entry-img">
          <img class="card-img-top" src="admin/images/blog/<?php  echo $view_post_image; ?>" alt="Card image cap">
        </div>
          <div class="">
            <a href="post.php?postid=<?= $view_post_id; ?>">
            <h2 class="card-title"> <?php echo $view_post_title; ?></h2></a>
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
</article>
      <?php
       }

       if ($post_counter_for_category==0) {
         echo "<h1>Não há postagens nessa categoria!</h1>";
       }
       ?>


        <!-- Pagination -->
<div class="blog-pagination">
        <ul class="pagination justify-content-center mb-4">
          <li class="page-item">
            <?php 
                  $select_post_query = "SELECT * FROM posts WHERE post_status = 1 AND post_category = {$selected_category_page}";
                  $result_select_post_query = mysqli_query ($dbconnection, $select_post_query);
                  $sum_posts = mysqli_num_rows($result_select_post_query) ;
                  
                  $allpages = ceil($sum_posts / $no_posts_per_page);
                  
                if($page > 1)
                {
                  $previous= $page - 1;


                ?>
            <a class="page-link" href="category.php?catid=<?= $view_category_id; ?>&page=<?php echo $previous ?>">&larr; Previous</a>
             <?php } ?>
          </li>
          <li class="page-item">
            <?php 
                if ($page < $allpages)
                  {
                    $next= $page + 1;
              ?>
            <a class="page-link" href="category.php?catid=<?= $view_category_id; ?>&page=<?php echo $next ?>">Next &rarr;</a>
            <?php } ?>
          </li>
        </ul>

</div>
</div>
      <!-- Sidebar Widgets Column -->
      <?php include "layout/sidebar.php"; ?>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->


</section>

    <?php include("footer.php");  ?>