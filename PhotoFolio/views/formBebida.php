
<?php
     require_once 'includes/cabecalho.inc';
     session_start();
     if(isset($_SESSION['bebida'])){
      $bebida = $_SESSION['bebida'];
     }
?>

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex flex-column justify-content-center align-items-center" data-aos="fade" data-aos-delay="1500">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6 text-center">
          <h2>Cadastro de Bebidas</h2>
          <p>Refresque seu paladar com a nossa seleção de bebidas, onde sabor e qualidade se encontram em cada gole!</p>
        </div>
      </div>
    </div>
  </section><!-- End Hero Section -->

  <main id="main" data-aos="fade" data-aos-delay="1500">


    <section id="contact" class="contact">
      <div class="container">

        <?=var_dump($_SESSION['bebida']);?>
        <div class="row justify-content-center mt-4">

          <div class="col-lg-9">
            <form action="../controlers/controlerBebida.php" method="get" role="form" class="php-email-form h4" style="color: white;">
              
              <?php
              if(isset($_REQUEST['id'])) :
              ?>
                <div class="col-md-6 form-group mt-3 mt-md-0" >
                <input type="hidden" name="pid" value="1">
                Nome da Bebida: <input type="text" class="form-control"  name="Nome" placeholder="Insira o nome da bebida" required value="<?=$id?>"><br>
                volume: <input type="text" class="form-control"  name="Volume" placeholder="Insira o volume da bebida" required><br>
                Preço: <input type="number" step="any" class="form-control"  name="Preco" placeholder="Insira o preço da bebida" required><br>
                Peso em kg: <input type="number"  step="any" class="form-control"  name="Peso" placeholder="Insira o peso da bebida" required><br>
                Estoque: <input type="number" class="form-control"  name="Estoque" placeholder="Insira a quantidade do estoque" required><br>
                Fabricante: <input type="text" class="form-control" name="Fabricante" required>
              </div>

              <input type="hidden" name="opcao" value="5"><p></p>
              <div class="text-center"><button type="submit">Alterar</button> <input type="reset" value="Cancelar" ></div>
              <?php
                else :
                
              ?>
                <div class="col-md-6 form-group mt-3 mt-md-0" >
                Nome da Bebida: <input type="text" class="form-control"  name="Nome" placeholder="Insira o nome da bebida" required><br>
                volume: <input type="text" class="form-control"  name="Volume" placeholder="Insira o volume da bebida" required><br>
                Preço: <input type="number" step="any" class="form-control"  name="Preco" placeholder="Insira o preço da bebida" required><br>
                Peso em kg: <input type="number"  step="any" class="form-control"  name="Peso" placeholder="Insira o peso da bebida" required><br>
                Estoque: <input type="number" class="form-control"  name="Estoque" placeholder="Insira a quantidade do estoque" required><br>
                Fabricante: <input type="text" class="form-control" name="Fabricante" required>
                <input type="hidden" name="opcao" value="1"><p></p>
                <div class="text-center"><button type="submit">Cadastrar</button> <input type="reset" value="Cancelar" ></div>
              <?php
                endif;
              ?>              
              

           

            </form>
            <p>
                <?php
            
                    if (isset($_REQUEST['erro'])) // verifica se o erro foi setado
                    {
                        if ((int)($_REQUEST['erro']) == 1) // captura e ver o tipo do erro, no caso, 1
                            echo "<b><font face='Verdana' size='2' color='red'>Login Incorreto!</font><b>";
                        else
                            if ((int)($_REQUEST['erro']) == 2)
                                echo "<b><font face='Verdana' size='2' color='blue'>Por favor, efetue seu login!</font><b>";
                    }
                ?>
            </p>










          </div><!-- End Contact Form -->

        </div>

      </div>
    </section>




















  </main><!-- End #main -->


<?php

  require_once './includes/rodape.inc';

?>