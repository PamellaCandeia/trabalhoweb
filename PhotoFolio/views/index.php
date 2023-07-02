<?php
     require_once 'includes/cabecalho.inc';
?>

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex flex-column justify-content-center align-items-center" data-aos="fade" data-aos-delay="1500">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6 text-center">
          <h2>Bem Vindo à Drink's</h2>
          <p>Refresque seu paladar com a nossa seleção de bebidas, onde sabor e qualidade se encontram em cada gole!</p>
          <a href="formLogin.php" class="btn-get-started">Seja nosso Cliente!</a>
        </div>
      </div>
    </div>
  </section><!-- End Hero Section -->

  <main id="main" data-aos="fade" data-aos-delay="1500">

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
      <div class="container-fluid">

        <div class="row gy-4 justify-content-center">
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="assets/img/gallery/vinhos.jpg" class="img-fluid" alt="Vinhos">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                
                <a href="ExibicaoParaVenda.php" class="details-link"><h1 class="details-link"> Vinhos </h1></a>
              </div>
            </div>
          </div><!-- End Gallery Item -->
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="assets/img/gallery/cerveja.jpg" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="ExibicaoParaVenda.php" class="details-link"><h1 class="details-link"> Alcóolicos </h1></a>
              </div>
            </div>
          </div><!-- End Gallery Item -->
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="assets/img/gallery/Refrigerante.jpg" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
              <a href="ExibicaoParaVenda.php" class="details-link"><h1 class="details-link"> Refrigerantes </h1></a>
              </div>
            </div>
          </div><!-- End Gallery Item -->
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="assets/img/gallery/Sucos.jpg" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
              <a href="ExibicaoParaVenda.php" class="details-link"><h1 class="details-link"> Sucos </h1></a>
              </div>
            </div>
          </div><!-- End Gallery Item -->
        </div>

      </div>
    </section><!-- End Gallery Section -->

  </main><!-- End #main -->


<?php

  require_once './includes/rodape.inc';

?>