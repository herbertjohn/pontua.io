<?php include("headerindex.php");  ?>
    <!-- ======= Hero Section ======= -->   
  <section id="hero"  class="d-flex justify-cntent-center align-items-center">
    <div id="heroCarousel" id="showcase" class="container carousel carousel-fade" data-ride="carousel">
      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Bem vindo à <span>Pontúa Digital</span></h2>
          <p class="animate__animated animate__fadeInUp">Soluções inteligentes na hora certa para sua marca, marque mais um ponto!</p>
          <a href="contato.php?page=contato.php" class="btn-get-started animate__animated animate__fadeInUp">Saber mais</a>
        </div>
      </div>
      <!-- Slide 2 -->
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Plano ideal para sua empresa</h2>
          <p class="animate__animated animate__fadeInUp">Com planos adaptáveis e dinâmicos para elevar o nível da sua marca.</p>
          <a href="contato.php?page=contato.php" class="btn-get-started animate__animated animate__fadeInUp">Saber mais</a>
        </div>
      </div>
      <!-- Slide 3 -->
      <div class="carousel-item">
       <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Aplicação web na hora certa!</h2>
          <p class="animate__animated animate__fadeInUp">Complemente sua presença digital com eficiência, peça aplicações web, sites institucionais, sites para evento, manutenção e atualização de sites em geral, templates novos e modernos.</p>
          <a href="contato.php?page=contato.php" class="btn-get-started animate__animated animate__fadeInUp">Saber mais</a>
        </div>
      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>

    </div>
  </section>
  <!-- End Hero -->

  <main id="main">
<?php include("layout/servicos_index.php") ?>

<?php include("layout/equipe.php") ?>

<?php include("layout/clientes.php") ?>

<?php include("layout/blog.php") ?>

 <!--================== Contact section =====================-->
<div id="contact">
  <div class=" text-center col-md-8 offset-md-2 col-sm-12 section-title">
        <!-- <span>Heros Behind The Company</span> -->
        <h2 class="teams-heading">Contato</h2>
      </div>
</div>
  <div id="contact" class="contact">
     <div class="map">
        <iframe height="400" id="gmap_canvas" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3842.612073132159!2d-56.08514988574772!3d-15.61236182266181!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x939db1da3a92dea1%3A0x1c3ca769f358f478!2sTravessa%20Capit%C3%A3o%20Ipora%2C%20255%2C%20Cuiab%C3%A1%20-%20MT!5e0!3m2!1spt-BR!2sbr!4v1594647068152!5m2!1spt-BR!2sbr"></iframe>
      </div>
           <div class="container">
          <div class="row">
            <div class="col-sm-6 col-md-5 offset-md-2 col-lg-6 offset-lg-0">
              <h1 class="contact-heading">Solicite um orçamento</h1>
              <p>
              </p><br>
                <div class="row margin-15px-bottom">
                    <div class="col-sm-1 no-padding">
                        <div class="contact-icon text-blue">
                            <i class="fa fa-map-marker fa-icon-image" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="col-sm-11">
                        <p class="text-small">Rua Capitão Iporã, 255,<br> Píco do Amor - Cuiabá/MT</p>
                    </div>
                </div>
                <div class="row margin-15px-bottom">
                    <div class="col-sm-1 no-padding">
                        <div class="contact-icon text-blue">
                            <i class="fa fa-phone fa-icon-image" aria-hidden="true"></i>
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
                            <i class="fa fa-globe fa-icon-image" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="col-sm-11 xs-margin-50px-bottom">
                        <p class="text-small">agenciapontua@gmail.com<br>www.pontuadigital.com.br</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-5 offset-md-2 col-lg-6 offset-lg-0">
              <!-- Starting of ajax contact form -->

<form id="my-form"
  action="https://formspree.io/xlepojjp"
  method="POST" class="php-email-form">
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Nome" data-rule="minlen:4" data-msg="Digite pelo menos 4 caracteres" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Email" data-rule="email" data-msg="Por favor digite um email válido" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Assunto" data-rule="minlen:4" data-msg="Digite pelo menos 8 caracteres do assunto" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Por favor escreva algo para nós" placeholder="Messagem"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Enviando</div>
                <div class="error-message"></div>
                <div class="sent-message">Sua mensagem foi enviada. Obrigado!</div>
              </div>
              <div class="text-center"><button type="submit" id="my-form-button">Enviar Mensagem</button></div>
            </form>
          </div>
        </div>
  </div>


  </div>
   <!-- End team Section -->
  </main><!-- End #main -->
<?php include("footer.php"); ?>



<!-- Place this script at the end of the body tag -->

<script>
  window.addEventListener("DOMContentLoaded", function() {

    // get the form elements defined in your form HTML above
    
    var form = document.getElementById("my-form");
    var button = document.getElementById("my-form-button");
    var status = document.getElementById("my-form-status");

    // Success and Error functions for after the form is submitted
    
    function success() {
      form.reset();
      button.style = "display: none ";
      status.innerHTML = "Thanks!";
    }

    function error() {
      status.innerHTML = "Oops! There was a problem.";
    }

    // handle the form submission event

    form.addEventListener("submit", function(ev) {
      ev.preventDefault();
      var data = new FormData(form);
      ajax(form.method, form.action, data, success, error);
    });
  });
  
  // helper function for sending an AJAX request

  function ajax(method, url, data, success, error) {
    var xhr = new XMLHttpRequest();
    xhr.open(method, url);
    xhr.setRequestHeader("Accept", "application/json");
    xhr.onreadystatechange = function() {
      if (xhr.readyState !== XMLHttpRequest.DONE) return;
      if (xhr.status === 200) {
        success(xhr.response, xhr.responseType);
      } else {
        error(xhr.status, xhr.response, xhr.responseType);
      }
    };
    xhr.send(data);
  }
</script>
