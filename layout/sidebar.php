<div class="col-md-4">
          <?php 
            if (!isset($_SESSION['type']))
            {
           ?>
        <?php 
            }
            else
            {
              $success_login_id = $_SESSION['id'];
              $success_login_name_admin = $_SESSION['name'];
              $success_login_username_admin = $_SESSION['username'];
              $success_login_email_admin = $_SESSION['email'];
              $success_login_type_password_admin = $_SESSION['password'];
              $success_login_gender_admin = $_SESSION['gender'];
              $success_login_image_admin = $_SESSION['image'];
              $success_login_code_admin = $_SESSION['code'];
              $success_login_status_admin = $_SESSION['status'];
              $success_login_type_admin = $_SESSION['type'];
              ?>

     <?php 
            }
          ?>
         <div>
            <div class="sidebar">
        <!-- Search Widget -->
        <h3 class="sidebar-title">Search</h3>
              <div class="sidebar-item search-form">
                <form action="search.php">
                  <input type="text">
                  <button type="submit"><i class="icofont-search"></i></button>
                </form>
              </div><!-- End sidebar search formn-->
 <h3 class="sidebar-title">Categories</h3>
              <div class="sidebar-item categories">
                <ul class="list-unstyled mb-0">
                  <?php 
                      $sql_select_category_wiget = "SELECT * FROM categories";
                      $result_sql_select_category_wiget = mysqli_query($dbconnection, $sql_select_category_wiget);

                       $category_counter= 0;
                        while ($rowcategory_wiget= mysqli_fetch_assoc( $result_sql_select_category_wiget)) 
                       {
                        $category_counter++;
                        $id_category_wiget = $rowcategory_wiget['id'];
                        $title_category_wiget = $rowcategory_wiget['cat_title'];
                   ?>
                  <li>
                    <a href="category.php?catid=<?=$id_category_wiget; ?>">
                       <?php 
                       if ($category_counter % 2 != 0)
                       {
                          echo $title_category_wiget;
                       }
                       ?>
                      </a>
                    </li>
                    <?php 
                        }
                    ?>
                </ul>
               <ul class="list-unstyled mb-0">
                  <?php 
                      $sql_select_category_wiget1 = "SELECT * FROM categories";
                      $result_sql_select_category_wiget1 = mysqli_query($dbconnection, $sql_select_category_wiget1);

                       $category_counter1= 0;
                        while ($rowcategory_wiget1= mysqli_fetch_assoc( $result_sql_select_category_wiget1)) 
                       {
                        $category_counter1++;
                        $id_category_wiget1 = $rowcategory_wiget1['id'];
                        $title_category_wiget1 = $rowcategory_wiget1['cat_title'];
                   ?>
                  <li>
                    <a href="category.php?catid=<?=$id_category_wiget1; ?>">
                       <?php 
                       if ($category_counter1 % 2 == 0)
                       {
                          echo $title_category_wiget1;
                       }
                    ?>
                      </a>
                    </li>
                    <?php 
                        }
                    ?>                  
                </ul>
              </div><!-- End sidebar categories-->
<h3 class="sidebar-title">Recent Posts</h3>
            <?php 
                $counter_popular= 0;
                $sql_select_post_popular = "SELECT * FROM posts WHERE post_status = 1 ORDER BY post_visit_counter DESC LIMIT 0,5";
                $result_sql_select_post_popular = mysqli_query($dbconnection, $sql_select_post_popular);
                while ($rowpost_popular = mysqli_fetch_assoc($result_sql_select_post_popular))
                {
                  $view_post_id_popular = $rowpost_popular['id'];
                  $view_post_category_popular = $rowpost_popular['post_category'];
                  $view_post_title_popular = $rowpost_popular['post_title'];
                  $view_post_autor_popular = $rowpost_popular['post_autor'];
                  $view_post_date_popular = $rowpost_popular['post_date'];
                  $view_post_edit_date_popular = $rowpost_popular['post_edit_date'];
                  $view_post_image_popular = $rowpost_popular['post_image'];
                  $view_post_text_popular = $rowpost_popular['post_text'];
                  $view_post_tag_popular = $rowpost_popular['post_tag'];
                  $view_post_visit_counter_popular = $rowpost_popular['post_visit_counter'];
                  $view_post_status_popular = $rowpost_popular['post_status'];
                  $view_post_priority_popular = $rowpost_popular['post_priority'];
                  $counter_popular++;
            ?>
              <div class="sidebar-item recent-posts">
                <div class="post-item clearfix">
                  <div class="card-body">
                    <div class="post-item clearfix">
            <img class="card-img-top" src="admin/images/blog/<?php echo $view_post_image_popular;?>" alt="<?php echo $view_post_image_popular;?>">
                  <h4>
                    <a href="post.php?postid=<?=$view_post_id_popular ?>"style="color: #32627b"><?php echo $view_post_title_popular; ?></a>
                  </h4>
              <time>  
                <i class="icofont-wall-clock"></i> 
                  <?php echo $view_post_date; ?>
              </time>
                </div>
   </div><!-- End sidebar recent posts-->
</div>
          <?php } ?>
        </div>
   </div>
 </div></div>