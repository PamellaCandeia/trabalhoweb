<?php

require_once '../dao/connection.php';
require_once '../services/authAdmin.php';
require_once '../services/authCustomer.php';

function login($login, $senha){
    $connection = new Connection();
    $conn = $connection->getConexao();

    $sql = $conn->prepare("select * from usuarios where login = :usr and senha = :pass");

    $login = strtolower($login); // padronizando o texto digitado em minúsculo para ambos, login e senha
    $senha = strtolower($senha);
    $sql->bindValue(':usr', $login);
    $sql->bindValue(':pass', $senha);
    $sql->execute();

    $count = $sql->rowCount();// verificando quantos registros retornam; caso seja 1, localizou o usuário

    if($count == 1){
        return true;
    }
    else{
        return false;
    }
}


$tipo = $_REQUEST['pTipo'];
$login = $_REQUEST['pLogin'];
$senha = $_REQUEST['pSenha'];

if($tipo == 1){
    $logged = login($login, $senha);
    if($logged){
        session_start();

        $_SESSION['logged'] = true;
        $_SESSION['typeofuser'] = 1;
        header("Location: ../views/index.php");
    }
    else{
        header("Location: ../views/login.php?erro=1");
    }
}


?>