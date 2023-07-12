<?php

require_once './includes/cabecalho.inc';
require_once '../classes/ProdutosLocacao.php';

?>


  <main id="main" data-aos="fade" data-aos-delay="1500">

    <!-- ======= End Page Header ======= -->
    <div class="page-header d-flex align-items-center">
      <div class="container position-relative">
        <div class="row d-flex justify-content-center">
          <div class="col-lg-6 text-center">
            <h2>Portifolio de Locações</h2>
          </div>
        </div>
      </div>
    </div><!-- End Page Header -->

    <?php

          session_start();
          $Bebidas = $_SESSION['ProdutosLocacao'];

          
          //var_dump($_SESSION['bebidas']);

    ?>

  
      <font face="Tahoma" color="white">
        <div align="center">
        ---- BEBIDAS NO SISTEMA -----
        
      
      <table border="1" align="center" cellspacing="2" cellpadding="1" width="80%"  class="table table-dark">
              <tr align="center">
                  <th witdh="10%">ID</th>
                  <th>Nome</th>
                  <th>Tipo</th>
                  <th>valor Diaria</th>
                  <th>Em Estoque</th>
                  <th>Operação</th>
              </tr>
              
              <?php 
              
              
              foreach($Bebidas as $Bebida){ ?>
                        
                        <tr align="center">
                            <td><?php echo $Bebida->getProduto_Id(); ?></td>
                            <td><?php echo $Bebida->getNome(); ?></td>
                            <td><?php echo $Bebida->getTipo(); ?></td>
                            <td><?php echo $Bebida->getPrecoUnitario(); ?></td>
                            <td><?php echo $Bebida->getEstoque(); ?></td>
                            <td><a href='../controlers/controlerprodutoL.php?opcao=4&id=<?= $Bebida->getProduto_Id()?>'>Locar</a></td>
                        </tr>
                  

              <?php } ?>
              </div>
      </font>
      </table>

   
 
<?php

  require_once './includes/rodape.inc';

?>