<!-- ======= Blog Section ======= -->
    <section class="padd-sectio"  id="blog">
      <div class="container" data-aos="fade-up"><br>
        <div class="section-title text-center">
            <h2>Últimas do Blog</h2>
        </div>
        <div class="row" data-aos="fade-up">
<?php 
  include "admin/db_connection.php";
?>
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
          <div class="col-md-6 col-lg-4 bottom-space" style="border: 1">
	    <div class="block-blog text-left ">
		<div class="content-blog">
              <a href="post.php?postid=<?= $view_post_id; ?>">
                <img class="card-img-top" src="admin/images/blog/<?php  echo $view_post_image; ?>" alt="Card image cap">
              </a>
                <h4><a href="post.php?postid=<?= $view_post_id; ?>"><?php echo $view_post_title; ?></a></h4>
                <span> <?php echo $view_post_date; ?>

                </span>
                <a class="pull-right readmore" href="post.php?postid=<?= $view_post_id; ?>">ler mais</a>
              </div>
            </div>
          </div>
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
        </div>

    <div class="button box" style="text-align: center;">
      <br><br>
      <a href="blog.php?page=blog.php" class="get-started-btn">Mais Postagens</a>
    </div>

      </div>
    </section><!-- End Blog Section -->
