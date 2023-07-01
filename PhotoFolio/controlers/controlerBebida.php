<?php
    require_once '../dao/bebidaDAO.inc.php';
    require_once '../classes/bebidasLoja.inc.php';

    $opcao = (int)$_REQUEST['opcao'];

    if($opcao == 1){//incluir
     
        $produto = new Bebida();
        $produto->setBebida($_REQUEST['Nome'], $_REQUEST['Volume'],$_REQUEST['Preco'],$_REQUEST['Peso'], $_REQUEST['Estoque'],$_REQUEST['Fabricante']);
        $produtoDao = new BebidaDao();
        $produtoDao->incluirBebida($produto);

        header('Location: controlerBebida.php?opcao=2');

    }else if($opcao == 2 || $opcao == 6){//exibir todos

         $produtoDao = new BebidaDao();
         $lista = $produtoDao->getProdutos();

         session_start();
         $_SESSION['bebidas'] = $lista;


       
        if($opcao == 2){
             header('Location: ../views/galleryBedidas.php');
        }else{
            //  header("Location: ../views/exibirProdutosVenda.php");
        }


    }else if($opcao==3){
        // $id = $_REQUEST['id'];
        // $produtoDao = new ProdutoDao();
        // $produtoDao->excluirProduto($id);

        // header('Location: controlerProduto.php?opcao=2');

    }else if($opcao==4 ){ //buscar o produto a alterar

        // $id = $_REQUEST['id'];
        // $produtoDao = new ProdutoDao();
        // $produto = $produtoDao->getProduto($id);

        // session_start();
        // $_SESSION['produtos'] = $produto;

       
        // header('Location: controlerFabricante.php?opcao=3');
      
       

    }else if($opcao == 5){//alteração

        // $produto = new Produto();
        // $produto->setProduto($_REQUEST['nome'], $_REQUEST['descricao'], $_REQUEST['data'], $_REQUEST['preco'], $_REQUEST['estoque'], $_REQUEST['Referencia'], $_REQUEST['fabricante']);
        // $produto->setProduto_id($_REQUEST['pid']);
        // $produtoDao = new ProdutoDao();
        // $produtoDao->AlterarProdutos($produto);

        // header('Location: controlerProduto.php?opcao=2');


    }

?>
