<?php
date_default_timezone_set('America/Sao_Paulo');

require_once('src/PHPMailer.php');
require_once('src/SMTP.php');
require_once('src/Exception.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;



?>


<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1"/>
    <meta name="author" content="Theme Industry">
    <!-- description -->
    <meta name="description" content="boltex">
    <!-- keywords -->
    <meta name="keywords" content="">
        <title>Pontúa</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700%7CRoboto%7CJosefin+Sans:100,300,400,500" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- <link rel="stylesheet" href="css/bootstrap3.min.css"> -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/cubeportfolio.min.css">
    <link rel="stylesheet" type="text/css" href="css/component.css" />

  </head>
  <body>
  <nav class="navbar navbar-expand-lg fixed-top activate-menu navbar-light bg-light">
    <a class="navbar-brand" href="#">Pontúa</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse"    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li >
          <a class="nav-link" href="#showcase">Home</a>
        </li>
        <li>
          <a class="nav-link" href="#features">Quem somos</a>
        </li>
        <li>
          <a class="nav-link" href="#services">Serviços</a>
        </li>
        

        <li>
          <a class="nav-link" href="#teams">Equipe</a>
        </li>
        
        
        <li>
          <a class="nav-link" href="#contact">Contato</a>
        </li>
      </ul>
    </div>
  </nav>


  <!--================ Showcase section ===================-->
  <div id="showcase">
    <div class="container showcase">
        <div class="full-width text-center showcase-caption mt-30">
          <h4>Obrigado pelo contato!</h4>
              <h1>Mensagem foi enviada.<a href="https://api.whatsapp.com/send?phone=5565992237570"> <i class="fa fa-whatsapp"></i></a></h1>
                  <p>PONTÚA DIGITAL</p>
                    <div class="showcase-button">
                      <a href="#features" class="button-style showcase-btn">
                        Voltar ao site.
                      </a>
                </div>
        </div>
      </div>
  </div>


 

  <!--================== Contact section =====================-->

  <div id="contact" class="contact">
      <div class="map">
        <iframe height="400" id="gmap_canvas" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3842.612073132159!2d-56.08514988574772!3d-15.61236182266181!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x939db1da3a92dea1%3A0x1c3ca769f358f478!2sTravessa%20Capit%C3%A3o%20Ipora%2C%20255%2C%20Cuiab%C3%A1%20-%20MT!5e0!3m2!1spt-BR!2sbr!4v1594647068152!5m2!1spt-BR!2sbr"></iframe>
      </div>
      <div class="container">
          <div class="row">
            <div class="col-sm-6 col-md-5 offset-md-2 col-lg-6 offset-lg-0">
              <h1 class="contact-heading">Solicite um orçamento</h1>
              <p>
              </p>

                <div class="row margin-15px-bottom">
                    <div class="col-sm-1 no-padding">
                        <div class="contact-icon text-blue">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="col-sm-11">
                        <p class="text-small">Rua Capitão Iporã, 255,<br> Píco do Amor - Cuiabá/MT</p>
                    </div>
                </div>

                <div class="row margin-15px-bottom">
                    <div class="col-sm-1 no-padding">
                        <div class="contact-icon text-blue">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="col-sm-11">
                        <p class="text-small">
                         <a href="https://api.whatsapp.com/send?phone=5565992237570"> (65) 9.9223-7570</a><br><a href="https://api.whatsapp.com/send?phone=5565992216726">(65) 9.9221-6726</a></p>
                    </div>
                </div>

                <div class="row margin-15px-bottom">
                    <div class="col-sm-1 no-padding">
                        <div class="contact-icon text-blue">
                            <i class="fa fa-globe" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="col-sm-11 xs-margin-50px-bottom">
                        <p class="text-small">agenciapontua@gmail.com<br>www.pontuadigital.com.br</p>
                    </div>
                </div>


            </div>


            <div class="col-sm-6 col-md-5 offset-md-2 col-lg-6 offset-lg-0">
              <!-- Starting of ajax contact form -->
    <form class="contact__form" method="post" action="">
      <!-- Element of the ajax contact form -->
      <div class="row">
          <div class="col-md-6 form-group">
              <input name="nome" type="text" class="form-control" placeholder="Nome" required>
          </div>
          <div class="col-md-6 form-group">
              <input name="email" type="email" class="form-control" placeholder="Email" required>
          </div>
          <div class="col-md-6 form-group">
              <input name="phone" type="text" class="form-control" placeholder="Celular" required>
          </div>
          <div class="col-md-6 form-group">
              <input name="subject" type="text" class="form-control" placeholder="Endereço"t required>
          </div>
          <div class="col-12 form-group">
              <textarea name="mensagem" class="form-control" rows="3" placeholder="Mensagem" required></textarea>
          </div>
          <div class="col-12">
              <input name="submit" onclick="funcao1()" type="submit" class="button-style" value="Enviar mensagem">
          </div>
      </div>
      

    </form>
<!-- Ending of ajax contact form -->
  <!-- Starting of successful form message -->
      <div class="row">
          <div class="col-12">
              <?php 
if((isset($_POST['email']) && !empty(trim($_POST['email']))) && (isset($_POST['mensagem']) && !empty(trim($_POST['mensagem'])))) {

  $nome = !empty($_POST['nome']) ? $_POST['nome'] : 'Não informado';
  $email = $_POST['email'];
  $assunto = !empty($_POST['assunto']) ? utf8_decode($_POST['assunto']) : 'Não informado';
  $mensagem = $_POST['mensagem'];
  $data = date('d/m/Y H:i:s');

  $mail = new PHPMailer();
  $mail->isSMTP();
  $mail->Host = 'smtp.gmail.com';
  $mail->SMTPAuth = true;
  $mail->Username = 'agenciapontua@gmail.com';
  $mail->Password = 'comunicacao';
  $mail->Port = 587;
 
  $mail->setFrom('agenciapontua@gmail.com');
  $mail->addAddress('agenciapontua@gmail.com');

  $mail->isHTML(true);
  $mail->Subject = $assunto;
  $mail->Body = "Nome: {$nome}<br>
           Email: {$email}<br>
           Mensagem: {$mensagem}<br>
           Data/hora: {$data}";

  if($mail->send()) {
    echo 'Email enviado com sucesso.';
  } else {
    echo 'Email não enviado.';
  }
} 
               ?>
          </div>
      </div>
      <!-- Ending of successful form message -->
          </div>
        </div>
  </div>
  </div>
  <footer class="text-center pos-re">
    <div class="container">
      <div class="footer__box">
        <!-- Logo -->
        <a class="logo">
            <h2 style="color: #ffffff">PONTÚA</h2>
        </a>

        <div class="social">
            <a href="https://www.instagram.com/pontuadigital/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
            <a href="https://api.whatsapp.com/send?phone=5565992237570"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
        </div>

        <p>&copy; 2020 Pontúa. Todos os direitos reservados.</p>
      </div>
    </div>

    <div class="curve curve-top curve-center"></div>

  
  

</footer>

  <script src="./js/jquery.min.js"></script>
  <script src="./js/modernizr.custom.js"></script>
  <script src="./js/bootstrap.min.js"></script>
  <script src="./js/slick.min.js"></script>
  <script src="./js/scrollreveal.min.js"></script>
  <script src="./js/jquery.cubeportfolio.min.js"></script>
  <script src="./js/jquery.matchHeight-min.js"></script>
  <script src="./js/masonry.pkgd.min.js"></script>
  <script src="./js/jquery.flexslider-min.js"></script>
  <script src="./js/classie.js"></script>
  <script src="./js/helper.js"></script>
  <script src="./js/grid3d.js"></script>
  <script src="./js/script.js"></script>


</body>
</html>