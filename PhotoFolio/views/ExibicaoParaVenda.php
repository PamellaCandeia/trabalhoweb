<?php

require_once './includes/cabecalho.inc';
require_once '../classes/bebidasLoja.inc.php';
session_start();
$listaBebidas = $_SESSION["bebidas"];

?>


  <main id="main" data-aos="fade" data-aos-delay="1500">

    <!-- ======= End Page Header ======= -->
    <div class="page-header d-flex align-items-center">
      <div class="container position-relative">
        <div class="row d-flex justify-content-center">
          <div class="col-lg-6 text-center">
            <h2>Drink's Coleção</h2>
            <p>Refresque seu paladar com a nossa seleção de bebidas, onde sabor e qualidade se encontram em cada gole!</p>
            <div align="right">
              <a class="cta-btn" href="../controlers/controlerCarrinho.php?opcao=2">Meu Carrinho</a>
            </div>
          </div>
        </div>
      </div>
    </div><!-- End Page Header -->

    
            <div class="container">
                <div class="row">
                <?php foreach ($listaBebidas as $Bebida) { ?>
                
                    <div class="col-12 col-md-6 col-lg-4 wow fadeInUp mb-5 mb-lg-0 text-center" >
                        <div>
                            <div class="price-header lis-bg-light lis-rounded-top py-4 border border-bottom-0 lis-brd-light">
                              <img src="../views/assets/img/<?= $Bebida->getBebida_id() ?>.jpg"  width="200" height="200" border="0">
                            </div>
                            <div class="border border-top-0 lis-brd-light bg-white py-5 lis-rounded-bottom">
                                <ul class="list-unstyled lis-line-height-3">
                                    <li><h1><b><?= $Bebida->getNome() ?></b></h1></li>
                                    <li><b>Volume:</b> <?= $Bebida->getVolume() ?></li>
                                    <li><b>Fabricante:</b> <?= $Bebida->getFabricante() ?></li>
                                    <li class="display-4 lis-font-weight-500"><?= $Bebida->getPreco() ?></li>
                                </ul>
                                <a href='../controlers/controlerCarrinho.php?opcao=1&id=<?= $Bebida->getBebida_id() ?>' class="btn btn-primary-outline btn-md lis-rounded-circle-50" data-abc="true"><i class="fa fa-shopping-cart pl-2"></i>Comprar</a>
                            </div>
                        </div>
                    </div>
                    
                <?php } ?>

            </div><br><br>
        



  </main><!-- End #main -->

 
<?php
  
  require_once './includes/rodape.inc';

?>