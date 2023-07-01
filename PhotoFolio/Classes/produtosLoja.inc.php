<?php

class Produto{
    private $id_bebida;
    private $nome;
    private $volume;
    private $preco;
    private $peso;
    private $estoque;
    private $fabricante;

    function setProduto($nome, $volume, $preco, $peso, $estoque, $fabricante){
        $this->nome = $nome;
        $this->volume = $volume;
        $this->preco = $preco;
        $this->peso = $peso;
        $this->estoque = $estoque;
        $this->fabricante = $fabricante;

        // $this->data_fabricacao = strtotime(str_replace('/','-',$data));

    }

    public function getid_bebida(){
        return $this->id_bebida;
    }

    public function setid_bebida($pid){
       return $this->id_bebida = $pid;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($pName){
       return $this->nome = $pName;
    }

    public function getvolume(){
        return $this->volume;
    }

    public function setvolume($pVol){
       return $this->volume = $pVol;
    }

    public function getPreco(){
        return $this->preco;
    }

    public function setPreco($ppreco){
       return $this->preco = $ppreco;
    }

    public function getEstoque(){
        return $this->estoque;
    }

    public function setEstoque($pest){
       return $this->estoque = $pest;
    }


    public function getFabricante(){
        return $this->fabricante;
    }

    public function setFabricante($pfab){
       return $this->fabricante = $pfab;
    }

    public function getPeso(){
        return $this->peso;
    }

    public function setPeso($pPeso){
        return $this->peso = $pPeso;
    }


}




?>