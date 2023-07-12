<?php

class ProdutosLocacao{
    private $Produto_id;
    private $nome;
    private $Tipo;
    private $precoUnitario;
    private $qde_estoque;

    function setProduto($nome, $Tipo, $precoUnitario, $qde_estoque){
        $this->nome = $nome;
        $this->Tipo = $Tipo;
        $this->precoUnitario = $precoUnitario;
        $this->qde_estoque = $qde_estoque;
        
    }

    public function getProduto_id(){
        return $this->Produto_id;
    }

    public function setProduto_id($bid){
       return $this->Produto_id = $bid;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($bName){
       return $this->nome = $bName;
    }

    public function getTipo(){
        return $this->Tipo;
    }

    public function setTipo($bdesc){
       return $this->Tipo = $bdesc;
    }

    public function getPrecoUnitario(){
        return $this->precoUnitario;
    }

    public function setPrecoUnitario($bpreco){
       return $this->precoUnitario = $bpreco;
    }


    public function getEstoque(){
        return $this->qde_estoque;
    }

    public function setEstoque($best){
       return $this->qde_estoque = $best;
    }

    




}




?>