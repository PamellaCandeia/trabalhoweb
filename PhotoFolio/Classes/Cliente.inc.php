<?php
class Cliente
{
    private $id_cliente;
    private $nome;
    private $cnpj;
    private $endereco;
    private $id_cidade;
    private $login;
    private $senha;
   
    
    public function setCliente($nome, $cnpj, $endereco, $id_cidade, $login, $senha)
    {
        $this->nome = $nome;
        $this->cnpj = $cnpj;
        $this->endereco = $endereco;
        $this->id_cidade = $id_cidade;
        $this->login = $login;
        $this->senha = $senha;
    }

    public function getID_cliente()
    {
        return $this->id_cliente;
    }

    public function setID_cliente($id)
    {
        $this->id_cliente = $id;
    }

    public function getCNPJ()
    {
        return $this->cnpj;
    }

    public function setCNPJ($cnpj)
    {
        $this->cnpj = $cnpj;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getEndereco()
    {
        return $this->endereco;
    }

    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
    }

    public function getCidade()
    {
        return $this->id_cidade;
    }

    public function setCidade($id_cidade)
    {
        $this->id_cidade = $id_cidade;
    }

    public function getLogin()
    {
        return $this->login;
    }

    public function setLogin($login)
    {
        $this->login = $login;
    }

    public function getSenha()
    {
        return $this->senha;
    }

    public function setSenha($senha)
    {
        $this->senha = $senha;
    }




}
