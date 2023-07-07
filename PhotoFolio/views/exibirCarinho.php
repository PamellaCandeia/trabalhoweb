<?php

require_once './includes/cabecalho.inc';
require_once '../classes/bebidasLoja.inc.php';
session_start();
$soma = 0;
$i = 1;
if (isset($_SESSION["carrinho"]) && sizeof($_SESSION["carrinho"]) != 0) { // passar a verificação para a controller
     $carrinho = $_SESSION["carrinho"];
     // Realizar o percurso no vetor de carrinho e colocar as informações em cada linha <tr>
}

?>


  <main id="main" data-aos="fade" data-aos-delay="1500">

    <!-- ======= End Page Header ======= -->
    <div class="page-header d-flex align-items-center">
      <div class="container position-relative">
        <div class="row d-flex justify-content-center">
          <div class="col-lg-6 text-center">
            <h2>Carrinho de Compras</h2>
          </div>
        </div>
      </div>
    </div><!-- End Page Header -->  
      <font face="Tahoma" color="white">
        <div align="center">
        ---- CARRINHO -----
        <a href="../controllers/controllerCarrinho.php?opcao=4&total=<?= $soma ?>"><input type="button" value="Finalizar Compra"></a>
        
      
      <table border="1" align="center" cellspacing="2" cellpadding="1" width="80%"  class="table table-dark">
              <tr align="center">
                  <th witdh="10%">ID</th>
                  <th>Nome</th>
                  <th>Volume</th>
                  <th>Preco</th>
                  <th>Kg</th>
                  <th>Em Estoque</th>
                  <th>Fabricante</th>
                  <th>Operação</th>
              </tr>
              
              <?php 
              foreach ($carrinho as $item){ ?>
                        
                <tr align="center">
                  <td><?php echo $item->getbebida()->getBebida_id(); ?></td>
                  <td><?php echo $item->getbebida()->getNome(); ?></td>
                  <td><?php echo $item->getbebida()->getVolume(); ?></td>
                  <td><?php echo $item->getbebida()->getPreco(); ?></td>
                  <td><?php echo $item->getbebida()->getPeso(); ?></td>
                  <td><?php echo $item->getbebida()->getEstoque(); ?></td>
                  <td><?php echo $item->getbebida()->getFabricante(); ?></td>
                  <td><a href='../controlers/controlerbebida.php?opcao=4&id=<?= $item->getbebida()->getBebida_id()?>'>Alterar</a>&nbsp;<a href='../controlers/controlerbebida.php?opcao=3&id=<?= $item->getbebida()->getBebida_id()?>'>Excluir</a></td>
                </tr>
              <?php
                $soma += $item->getValorItem();
              }
               ?>
               <a href="../controllers/controllerCarrinho.php?opcao=processoVenda&total=<?= $soma ?>"><input type="button" value="Finalizar Compra"></a>
              </div>
      </font>
      </table>

   
 
<?php

  require_once './includes/rodape.inc';

?>