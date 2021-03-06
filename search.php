<?php include("header.php");  ?>
    <!-- ======= Blog Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Blog</h2>

          <ol>
            <li><a href="index.php">Home</a></li>
            <li><a href="blog.php">Blog</a></li>
            <li>Busca</li>
          </ol>
        </div>
      </div>
    </section><!-- End Blog Section -->

    <section class="blog" data-aos="fade-up" data-aos-easing="ease-in-out">
      <div class="container">

    <div class="row">

      <!-- Blog Entries Column -->
      <div class="col-md-8">

        <h1 class="my-4">Resultado Busca:
          <small></small>
        </h1>
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

                if (isset($_POST['search']))
              {
                 $search_text = $_POST['search_text'];
                 $sql_select_post = "SELECT * FROM posts WHERE post_status = 1 AND post_title LIKE '%$search_text%' OR post_text LIKE '%$search_text%' ORDER BY id DESC LIMIT {$start},{$no_posts_per_page}";
              
             
                  
              }
              else
              {
                  if (isset($_GET['search']))
                {
                   $search_text = $_GET['search'];
                   $sql_select_post = "SELECT * FROM posts WHERE post_status = 1 AND post_title LIKE '%$search_text%' OR post_text LIKE '%$search_text%' ORDER BY id DESC LIMIT {$start},{$no_posts_per_page}";
                
                 }
                  
              }

                $result_sql_select_post = mysqli_query($dbconnection, $sql_select_post);
                $search_counter = 0;
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

      <?php } ?>


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