    <!-- ======= Subscribe Section ======= -->
    <section id="subscribe">
      <div class="container" data-aos="zoom-in">
        <div class="section-header">
          <h2>Newsletter</h2>
          <p>Receba novas postagens do blog sobre turismo.</p>
        </div>

        <form method="POST" action="#">
          <div class="form-row justify-content-center">
            <div class="col-auto">
              <input type="text" class="form-control" placeholder="Email">
            </div>
            <div class="col-auto">
              <button type="submit">Inscrever</button>
            </div>
          </div>
        </form>

      </div>
    </section><!-- End Subscribe Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="section-bg">

      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Contato</h2>
          <p>Entre em contato para maiores informações</p>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>Endereço</h3>
             <div class="social-links">
              <a href="https://twitter.com/turismocoletivo" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="https://facebook.com/turismocoletivo" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="https://instagram.com/turismocoletivo" class="instagram"><i class="fa fa-instagram"></i></a>
            </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>Telefone</h3>
              <p><a href="tel:+155895548855">+55 65 9.8407-8063</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3>Email</h3>
              <p><a href="mailto:info@example.com">contato.turismocoletivo@gmail.com</a></p>
            </div>
          </div>

        </div>

        <div class="form">
          <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="Nome" data-rule="minlen:4" data-msg="Digite pelo menos 4 caracteres" />
                <div class="validate"></div>
              </div>
              <div class="form-group col-md-6">
                <input type="email" class="form-control" name="email" id="email" placeholder="Email" data-rule="email" data-msg="Por favor digite um email válido" />
                <div class="validate"></div>
              </div>
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
              <div class="loading">Enviando</div>
              <div class="error-message"></div>
              <div class="sent-message">Sua mensagem foi enviada, Obrigado!</div>
            </div>
            <div class="text-center"><button type="submit">Enviar Mensagem</button></div>
          </form>
        </div>

      </div>
    </section><!-- End Contact Section -->