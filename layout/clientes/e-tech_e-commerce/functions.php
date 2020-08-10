<?php
// Function that will connect to the MySQL database
function pdo_connect_mysql() {
    try {
        // Connect to the MySQL database using PDO...
    	return new PDO('mysql:host=' . db_host . ';dbname=' . db_name . ';charset=utf8', db_user, db_pass);
    } catch (PDOException $exception) {
    	// Could not connect to the MySQL database, if this error occurs make sure you check your db settings are correct!
    	exit('Failed to connect to database!');
    }
}
// Function to retrieve a product from cart by the ID and options string
function &get_cart_product($id, $options) {
    if (!isset($_SESSION['cart'])) {
        return null;
    } else {
        foreach ($_SESSION['cart'] as &$product) {
            if ($product['id'] == $id && $product['options'] == $options) {
                return $product;
            }
        }
    }
    return null;
}
// Template header, feel free to customize this
function template_header($title) {
// Get the amount of items in the shopping cart, this will be displayed in the header.
$num_items_in_cart = isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0;
$site_name = site_name;
$admin_link = isset($_SESSION['account_loggedin']) && $_SESSION['account_admin'] ? '<a href="admin/index.php" target="_blank">Admin</a>' : '';
$logout_link = isset($_SESSION['account_loggedin']) ? '<a title="Logout" href="index.php?page=logout"><i class="fas fa-sign-out-alt"></i></a>' : '';
echo <<<EOT
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,minimum-scale=1 user-scalable=no">
		<title>$title</title>
        <link rel="icon" type="image/png" href="favicon.png">
		<link href="style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
        <link rel="stylesheet" href="assets/css/main.css" />

        <link rel="stylesheet" href="css/simple-slideshow-styles.css">
	</head>
<body class="is-preload">
<div id="wrapper">
                    <div id="main">
                        <div class="inner">
        <header id="header">
            <h1>E-Tech</h1>

            $admin_link

                <div class="link-icons">
                    <div class="search">
						<i class="fas fa-search"></i>
						<input type="text" placeholder="Search...">
				

                    <a href="index.php?page=cart" title="Shopping Cart">
						<i class="fas fa-shopping-cart"><span>$num_items_in_cart</span></i>
						
					</a>

   <a href="index.php?page=myaccount">
                  <i class="fa fa-user"></i>
                  </a></div>
                    $logout_link
                </div>

        </header>
        <main>
            

EOT;
}
// Template footer
function template_footer() {
$year = date('Y');
echo <<<EOT



            </div>
        </main>
       
        <script src="script.js"></script>

        <!-- Scripts -->
            <script src="assets/js/jquery.min.js"></script>
            <script src="assets/js/browser.min.js"></script>
            <script src="assets/js/breakpoints.min.js"></script>
            <script src="assets/js/util.js"></script>
            <script src="assets/js/main.js"></script>

              <script src="blog-template/vendor/jquery/jquery.min.js"></script>
  <script src="blog-template/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="slideshow/js/hammer.min.js"></script><!-- for swipe support on touch interfaces -->
<script src="js/better-simple-slideshow.min.js"></script>
<script>
var opts = {
    auto : {
        speed : 3500, 
        pauseOnHover : true
    },
    fullScreen : false, 
    swipe : true
};
makeBSS('.num1', opts);

var opts2 = {
    auto : false,
    fullScreen : true,
    swipe : true
};
makeBSS('.num2', opts2);
</script> 

    </body>

</html>

EOT;
}
// Template admin header
function template_admin_header($title) {
echo <<<EOT
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,minimum-scale=1">
		<title>$title</title>
        <link rel="icon" type="image/png" href="../favicon.ico">
		<link href="admin.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>
	<body class="admin">
        <header>
            <h1>Shopping Cart Admin</h1>
            <a class="responsive-toggle" href="#">
                <i class="fas fa-bars"></i>
            </a>
        </header>
        <aside class="responsive-width-100 responsive-hidden">
            <a href="index.php?page=orders"><i class="fas fa-shopping-cart"></i>Orders</a>
            <a href="index.php?page=products"><i class="fas fa-box-open"></i>Products</a>
            <a href="index.php?page=categories"><i class="fas fa-list"></i>Categories</a>
            <a href="index.php?page=accounts"><i class="fas fa-users"></i>Accounts</a>
            <a href="index.php?page=images"><i class="fas fa-images"></i>Upload Images</a>
            <a href="index.php?page=settings"><i class="fas fa-tools"></i>Settings</a>
            <a href="index.php?page=logout"><i class="fas fa-sign-out-alt"></i>Log Out</a>
        </aside>
        <main class="responsive-width-100">
EOT;
}
// Template admin footer
function template_admin_footer() {
echo <<<EOT
        </main>
        <script>
        document.querySelector(".responsive-toggle").onclick = function(event) {
            event.preventDefault();
            let aside_display = document.querySelector("aside").style.display;
            document.querySelector("aside").style.display = aside_display == "flex" ? "none" : "flex";
        };
        </script>
    </body>
</html>
EOT;
}
?>
