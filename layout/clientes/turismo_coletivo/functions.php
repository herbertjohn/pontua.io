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
function template_index_header($title) {
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
    <meta name="viewport" content="width=device-width,minimum-scale=1">
    <title>$title</title>
    <link href="style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">


  <meta content="" name="descriptison">
  <meta content="" name="keywords">


  <link href="favicon.ico" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  </head>
  <body>
        <header id="header">
    <div class="container" class="content-wrapper">

      <div id="logo" class="pull-left">
        <a href="index.php" class="scrollto"><img src="imgs/logo_turismo_coletivo.png" alt="Turismo Coletivo" title="Turismo Coletivo"></a>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="index.php">Home</a></li>
          <li><a href="#about">Sobre</a></li>
          <li><a href="index.php?page=products">Passeios</a></li>
          <li><a href="#schedule">Pacotes</a></li>
          <li><a href="calendario.php">Calendário</a></li>
          <li><a href="hotels.php">Hotels/Pousadas</a></li>
          <li><a href="#contact">Contato</a></li>
          <li class="buy-tickets">$admin_link</li>
          <li></li>
          <li></li>
          <li></li>
        </ul>
                        <div class="link-icons">
          <div class="search">
            <i class="fas fa-search"></i>
            <input type="text" placeholder="Search...">
          </div>
          <a href="index.php?page=myaccount">
                  <i class="fa fa-user"></i>
                  </a>
            <a href="index.php?page=cart" title="Shopping Cart">
            <i class="fas fa-shopping-cart"></i>
            <span>$num_items_in_cart</span>
            </a>
                    $logout_link
                </div>
      </nav><!-- #nav-menu-container -->


      </header>

        <main>
EOT;
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
		<meta name="viewport" content="width=device-width,minimum-scale=1">
		<title>$title</title>
		<link href="style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">


  <meta content="" name="descriptison">
  <meta content="" name="keywords">


  <link href="favicon.ico" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
	</head>
	<body>
        <header id="header">
    <div class="container" class="content-wrapper">

      <div id="logo" class="pull-left">
        <a href="index.php" class="scrollto"><img src="imgs/logo_turismo_coletivo.png" alt="Turismo Coletivo" title="Turismo Coletivo"></a>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="index.php">Home</a></li>
          <li><a href="index.php?page=#about">Sobre</a></li>
          <li><a href="index.php?page=products">Passeios</a></li>
          <li><a href="index.php?page=#schedule">Pacotes</a></li>
          <li><a href="calendario.php">Calendário</a></li>
          <li><a href="hotels.php">Hotels/Pousadas</a></li>
          <li><a href="index.php?page=#contact">Contato</a></li>
          <li class="buy-tickets">$admin_link</li>
          <li></li>
          <li></li>
          <li></li>
        </ul>
                        <div class="link-icons">
          <div class="search">
            <i class="fas fa-search"></i>
            <input type="text" placeholder="Search...">
          </div>
          <a href="index.php?page=myaccount">
                  <i class="fa fa-user"></i>
                  </a>
            <a href="index.php?page=cart" title="Shopping Cart">
            <i class="fas fa-shopping-cart"></i>
            <span>$num_items_in_cart</span>
            </a>
                    $logout_link
          <a class="responsive-toggle" href="#">
            <i class="fas fa-bars"></i>
          </a>
                </div>
      </nav><!-- #nav-menu-container -->


      </header>

        <main>
EOT;
}
// Template footer
function template_footer() {
$year = date('Y');
echo <<<EOT
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <img src="imgs/logo_turismo_coletivo.png" alt="Turismo Coletivo">
            <p>Marketplace de passeios turisticos em Mato Grosso.</p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Mapa do Site</h4>
            <ul>
              <li><i class="fa fa-angle-right"></i> <a href="index.php">Home</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="index.php?page=#about">Sobre</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">Cadastro de Agências</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="index.php">Termos e Serviços</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="index.php">Política de Privacidade</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Mapa do Site</h4>
            <ul>
              <li><i class="fa fa-angle-right"></i> <a href="index.php?page=products">Passeios</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">Calendário</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">Blog</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="index.php?page=myaccount">Meus Passeios </a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contato</h4>
            <p>
              Mato Grosso <br>
              Brasil <br>
              <strong>Phone:</strong> +55 9.8407-8063<br>
              <strong>Email:</strong> contato.turismocoletivo@gmail.com<br>
            </p>

            <div class="social-links">
              <a href="https://twitter.com/turismocoletivo" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="https://facebook.com/turismocoletivo" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="https://instagram.com/turismocoletivo" class="instagram"><i class="fa fa-instagram"></i></a>
            </div>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; 2020 <strong>Turismo Coletivo</strong>. Todos os direitos reservados
      </div>
      <div class="credits">
        Criado por: <a href="https://pontuadigital.com.br">Pontúa Digital</a>
      </div>
      
    </div>
  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/superfish/superfish.min.js"></script>
  <script src="assets/vendor/hoverIntent/hoverIntent.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

        <script src="script.js"></script>
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
        <link rel="icon" type="image/png" href="../favicon.png">
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
