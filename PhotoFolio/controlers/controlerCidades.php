<?php
    require_once '../dao/cidadesDAO.inc.php';


    $opcao = (int)$_REQUEST['opcao'];

    if($opcao == 1){//incluir
     
       

    }else if($opcao == 2 || $opcao == 3){//exibir todos e Alterar fabricante no mesmo formulário de alterar produto

        $cidadeDAO = new cidadesDao();
        $lista = $cidadeDAO->getCidades();
        $lista2 = $cidadeDAO->exibeCidades();

        session_start();
        $_SESSION['cidades'] = $lista;
        $_SESSION['cidadesEX'] = $lista2;
        //var_dump($lista);

        if($opcao == 2){
            header('Location: ../views/formCadastroCliente.php');
        }else{
            header('Location: ../views/exibirC');
        }


       
    }else if($opcao==4){//excluir
       

    }

?>
