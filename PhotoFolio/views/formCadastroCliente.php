<?php

require_once './includes/cabecalho.inc';



?>

<main id="main" data-aos="fade" data-aos-delay="1500">

    <!-- ======= End Page Header ======= -->
    <div class="page-header d-flex align-items-center">
      <div class="container position-relative">
        <div class="row d-flex justify-content-center">
          <div class="col-lg-6 text-center">
            <h2>Cadastre-se!</Cadastre-se>!</h2>
            <p>Salve suas opções como nosso cliente.</p>
        <?php

            session_start();
            $cidades = $_SESSION['cidadesEX'];

            // var_dump($_SESSION['cidades']);

        ?>

          </div>
        </div>
      </div>
    </div><!-- End Page Header -->

    <!-- ======= Login Section ======= -->
    <section id="contact" class="contact">

      
      <div class="container">


        <div class="row justify-content-center mt-4">

          <div class="col-lg-9">
            

          
            <form  action="../controlers/controlerCliente.php?opcao=2" method="get" role="form" class="php-email-form" style="color: white;">
              <div class="row">
                <div class="col-md-6 form-group">
                  Nome:
                  <input type="text" name="nome" class="form-control" id="nome" placeholder="Nome" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  CNPJ:
                  <input type="text" class="form-control" name="cnpj" id="cnpj" placeholder="cnpj" required>
                </div>
              </div>
              <div class="form-group mt-3">
                Endereço:
                <input type="text" class="form-control" name="endereco"  id="endereco"  placeholder="Endereço" required></textarea>
              </div>
              <div class="form-group mt-3">
                Cidade:
                <!-- <input type="text" class="form-control" name="cidade" id="cidade"  placeholder="Selecione uma cidade" required> -->
                <select name="cidade">
                  <option value="0">-</option>
                  <?php
                  foreach($cidades as $cidade){
                    echo "<option value='$cidade->id_cidade'>$cidade->cidade</option>";
                  }
                  ?>
                </select>
              </div>
              <div class="form-group mt-3">
                Login:
                <input type="text" class="form-control" name="login" id="login"  placeholder="email" required>
              </div>
              <div class="form-group mt-3">
                Senha:
                <input type="text" class="form-control" name="senha" id="senha"  placeholder="Digite sua Senha" required>
              </div>
              <div class="col-md-6 form-group">
                Data de Nascimento:
                <input type="date" class="form-control" name="dataN" id="dataN" required>
              </div>
              <input type="hidden" value="2" name="opcao">

              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Cadastrado com Sucesso!</div>
              </div>
              <div class="text-center"><button type="submit">Cadastrar</button> <button type="reset" style="background-color: red;">Limpar</button></div>
            </form>

            <p>
                <?php
        
                    if (isset($_REQUEST['erro'])) // verifica se o erro foi setado
                    {
                        if ((int)($_REQUEST['erro']) == 1) // captura e ver o tipo do erro, no caso, 1
                            echo "<b><font face='Verdana' size='2' color='red'>Nossos clientes não podem ser Menores de Idade!</font><b>";
                        
                    }
                ?>
  
            </p>

            
                
          </div>



          


        </div><!-- End Contact Form -->
    
    
      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

<?php

  require_once './includes/rodape.inc';

?>
  