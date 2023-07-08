<?php

require_once './includes/cabecalho.inc';
require_once '../Classes/Item.inc.php';
require_once '../classes/bebidasLoja.inc.php';
require_once '../Classes/Cliente.inc.php';
require_once '../Classes/cidade.inc.php';

$frete = 0;
$soma = 0;
$numerador = 1;


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

      <?php

            if(isset($_REQUEST['status'])){
              echo "<p><font face='verdana' size='3' color='red' > Nenhum item foi incluido no carrinho de compras </font>";

              echo "<p><a href='../controlers/controlerProduto.php?opcao=6'> Visualizar Produtos </a>";
            }else{
              session_start();
              $carrinho = $_SESSION['carrinho'];
              $cliente = $_SESSION['cliente'];
              $cidades = $_SESSION['cidades'];

              //var_dump( $_SESSION['cidades']);



            }

      ?>

 
      
      <table border="1" align="center" cellspacing="2" cellpadding="1" width="80%"  class="table table-dark">
              <tr align="center">
                  <th witdh="10%">N°</th>
                  <th witdh="10%">ID</th>
                  <th>Nome</th>
                  <th>Fabricante</th>
                  <th>Quantidade</th>
                  <th>Valor Item</th>
                  <th>Em Estoque</th>
                  <th>Valor Total</th>
                  <th>Remover</th>
              </tr>
              
              <?php 
              foreach ($carrinho as $item){
                if($numerador%2) $color = '#cccccc';
                else  $color = '#FFFFFF'  
                ?>
                        
                <tr align="center">
                  <td><?= $numerador ?></td>
                  <td><?= $item->getBebida()->getBebida_id(); ?></td>
                  <td><?= $item->getBebida()->getNome(); ?></td>
                  <td><?= $item->getBebida()->getFabricante(); ?></td>
                  <td><?= $item->getQuantidade(); ?></td>
                  <td>R$ <?= $item->getBebida()->getPreco(); ?></td>
                  <td><?= $item->getBebida()->getEstoque(); ?></td>
                  <td>R$ <?= $item->getValorItem(); ?></td>
                  <td><button type="submit"><a href="../controlers/controlerCarrinho.php?opcao=2&index=<?= $numerador-1?>">Remover</a></button></td>
                </tr>
              <?php
                $soma += $item->getValorItem();

                foreach($cidades as $cidadeCliente){
                  if(($cidadeCliente->getCidadeId()) == ($cliente->getCidade())){
                    $frete = $cidadeCliente->getValorFrete();
                  }
                }

                $somacomfrete = $soma + $frete;
                $numerador++;
              }//fim forech

               ?>
               <tr align="right"><td colspan="5"><font face="Verdana" size="4" color="red"><b>Frete = R$ <?= $cliente->getCidade()->getValorFrete(); ?></b></font></td></tr>
               <tr align="right"><td colspan="5"><font face="Verdana" size="4" color="red"><b>Valor Total = R$ <?= $somacomfrete ?></b></font></td></tr>
               
              </div>
      </font>
      </table>

      <p>
          
          <a href="../views/ExibicaoParaVenda.php" class="btn-get-started">Continuar Comprando</a><br><br>
          <a href="../controlers/controlerCarrinho.php?opcao=5&total=<?= $somacomfrete ?>" class="btn-get-started">Finalizar Compra</a>

   
 
<?php

  require_once './includes/rodape.inc';

?>