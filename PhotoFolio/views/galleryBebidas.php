<?php

require_once './includes/cabecalho.inc';
require_once '../classes/bebidasLoja.inc.php';

?>


  <main id="main" data-aos="fade" data-aos-delay="1500">

    <!-- ======= End Page Header ======= -->
    <div class="page-header d-flex align-items-center">
      <div class="container position-relative">
        <div class="row d-flex justify-content-center">
          <div class="col-lg-6 text-center">
            <h2>Portifolio de Bebidas</h2>
          </div>
        </div>
      </div>
    </div><!-- End Page Header -->

    <?php

          session_start();
          $Bebidas = $_SESSION['bebidas'];

          
          //var_dump($_SESSION['bebidas']);

    ?>

  
      <font face="Tahoma" color="white">
        <div align="center">
        ---- TABELA DE BEBIDAS NO SITEMA -----
        
      
      <table border="1" align="center" cellspacing="2" cellpadding="1" width="80%"  class="table table-dark">
              <tr align="center">
                  <th witdh="10%">ID</th>
                  <th>Nome</th>
                  <th>Volume</th>
                  <th>Preco</th>
                  <th>Peso</th>
                  <th>Em Estoque</th>
                  <th>Fabricante</th>
                  <th>Operação</th>
              </tr>
              
              <?php 
              
              
              foreach($Bebidas as $Bebida){ ?>
                        
                        <tr align="center">
                            <td><?php echo $Bebida->getBebida_id(); ?></td>
                            <td><?php echo $Bebida->getNome(); ?></td>
                            <td><?php echo $Bebida->getVolume(); ?></td>
                            <td><?php echo $Bebida->getPreco(); ?></td>
                            <td><?php echo $Bebida->getPeso(); ?></td>
                            <td><?php echo $Bebida->getEstoque(); ?></td>
                            <td><?php echo $Bebida->getFabricante(); ?></td>
                            <td><a href='../controlers/controlerbebida.php?opcao=4&id=<?= $Bebida->getBebida_id()?>'>Alterar</a>&nbsp;<a href='../controlers/controlerbebida.php?opcao=3&id=<?= $Bebida->getBebida_id()?>'>Excluir</a></td>
                        </tr>
                  

              <?php } ?>
              </div>
      </font>
      </table>

   
 
<?php

  require_once './includes/rodape.inc';

?>