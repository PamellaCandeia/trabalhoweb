<?php
    require_once '../dao/produtoLDao.inc.php';
    require_once '../classes/ProdutosLocacao.php';

    $opcao = (int)$_REQUEST['opcao'];

    if($opcao == 1){//incluir
     
        $produto = new ProdutosLocacao();
        $produto->setProduto($_REQUEST['Nome'],$_REQUEST['tipo'],$_REQUEST['Preco'], $_REQUEST['Estoque']);
        $produtoDao = new ProdutoDao();
        $produtoDao->incluirProduto($produto);

        header('Location: controlerProdutoL.php?opcao=2');

    }else if($opcao == 2 || $opcao == 6){//exibir todos

         $produtoDao = new ProdutoDao();
         $lista = $produtoDao->getProdutos();

         session_start();
         $_SESSION['ProdutosLocacao'] = $lista;


       
        if($opcao == 2){
             header('Location: ../views/galleryLocacao.php');
        }else{
            header("Location: ../views/ExibicaoParaVenda.php");
        }


    }else if($opcao==3){
        $id = $_REQUEST['id'];
        $bebidaDao = new BebidaDao();
        $bebidaDao->excluirbebida($id);

        header('Location: controlerBebida.php?opcao=2');

    }else if($opcao == 4){ //buscar o bebida a locar

        $id = $_REQUEST['id'];
        $produtoDao = new ProdutoDao();
        $produto = $produtoDao->getProduto($id);

        session_start();
        $_SESSION['Locacao'] = $produto;
        $_SESSION['ID'] = $id;


       
        header("Location: ../views/TabelaLocacao.php");
      
       

    }else if($opcao == 5){//alteração

        $locacao = new Locacao();
        $bebida->setLocacao($_REQUEST['Nome'], $_REQUEST['Locacao'],$_REQUEST['entrega'],$_REQUEST['quant']);
        $bebida->setbebida_id($_REQUEST['pid']);
        $bebidaDao = new bebidaDao();
        $bebidaDao->Alterarbebidas($bebida);

        header('Location: controlerbebida.php?opcao=2');


    }

?>