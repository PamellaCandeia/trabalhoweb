<?php

require_once './includes/cabecalho.inc';
require_once '../Classes/Locacao.php';
require_once '../dao/locacaoDao.inc.php';
require_once '../utils/Utilidade.inc.php';

?>


  <main id="main" data-aos="fade" data-aos-delay="1500">

    <!-- ======= End Page Header ======= -->
    <div class="page-header d-flex align-items-center">
      <div class="container position-relative">
        <div class="row d-flex justify-content-center">
          <div class="col-lg-6 text-center">
            <h2>Lista de Locações</h2>
          </div>
        </div>
      </div>
    </div><!-- End Page Header -->

    <?php

          session_start();
          $Locacoes = $_SESSION['ListaDeLocacao'];
          $produto = $_SESSION['Locacao'];

          
          //var_dump($_SESSION['bebidas']);

    ?>

  
      <font face="Tahoma" color="white">
        <div align="center">
        ---- BEBIDAS NO SISTEMA -----
        
      
      <table border="1" align="center" cellspacing="2" cellpadding="1" width="80%"  class="table table-dark">
              <tr align="center">
                  <th witdh="10%">ID Locação</th>
                  <th witdh="10%">ID Produto</th>
                  <th>Inicio da Locação</th>
                  <th>Data de entrega</th>
                  <th>Quantidade Locada</th>
                  <th>Em Estoque nesse periodo</th>
                  <th>Situação</th>
                  <th>Total de dias Locados</th>
              </tr>
              
              <?php 
              
              
              foreach($Locacoes as $locacoes){ ?>
                        
                        <tr align="center">
                            <td><?php echo $locacoes->getIDLocacao(); ?></td>
                            <td><?php echo $locacoes->getIdProduto(); ?></td>
                            <td><?php echo $locacoes->getDataLocacao(); ?></td>
                            <td><?php echo $locacoes->getDataEntrega(); ?></td>
                            <td><?php echo $locacoes->getQuantidade(); ?></td>
                            <td><?php echo ($produto->getEstoque() - $locacoes->getQuantidade()); ?></td>
                            <td><?php echo $locacoes->getSituacao(); ?></td>
                            <td><?php echo $locacoes->getTotalDiarias(); ?></td>
                        </tr>
                  

              <?php } ?>
              </div>
      </font>
      </table>

   
 
<?php

  require_once './includes/rodape.inc';

?>