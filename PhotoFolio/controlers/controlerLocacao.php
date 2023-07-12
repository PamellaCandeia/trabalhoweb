<?php
    require_once '../Classes/ProdutosLocacao.php';
    require_once '../Classes/Locacao.php';
    require_once '../dao/produtoLDao.inc.php';
    require_once '../dao/locacaoDao.inc.php';

    $opcao = (int)$_REQUEST['opcao'];

    if($opcao == 1){//incluir

        $id = $_REQUEST['pid'];
     
        $produto = new Locacao();
        $encontrar = new ProdutoDao();
        $encontrado = $encontrar->getProduto($id);
        $produto->setLocacao($_REQUEST['pid'],$_REQUEST['Locacao'],$_REQUEST['entrega'], $_REQUEST['quant']);
        $produtoDao = new LocacaoDao();
        $produto->setTotalDiarias($_REQUEST['Locacao'],$_REQUEST['entrega']);
        $valorTotal = $produto->getTotalDiarias() * $encontrado->getPrecoUnitario();
        $produto->setValorTotal($valorTotal);
        $produto->setSituacao('Alugado');
        $novoEstoque = $encontrado->getEstoque() - $_REQUEST['quant'];
        $encontrado->setEstoque($novoEstoque);

        if($_REQUEST['quant'] < $encontrado->getEstoque()){

            $produtoDao->incluirLocacao($produto);
            header('Location: controlerLocacao.php?opcao=2');

        }


        

    }else if($opcao == 2 || $opcao == 6){//exibir todos

         $produtoDao = new LocacaoDao();
         $lista = $produtoDao->getLocacoes();

         session_start();
         $_SESSION['ListaDeLocacao'] = $lista;


       
        if($opcao == 2){
             header('Location: ../views/galleryListaLocacao.php');
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

       
        header("Location: ../views/TabelaLocacao.php?id=$id");
      
       

    }else if($opcao == 5){//alteração

        


    }

?>