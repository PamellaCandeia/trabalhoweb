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

    public function getCNPJ()
    {
        return $this->cnpj;
    }

    public function setCNPJ($cpf)
    {
        $this->cpf = $cpf;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getLogradouro()
    {
        return $this->logradouro;
    }

    public function setLogradouro($logradouro)
    {
        $this->logradouro = $logradouro;
    }

    public function getCidade()
    {
        return $this->cidade;
    }

    public function setCidade($cidade)
    {
        $this->cidade = $cidade;
    }

    public function getEstado()
    {
        return $this->estado;
    }

    public function setEstado($estado)
    {
        $this->estado = $estado;
    }

    public function getCEP()
    {
        return $this->cep;
    }

    public function setCEP($cep)
    {
        $this->cep = $cep;
    }

    public function getTelefone()
    {
        return $this->telefone;
    }

    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    }

    public function getDataNascimento()
    {
        return $this->data_nascimento;
    }

    public function setDataNascimento($data_nascimento)
    {
        $this->data_nascimento = strtotime($data_nascimento);
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getSenha()
    {
        return $this->senha;
    }

    public function setSenha($senha)
    {
        $this->senha = $senha;
    }

    public function getRG()
    {
        return $this->rg;
    }

    public function setRG($rg)
    {
        $this->rg = $rg;
    }
}
