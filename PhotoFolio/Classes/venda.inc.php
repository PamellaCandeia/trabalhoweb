<?php

class Venda{
    private $id_venda;
    private $cpf;
    private $total;
    private $data;


    function __construct($cp, $tot){
        $this->cpf = $cp;
        $this->total =$tot;
        $this->data =time();
    }

    function getId_venda(){
        return $this->id_venda;
    }

    function getCPF(){
        return $this->cpf;
    }

    function getTotal(){
        return $this->total;
    }

    function getData(){
        return $this->data;
    }



}





?>