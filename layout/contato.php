    <!-- ======= Contact Section ======= -->
    <section class="contact" data-aos="fade-up" data-aos-easing="ease-in-out">
      <div class="container">

        <div class="row">

          <div class="col-lg-6">

            <div class="row">
              <div class="col-md-12">
                <div class="info-box">
                  <i class="bx bx-map"></i>
                  <h3>Endereço</h3>
                  <p>Rua Capitão Iporã, 255, Píco do Amor - Cuiabá/MT</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bx bx-envelope"></i>
                  <h3>Email</h3>
                  <p>agenciapontua@gmail.com</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bx bx-phone-call"></i>
                  <h3>Telefone</h3>
                  <p>(65) 9.9223-7570</p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">
            <form id="my-form"
  action="https://formspree.io/xlepojjp"
  method="POST"
 class="php-email-form">
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
                <div class="sent-message"><p id="my-form-status"></p></div>
              </div>
              <div class="text-center"><button type="submit" id="my-form-button">Enviar Mensagem</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

    <!-- ======= Map Section ======= -->
    <section class="map mt-2">
      <div class="container-fluid p-0">
        <iframe height="400" id="gmap_canvas" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3842.612073132159!2d-56.08514988574772!3d-15.61236182266181!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x939db1da3a92dea1%3A0x1c3ca769f358f478!2sTravessa%20Capit%C3%A3o%20Ipora%2C%20255%2C%20Cuiab%C3%A1%20-%20MT!5e0!3m2!1spt-BR!2sbr!4v1594647068152!5m2!1spt-BR!2sbr"></iframe>
      </div>
    </section><!-- End Map Section -->


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