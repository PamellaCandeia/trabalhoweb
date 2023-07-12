
<?php
     require_once 'includes/cabecalho.inc';
     session_start();
     if(isset($_SESSION['Locacao'])){
      $locacao = $_SESSION['Locacao'];
      $id = $_SESSION['ID'];
     }
?>

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex flex-column justify-content-center align-items-center" data-aos="fade" data-aos-delay="1500">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6 text-center">
          <h2>Cadastro de Produto de Locação</h2>
          <p>Refresque seu paladar com a nossa seleção de bebidas, onde sabor e qualidade se encontram em cada gole!</p>
        </div>
      </div>
    </div>
  </section><!-- End Hero Section -->

  <main id="main" data-aos="fade" data-aos-delay="1500">


    <section id="contact" class="contact">
      <div class="container">

        <?=var_dump($_SESSION['Locacao']);?>
        <div class="row justify-content-center mt-4">

          <div class="col-lg-9">
            <form action="../controlers/controlerLocacao.php" method="get" role="form" class="php-email-form h4" style="color: white;">
              
              
                <div class="col-md-6 form-group mt-3 mt-md-0" >

                
                <input type="hidden" name="pid" value="<?= $id ?>"><p></p>
                Data de Locação: <input type="date" class="form-control"  name="Locacao" placeholder="Insira o tipo do produto" required><br>
                Data de Entrega: <input type="date" class="form-control"  name="entrega" placeholder="Insira o tipo do produto" required><br>
                Quantidade: <input type="number" step="any" class="form-control"  name="quant" placeholder="Insira o preço da diaria do produto" required><br>
                <input type="hidden" name="opcao" value="1"><p></p>
                <div class="text-center"><button type="submit">Locar</button> <input type="reset" value="Cancelar" ></div>
                        
              

           

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