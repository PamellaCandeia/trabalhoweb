<?php
require_once("../dao/bebidadao.inc.php");
require_once("../classes/Item.inc.php");

$opcao = $_REQUEST['opcao'];

function array_search2($chave, $vetor)
{
    $index = -1;
    for ($i = 0; $i < count($vetor); $i++) {
        if ($chave == $vetor[$i]->getbebida()->getBebida_id()) {
            $index = $i;
            break;
        }
    }
    return $index;
}

if ($opcao == 1) {
    $id = $_REQUEST['id'];
    $bebidadao = new bebidadao();
    $bebida = $bebidadao->getbebida($id);

    session_start();
    if (!isset($_SESSION["carrinho"])) {
        $carrinho = [];
    } else {
        $carrinho = $_SESSION["carrinho"];
    }

    $item = new Item($bebida);
    $index = array_search2($item->getbebida()->getBebida_id(), $carrinho);
    if ($index != -1) {
        $carrinho[$index]->setQuantidade();
        $carrinho[$index]->setValorItem();
    } else {
        $carrinho[] = $item;
    }

    $_SESSION["carrinho"] = $carrinho;
    header("Location: ../views/exibirCarinho.php");
}

if ($opcao == 2) {
    session_start();
    $index = (int)$_REQUEST["id"];
    $carrinho = $_SESSION["carrinho"];

    for ($i = 0; $i < count($carrinho); $i++) {
        if ($index == $carrinho[$i]->getbebida()->getBebida_id()) {
            unset($carrinho[$i]);
            break;
        }
    }

    $_SESSION["carrinho"] = $carrinho;
    // header("Location: ../views/exibirCarrinho.php");
}

if ($opcao == 3) {
    session_start();

    unset($_SESSION["carrinho"]);
    // header("Location: controllerbebida.php?opcao=exibirbebidasVenda");
}

if ($opcao == 4) {
    $total = (float)$_REQUEST['total'];
    session_start();
    $_SESSION["total"] = $total;
    if (isset($_SESSION["cliente"])) {
        header("Location: ../views/dadosPagamento.php");
    } else {
        header("Location: ../views/formLogin.php");
    }
}
