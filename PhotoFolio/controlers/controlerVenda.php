<?php

require_once "../classes/venda.inc.php";
require_once "../classes/Cliente.inc.php";
require_once "../dao/vendaDAO.inc.php";

$opcao = (int)$_REQUEST['opcao'];

if($opcao == 1){
    $pagamento = $_REQUEST['pag'];
    //registrar venda no banco de dados

    session_start();
    $carrinho = $_SESSION['carrinho'];
    $cliente = $_SESSION['cliente'];
    $cidade = $_SESSION['cidades'];
    $total = $_SESSION['total'];
    
    $venda= new Venda($cliente->getId_Cliente(), $total, $cidade->getValorFrete());


    $vendaDao = new VendaDao();
    $vendaDao->incluirVenda($venda, $carrinho);
    unset($_SESSION['carrinho']);

    if($pagamento == 'boleto'){//incluir venda!
        // echo 'Emitir o boleto bancario!';
       // header('Location: ../views/boleto/boleto/MeuBoleto.php');
    }else{
        echo 'validar cartão de crédito!';
    }
}