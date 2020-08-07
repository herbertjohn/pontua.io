<?php
// Prevent direct access to file
defined('shoppingcart') or exit;
// Get the 4 most recent added products
$stmt = $pdo->prepare('SELECT * FROM products ORDER BY date_added DESC LIMIT 4');
$stmt->execute();
$recently_added_products = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<?php include "admin/db_connection.php"; ?>
<?php include "layout/head.php"; ?>

                            <?=template_header('E-Tech')?>
								<!-- Banner -->
								<section id="banner">
																			
			
              
                   <div class="bss-slides num1" tabindex="1" autofocus="autofocus">
			            <figure>
					      <img src="images/pic11.jpg" width="100%" />
			            
			            </figure>
        	</div> <!-- // bss-slides --><!-- // content -->
               
          	

								</section>
								<!-- Banner -->
								<section id="banner">
									<div class="content">

										<header>
											<h1>E-Tech</h1>
											<p>No rastro da evolução technológica</p>
										</header>
										<p>Assistência técnica de technologias no geral, coletamos lixo eletrônico para descarte correto, compra e venda de peças de celulares, no site temos um banco de dados para cadastro de technologias ociosas para serem vendidas ou trocadas por outra peça por assistências técnicas ou pessoas competentes na área. </p>
										<ul class="actions">
											<li><a href="#" class="button big">Saber Mais</a></li>
										</ul>
									</div>
									<span class="image object">
										<img src="images/lixoeletronico.jpeg" alt="" />
									</span>
								</section>
							<!-- Section -->
								<section>
									<header class="major">
										<h2>Serviços</h2>
									</header>
									<div class="features">
										<article>
											<span class="icon fa-gem"></span>
											<div class="content">
												<h3>Assistência Técnica</h3>
												<p>Concertamos qualquer coisa</p>
											</div>
										</article>
										<article>
											<span class="icon solid fa-paper-plane"></span>
											<div class="content">
												<h3>Coleta Programada</h3>
												<p>Agende uma coleta de lixo eletrônico para descarte correto, muitos lixos eletrônicos possuem elementos quimicos que fazem mal para saúde humana e do meio ambiente.</p>
											</div>
										</article>
										<article>
											<span class="icon solid fa-rocket"></span>
											<div class="content">
												<h3>Limpeza de Laboratório</h3>
												<p></p>
											</div>
										</article>
										<article>
											<span class="icon solid fa-signal"></span>
											<div class="content">
												<h3>Compra e Venda</h3>
												<p>MarketPlace de Technologia</p>
											</div>
										</article>
									</div>
								</section>

							<!-- Section -->

    <!-- ======= Supporters Section ======= -->
    <section id="supporters" class="section-with-bg">

      <div class="container" data-aos="fade-up">
<header class="major">
	<h2>Parceiros E-Tech</h2>
</header>

        <div class="row no-gutters supporters-wrap clearfix" data-aos="zoom-in" data-aos-delay="100">

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="assets/img/supporters/1.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="assets/img/supporters/2.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="assets/img/supporters/3.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="assets/img/supporters/4.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="assets/img/supporters/5.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="assets/img/supporters/6.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="assets/img/supporters/7.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="assets/img/supporters/8.png" class="img-fluid" alt="">
            </div>
          </div>

        </div>

      </div>

    </section><!-- End Sponsors Section -->
									<section>
									<header class="major">
										<h2>Blog</h2>
									</header>

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

								
									<div class="posts">
										<article>
											<a href="post.php?postid=<?= $view_post_id; ?>" class="image"><img src="admin/images/blog/<?php  echo $view_post_image; ?>" alt="<?php echo $view_post_title; ?>" /></a>
											<h3><?php echo $view_post_title; ?></h3>
											<p><?php //echo $view_post_text; 
              echo substr($view_post_text, 0, 400) . "...";?></p>
											<ul class="actions">
												<li><a href="post.php?postid=<?= $view_post_id; ?>" class="button">Mais</a></li>
											</ul>
										</article>
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
								</section>


                      
</div></div>
<?php include("sidebar.php"); ?>
<?=template_footer()?>