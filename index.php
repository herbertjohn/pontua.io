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
     <!-- ======= Contact Section ======= -->
    <section id="contact">
<div id="contact">

</div>

     <div class="contact-newsletter">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h4>Newsletter</h4>
            <p>Cadastre-se e receba notícias sobre Marketing Digital!</p>
          </div>
          <div class="col-lg-6">
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div>
<br><br><br>
  <div class=" text-center col-md-8 offset-md-2 col-sm-12 section-title">
        <!-- <span>Heros Behind The Company</span> -->
        <h2 class="teams-heading">Contato</h2>
      </div>

      <div class="container wow fadeInUp mt-5">
        <div class="row justify-content-center">

          <div class="col-lg-5 col-md-6">

            <div class="info">
              <div>
                <i class="fa fa-map-marker"></i>
                <p>Atendimento Online!</p>
              </div>

              <div>
                <i class="fa fa-envelope"></i>
                <p>agenciapontua@gmail.com</p>
              </div>

              <div>
                <i class="fa fa-phone"></i>
                <p>+55 65 9.8425-8904</p>
              </div>
            </div>

            <div class="social-links">

              <a href="https://www.facebook.com/pontuadigital" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="https://www.instagram.com/pontuadigital" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="https://api.whatsapp.com/send?phone=5565984258904" class="whatsapp"><i class="fa fa-whatsapp"></i></a>
            </div>

          </div>

          <div class="col-lg-5 col-md-8">
            <div class="form">
              <form id="my-form" action="https://formspree.io/xlepojjp" method="POST" role="form" class="php-email-form">
                <div class="form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Nome" data-rule="minlen:4" data-msg="Digite pelo menos 4 caracteres" />
                  <div class="validate"></div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Email" data-rule="email" data-msg="Por favor digite um email válido" />
                  <div class="validate"></div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Assunto" data-rule="minlen:4" data-msg="Digite pelo menos 8 caracteres do assunto" />
                  <div class="validate"></div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Por favor escreva algo para nós" placeholder="Mensagem"></textarea>
                  <div class="validate"></div>
                </div>
                <div class="mb-3">
                  <div class="loading">Loading</div>
                  <div class="sent-message">Sua mensagem foi enviada. Obrigado!</div>
                </div>
                <div class="text-center"><button id="my-form-button" type="submit">Enviar mensagem</button></div>
              </form>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

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
