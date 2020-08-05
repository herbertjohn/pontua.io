<?php
define('shoppingcart', true);
session_start();
// Include the configuration file, this contains settings you can change.
include 'config.php';
// Include functions and connect to the database using PDO MySQL
include 'functions.php';
// Connect to MySQL database
$pdo = pdo_connect_mysql();
// Output error variable
$error = '';
// Include the requested page
include $page . '.php';
// Prevent direct access to file
defined('shoppingcart') or exit;
// Get the 4 most recent added products
$stmt = $pdo->prepare('SELECT * FROM products ORDER BY date_added DESC LIMIT 4');
$stmt->execute();
$recently_added_products = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>


<?=template_header('Search')?>


<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<?=template_footer()?>
