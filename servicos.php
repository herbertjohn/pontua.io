    <?php include("header.php"); ?>
    <!-- ======= Our Portfolio Section ======= -->

    <section class="breadcrumbs">
      <div class="container">
        <div class="d-flex justify-content-between align-items-center">
          <h2>Serviços</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Serviços</li>
          </ol>
        </div>
      </div>
    </section><!-- End Our Portfolio Section -->
      <?php
        if (isset($_GET["sent"])) {
          echo 
          '<div class="alert alert-success" style="text-align: center;">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Mensagem enviada!!! </strong><p> Obrigado pela sua mensagem. Entraremos em contato com você o mais breve possível.</p>
        </div>'
          ;
        }
      ?>
    <?php include("layout/servicos.php"); ?>
    <?php include("footer.php"); ?>