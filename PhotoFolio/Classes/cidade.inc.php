<?php

class Cidade{
    private $id_cidade;
    private $cidade;
    private $estado;
    private $cep;
    private $valorFrete;
    private $peso;


    public function __construct(){
    }

    function setCidade($cidade, $estado, $cep, $valorFrete, $peso){
        $this->cidade = $cidade;
        $this->estado = $estado;
        $this->cep = $cep;
        $this->valorFrete = $valorFrete;
        $this->peso = $peso;
    }

    public function getCidadeId(){
        return $this->id_cidade;
    }

    public function getCidadeN(){
        return $this->cidade;
    }

    public function getEstado(){
        return $this->estado;
    }

    public function getCEP(){
        return $this->cep;
    }

    public function getValorFrete(){
        return $this->valorFrete;
    }

    public function getPeso(){
        return $this->peso;
    }

    public function setCidadeId($id){
        $this->id_cidade = $id;
    }

    public function setCidadeN($cid){
        $this->cidade = $cid;
    }

    public function setEstado($est){
        $this->estado = $est;
    }

    public function setCEP($cep){
        $this->cep = $cep;
    }

    public function setValorFrete($valorF){
        $this->valorFrete = $valorF;
    }

    public function setPeso($peso){
        $this->peso = $peso;
    }





}


















?>