<?php

require_once './includes/cabecalho.inc';

?>

<main id="main" data-aos="fade" data-aos-delay="1500">

    <!-- ======= End Page Header ======= -->
    <div class="page-header d-flex align-items-center">
      <div class="container position-relative">
        <div class="row d-flex justify-content-center">
          <div class="col-lg-6 text-center">
            <h2>Faça seu login!</h2>
            <p>Salve suas opções como nosso cliente.</p>

          </div>
        </div>
      </div>
    </div><!-- End Page Header -->

    <!-- ======= Login Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        

        <div class="row justify-content-center mt-4">

          <div class="col-lg-9">
            <form action="../controlers/controlerCliente.php" method="get" role="form" class="php-email-form">
              
            
                
              <div class="col-md-6 form-group mt-3 mt-md-0" >
                <h3 style="color: white;">Email:</h3>
                <input type="text" class="form-control"  name="pLogin" placeholder="Insira seu email" required><br>
                <h3 style="color: white;">Senha:</h3>
                <input type="text" class="form-control"  name="pSenha" placeholder="Insira sua senha" required><br>
                <input type="hidden" value="1" name="opcao">
                <br><br>
              </div>
              
              
              
              <div class="text-center"><button type="submit">Login</button> <input type="reset" value="Cancelar" ></div>

           

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
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

<?php

  require_once './includes/rodape.inc';

?>
  