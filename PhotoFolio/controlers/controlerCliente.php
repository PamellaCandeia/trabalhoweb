<?php
    require_once '../dao/clienteDao.php';
    require_once '../classes/Cliente.inc.php';

    $opcao = (int)$_REQUEST['opcao'];

    if($opcao == 1){//Login

        $email = $_REQUEST['pLogin'];
        $senha = $_REQUEST['pSenha'];

        $clienteDao = new ClienteDao();

        $cliente = $clienteDao->efetuarLogin($email , $senha);

        if($cliente != NULL){
            session_start();
            $_SESSION['cliente'] = $cliente;
            header('Location: ../views/galleryBebidas.php');

        }else{
            header('Location: ../views/formLogin.php?erro=1');
        }
     
        // $produto = new Produto();
        // $produto->setProduto($_REQUEST['nome'], $_REQUEST['descricao'], $_REQUEST['data'], $_REQUEST['preco'], $_REQUEST['estoque'], $_REQUEST['Referencia'], $_REQUEST['fabricante']);
        // $produtoDao = new ProdutoDao();
        // $produtoDao->incluirProduto($produto);

        // header('Location: controlerProduto.php?opcao=2');

    }else if($opcao == 2 || $opcao == 6){//incluir

        $dataAtual = new DateTime();

        $dataNascimento = new DateTime($_REQUEST['dataN']);

        $diferenca = $dataAtual->diff($dataNascimento);

        if($diferenca->y >= 18){

            $cliente = new Cliente();
            $cliente->setCliente($_REQUEST['nome'], $_REQUEST['cnpj'], $_REQUEST['endereco'], $_REQUEST['cidade'], $_REQUEST['login'], $_REQUEST['senha']);
            $clienteDao = new ClienteDAO();
            $clienteDao->inserirCliente($cliente);

            header('Location: ../views/formLogin.php');

        }else{
            header("Location: ../views/formCadastroCliente.php?erro=1");
        }


        

    //     $produtoDao = new ProdutoDao();
    //     $lista = $produtoDao->getProdutos();

    //     session_start();
    //     $_SESSION['produtos'] = $lista;


       
    //    if($opcao == 2){
    //         header('Location: ../views/exibirProdutos.php');
    //     }else{
    //         header("Location: ../views/exibirProdutosVenda.php");
    //     }


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


    }else if($opcao == 7){
        // $pagina = (int)$_REQUEST['pagina'];

        // $produtoDao = new ProdutoDao();
        // //$lista = $produtoDao->getProdutos();
        // $lista = $produtoDao->getProdutosPaginacao($pagina);
        
        // $numpaginas = $produtoDao->getPagina();
        
        // session_start();
        // $_SESSION['produtos'] = $lista;

        // //var_dump($_SESSION['produtos']);
        
        // header("Location: ../views/exibirProdutosPaginacao.php?paginas=".$numpaginas);

    }else if($opcao == 8){
        // $produtoDAO = new ProdutoDao();
        // $produtoDAO->incluirVariosProdutos();

        // header('Location: controlerProduto.php?opcao=2');
    }

?>