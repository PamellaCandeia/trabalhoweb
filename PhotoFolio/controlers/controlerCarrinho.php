<?php
require_once '../dao/bebidadao.inc.php';
require_once '../classes/Item.inc.php';
require_once '../dao/cidadesDAO.inc.php';

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
    $bebidadao = new BebidaDao();
    $bebida = $bebidadao->getbebida($id);
    $cidadeDAO = new cidadesDao();
    $lista = $cidadeDAO->getCidades();


    
        session_start();
        $_SESSION['cidades'] = $lista;
    
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
    $index = (int)$_REQUEST["inde"];
    $carrinho = $_SESSION["carrinho"];

    for ($i = 0; $i < count($carrinho); $i++) {
        if ($index == $carrinho[$i]->getbebida()->getBebida_id()) {
            unset($carrinho[$i]);
            break;
        }
    }

    $_SESSION["carrinho"] = $carrinho;
    header("Location: ../views/exibirCarinho.php");
}

if ($opcao == 3) {
    session_start();

    unset($_SESSION["carrinho"]);
    header("Location: controlerBebida.php?opcao=6");
}

if ($opcao == 4) {
    
}
