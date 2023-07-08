<?php
    require_once '../dao/bebidaDAO.inc.php';
    require_once '../classes/bebidasLoja.inc.php';

    $opcao = (int)$_REQUEST['opcao'];

    if($opcao == 1){//incluir
     
        $bebida = new Bebida();
        $bebida->setBebida($_REQUEST['Nome'], $_REQUEST['Volume'],$_REQUEST['Preco'],$_REQUEST['Peso'], $_REQUEST['Estoque'],$_REQUEST['Fabricante']);
        $bebidaDao = new BebidaDao();
        $bebidaDao->incluirBebida($bebida);

        header('Location: controlerBebida.php?opcao=2');

    }else if($opcao == 2 || $opcao == 6){//exibir todos

         $bebidaDao = new BebidaDao();
         $lista = $bebidaDao->getbebidas();

         session_start();
         $_SESSION['bebidas'] = $lista;


       
        if($opcao == 2){
             header('Location: ../views/galleryBebidas.php');
        }else{
            header("Location: ../views/ExibicaoParaVenda.php");
        }


    }else if($opcao==3){
        $id = $_REQUEST['id'];
        $bebidaDao = new BebidaDao();
        $bebidaDao->excluirbebida($id);

        header('Location: controlerBebida.php?opcao=2');

    }else if($opcao == 4){ //buscar o bebida a alterar

        $id = $_REQUEST['id'];
        $bebidaDao = new BebidaDao();
        $bebida = $bebidaDao->getbebida($id);

        session_start();
        $_SESSION['bebida'] = $bebida;

       
        header("Location: ../views/formBebida.php?id=$id");
      
       

    }else if($opcao == 5){//alteração

        $bebida = new bebida();
        $bebida->setbebida($_REQUEST['Nome'], $_REQUEST['Volume'],$_REQUEST['Preco'],$_REQUEST['Peso'], $_REQUEST['Estoque'],$_REQUEST['Fabricante']);
        $bebida->setbebida_id($_REQUEST['pid']);
        $bebidaDao = new bebidaDao();
        $bebidaDao->Alterarbebidas($bebida);

        header('Location: controlerbebida.php?opcao=2');


    }

?>
