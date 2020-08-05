<?php
// Prevent direct access to file
defined('shoppingcart') or exit;
// Get the 4 most recent added products
$stmt = $pdo->prepare('SELECT * FROM products ORDER BY date_added DESC LIMIT 4');
$stmt->execute();
$recently_added_products = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
                            <?=template_header('Serviços/E-Tech')?>

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

                            
</div></div>
<?php include("sidebar.php"); ?>
<?=template_footer()?>