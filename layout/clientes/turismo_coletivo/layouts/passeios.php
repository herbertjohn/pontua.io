    <!-- ======= Passeios Section ======= -->
    <section id="speakers">
      <div class="container recentlyadded content-wrapper" data-aos="fade-up">
        <div class="section-header">
          <h2>Passeios</h2>
          <p>Próximos passeios</p>
        </div>

        <div class="row"> <?php foreach ($recently_added_products as $product): ?>
          <div class="col-lg-4 col-md-6">
            <div class="speaker products" data-aos="fade-up" data-aos-delay="100">
               
              <img src="imgs/<?=$product['img']?>" alt="Speaker 1" class="img-fluid">
              <div class="details">
                <h3><a href="index.php?page=product&id=<?=$product['id']?>"><?=$product['name']?></a></h3>
            <span class="price">
                <?=currency_code?><?=number_format($product['price'],2)?>
                <?php if ($product['rrp'] > 0): ?>
                <span class="rrp"><?=currency_code?><?=number_format($product['rrp'],2)?></span>
                <?php endif; ?>
            </span>                <div class="social">
                  <a href=""><i class="fa fa-twitter"></i></a>
                  <a href=""><i class="fa fa-facebook"></i></a>
                  <a href=""><i class="fa fa-google-plus"></i></a>
                  <a href=""><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
              

            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>

    </section><!-- End Speakers Section -->