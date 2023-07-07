<?php
class Cliente
{
    private $id_cliente;
    private $nome;
    private $cnpj;
    private $endereco;
    private $id_cidade;
   
    
    public function setCliente($nome, $cnpj, $endereco)
    {
        $this->nome = $nome;
        $this->cnpj = $cnpj;
        $this->endereco = $endereco;
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

}
