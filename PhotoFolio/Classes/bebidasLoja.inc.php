<?php

class Bebida{
    private $bebida_id;
    private $nome;
    private $volume;
    private $preco;
    private $peso;
    private $qde_estoque;
    private $fabricante;

    function setBebida($nome, $volume, $preco, $peso, $qde_estoque, $fabricante){
        $this->nome = $nome;
        $this->volume = $volume;
        $this->preco = $preco;
        $this->peso = $peso;
        $this->qde_estoque = $qde_estoque;
        $this->fabricante = $fabricante;

    }

    public function getBebida_id(){
        return $this->bebida_id;
    }

    public function setBebida_id($bid){
       return $this->bebida_id = $bid;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($bName){
       return $this->nome = $bName;
    }

    public function getVolume(){
        return $this->volume;
    }

    public function setVolume($bdesc){
       return $this->volume = $bdesc;
    }

    public function getPreco(){
        return $this->preco;
    }

    public function setPreco($bpreco){
       return $this->preco = $bpreco;
    }

    public function getPeso(){
        return $this->preco;
    }

    public function setPeso($bpeso){
       return $this->preco = $bpeso;
    }

    public function getEstoque(){
        return $this->qde_estoque;
    }

    public function setEstoque($best){
       return $this->qde_estoque = $best;
    }


    public function getFabricante(){
        return $this->fabricante;
    }

    public function setFabricante($bfab){
       return $this->fabricante = $bfab;
    }



}




?>