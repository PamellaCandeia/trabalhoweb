<?php
require_once("../Classes/Cliente.inc.php");
require_once("connection.php");
require_once("../utils/Utilidade.inc.php");


class ClienteDAO
{
    private $con;

    public function __construct()
    {
        $conexao = new Connection();
        $this->con = $conexao->getConexao();
    }

    function efetuarLogin($login, $senha)
    {
        $login = strtolower($login);
        $senha = strtolower($senha);
        $sql = $this->con->prepare("select * from clientes where login = :user and senha = :pass");
        $sql->bindValue(':user', $login);
        $sql->bindValue(':pass', $senha);
        $sql->execute();

        //Conta as linhas no banco de dados
        $cliente = null;
        $count = $sql->rowCount();
        if ($count == 1) {
            $resultSet = $sql->fetch(PDO::FETCH_OBJ);
            return $this->criaRetornoCliente($resultSet);
        }
        return $cliente;
    }

    public function inserirCliente(Cliente $cliente)
    {

        $sql = $this->con->prepare("insert into clientes (nome, cnpj, endereco, id_cidade, login, senha)
        values(:nome, :cnpj, :endereco, :cidade, :login, :senha)");

        
        $sql->bindParam(':nome', $cliente->getNome());
        $sql->bindParam(':cnpj', $cliente->getCNPJ());
        $sql->bindParam(':endereco', $cliente->getEndereco());
        $sql->bindParam(':cidade', $cliente->getCidade());
        $sql->bindParam(':login', $cliente->getLogin());
        $sql->bindParam(':senha', $cliente->getSenha());
        $sql->execute();
  
    }

    // public function consultarClientePorId($cpf)
    // {
    //     $sql = "SELECT * FROM clientes WHERE cpf = :cpf";
    //     $stmt = $this->con->prepare($sql);
    //     $stmt->bindParam(':cpf', $cpf);
    //     $stmt->execute();
    //     $resultSet = $stmt->fetch(PDO::FETCH_OBJ);
    //     return $this->criaRetornoCliente($resultSet);
    // }

    // public function excluirCliente($cpf)
    // {
    //     $sql = "DELETE FROM clientes WHERE cpf = :cpf";
    //     $stmt = $this->con->prepare($sql);
    //     $stmt->bindParam(':cpf', $cpf);
    //     return $stmt->execute();
    // }

    // public function atualizarCliente($cliente)
    // {
    //     $sql = "UPDATE clientes SET nome = :nome, logradouro = :logradouro, cidade = :cidade, estado = :estado, cep = :cep, telefone = :telefone, data_nascimento = :data_nascimento, email = :email, senha = :senha, rg = :rg WHERE cpf = :cpf";
    //     $stmt = $this->con->prepare($sql);
    //     $stmt->bindParam(':nome', $cliente->getNome());
    //     $stmt->bindParam(':logradouro', $cliente->getLogradouro());
    //     $stmt->bindParam(':cidade', $cliente->getCidade());
    //     $stmt->bindParam(':estado', $cliente->getEstado());
    //     $stmt->bindParam(':cep', $cliente->getCEP());
    //     $stmt->bindParam(':telefone', $cliente->getTelefone());
    //     $stmt->bindParam(':data_nascimento',$cliente->getDataNascimento());
    //     $stmt->bindParam(':email', $cliente->getEmail());
    //     $stmt->bindParam(':senha', $cliente->getSenha());
    //     $stmt->bindParam(':rg', $cliente->getRG());
    //     $stmt->bindParam(':cpf', $cliente->getCPF());
    //     return $stmt->execute();
    // }

    // public function getClientes()
    // {
    //     $sql = "SELECT * FROM clientes";
    //     $stmt = $this->con->prepare($sql);
    //     $stmt->execute();
    //     $lista = array();

    //     while ($row = $stmt->fetch(PDO::FETCH_OBJ)) {
    //         $lista[] = $this->criaRetornoCliente($row);
    //     }
    //     return $lista;
    // }

    function criaRetornoCliente($row)
    {
        $cliente = new Cliente();
        $cliente->setCNPJ($row->cnpj);
        $cliente->setNome($row->nome);
        $cliente->setEndereco($row->endereco);
        $cliente->setCidade($row->id_cidade);
        $cliente->setLogin($row->login);
        $cliente->setSenha($row->senha);
        $cliente->setID_cliente($row->id_cliente);
        return $cliente;
    }
}