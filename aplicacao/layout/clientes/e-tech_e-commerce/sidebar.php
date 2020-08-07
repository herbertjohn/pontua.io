<?php
// Prevent direct access to file
defined('shoppingcart') or exit;
// Get all the categories from the database
$stmt = $pdo->query('SELECT * FROM categories');
$stmt->execute();
$categories = $stmt->fetchAll(PDO::FETCH_ASSOC);
// Get the current category from the GET request, if none exists set the default selected category to: all
$category = isset($_GET['category']) ? $_GET['category'] : 'all';
$category_sql = '';
if ($category != 'all') {
    $category_sql = 'JOIN products_categories pc ON pc.category_id = :category_id AND pc.product_id = p.id JOIN categories c ON c.id = pc.category_id';
}
// Get the sort from GET request, will occur if the user changes an item in the select box
$sort = isset($_GET['sort']) ? $_GET['sort'] : 'sort3';
// The amounts of products to show on each page
$num_products_on_each_page = 3;
// The current page, in the URL this will appear as index.php?page=products&p=1, index.php?page=products&p=2, etc...
$current_page = isset($_GET['p']) && is_numeric($_GET['p']) ? (int)$_GET['p'] : 1;
// Select products ordered by the date added
if ($sort == 'sort1') {
    // sort1 = Alphabetical A-Z
    $stmt = $pdo->prepare('SELECT p.* FROM products p ' . $category_sql . ' ORDER BY p.name ASC LIMIT :page,:num_products');
} elseif ($sort == 'sort2') {
    // sort2 = Alphabetical Z-A
    $stmt = $pdo->prepare('SELECT p.* FROM products p ' . $category_sql . ' ORDER BY p.name DESC LIMIT :page,:num_products');
} elseif ($sort == 'sort3') {
    // sort3 = Newest
    $stmt = $pdo->prepare('SELECT p.* FROM products p ' . $category_sql . ' ORDER BY p.date_added DESC LIMIT :page,:num_products');
} elseif ($sort == 'sort4') {
    // sort4 = Oldest
    $stmt = $pdo->prepare('SELECT p.* FROM products p ' . $category_sql . ' ORDER BY p.date_added ASC LIMIT :page,:num_products');
} else {
    // No sort was specified, get the products with no sorting
    $stmt = $pdo->prepare('SELECT p.* FROM products p ' . $category_sql . ' LIMIT :page,:num_products');
}
// bindValue will allow us to use integer in the SQL statement, we need to use for LIMIT
if ($category != 'all') {
    $stmt->bindValue(':category_id', $category, PDO::PARAM_INT);
}
$stmt->bindValue(':page', ($current_page - 1) * $num_products_on_each_page, PDO::PARAM_INT);
$stmt->bindValue(':num_products', $num_products_on_each_page, PDO::PARAM_INT);
$stmt->execute();
// Fetch the products from the database and return the result as an Array
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);
// Get the total number of products
$stmt = $pdo->prepare('SELECT COUNT(*) FROM products p ' . $category_sql);
if ($category != 'all') {
    $stmt->bindValue(':category_id', $category, PDO::PARAM_INT);
}
$stmt->execute();
$total_products = $stmt->fetchColumn()
?>

                <!-- Sidebar -->
                    <div id="sidebar">
                        <div class="inner">

                           <!-- Menu -->
                                <nav id="menu">
                                    <header class="major"><a href="index.php">
                                        <h2><img class="product-img-large" src="favicon.ico" width="30px" alt="E-Tech"></h2></a>
                                    </header>
                                    <ul>
                                        <li><a href="index.php">Home</a></li>
                                        <li><a href="index.php?page=servicos">Serviços</a></li>
                                        <li><a href="index.php?page=products">Produtos</a></li>
                                        <li><a href="index.php?page=myaccount">Minha Conta</a></li>
                                        <li><a href="index.php?page=contato">Contato</a></li>
                                    </ul>
                                </nav>

                            <!-- Section -->

                                    <header class="major">
                                        <h2><?=$total_products?> Produtos Recentes</h2>
                                    </header>

                            <?php foreach ($products as $product): ?>
                                <section>                                     
                                    <div class="mini-posts">

                                        <article>

<a href="index.php?page=product&id=<?=$product['id']?>" class="image"><img src="imgs/<?=$product['img']?>" alt="<?=$product['name']?>" /></a>

<span class="name"><?=$product['name']?></span>
            <span class="price">
                R$ <?=number_format($product['price'],2)?>
                <?php if ($product['rrp'] > 0): ?>
                <span class="rrp">R$ <?=number_format($product['rrp'],2)?></span>
                <?php endif; ?>
            </span>
        </a>

                                        </article>
                                
                                    </div>
                                </section><?php endforeach; ?> 
                                 <ul class="actions stacked">   
                                       <li><a href="#" class="button fit">Mais Produtos</a></li>
                                   </ul> 
                            <!-- Section -->
                                <section>
                                    <header class="major">
                                        <h2>E-Tech</h2>
                                    </header>
                                    <p>Assistência técnica de technologias no geral, coletamos lixo eletrônico para descarte correto, compra e venda de peças de celulares, no site temos um banco de dados para cadastro de technologias ociosas para serem vendidas ou trocadas por outra peça por assistências técnicas ou pessoas competentes na área.</p>
                                        <ul class="contact">
                                        <li class="icon solid fa-envelope"><a href="#">thiagobrunholi70@gmail.com</a></li>
                                        <li class="icon solid fa-phone"><a href="https://api.whatsapp.com/send?phone=5565992105241"> (65) 9.9210-5241 </a></li>
                                        <li class="icon solid fa-home"><a href="https://goo.gl/maps/1Zh2m3WRTU9WjNm89">Rua A, Quadra 15, N 6, Mapim<br />
                                        Várzea Grande-MT, 78155-238</a></li>
                                    </ul>
                                </section>
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3842.3397941674493!2d-56.168493185147085!3d-15.626883889155518!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTXCsDM3JzM2LjgiUyA1NsKwMDknNTguNyJX!5e0!3m2!1spt-BR!2sbr!4v1594082219497!5m2!1spt-BR!2sbr" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" width="250px" tabindex="0"></iframe>
                            <!-- Footer -->
                                <div id="footer">
                                    <p class="copyright"> &copy;2020 E-Tech | Todos os direitos reservados. <br> 
                                        <br>
                                    Criado por: <a href="https://pontuadigital.com.br">Pontua Digital</a>.</p>
                                </div>

                        </div>
                    </div>