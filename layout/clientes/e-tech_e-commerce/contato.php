<?php
// Prevent direct access to file
defined('shoppingcart') or exit;
// Get the 4 most recent added products
$stmt = $pdo->prepare('SELECT * FROM products ORDER BY date_added DESC LIMIT 4');
$stmt->execute();
$recently_added_products = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<?=template_header('Contato/E-Tech')?>


<br><br>


<div class="col-lg-6">
            <form action="https://formspree.io/moqkklln" method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Nome" data-rule="minlen:4" data-msg="Digite pelo menos 4 caracteres" />
                  <div class="validate"></div><br>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Email" data-rule="email" data-msg="Por favor digite um email válido" />
                  <div class="validate"></div><br>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Assunto" data-rule="minlen:4" data-msg="Digite pelo menos 8 caracteres do assunto" />
                <div class="validate"></div><br>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Por favor escreva algo para nós" placeholder="Messagem"></textarea>
                <div class="validate"></div><br>
              </div>
              
              <div class="text-center"><button type="submit">Enviar Mensagem</button></div>
            </form>
          </div>

  
                            
</div></div>
<?php include("sidebar.php"); ?>
<?=template_footer()?>