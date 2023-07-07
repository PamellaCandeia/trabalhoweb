<?php

class Venda{
    private $id_compra;
    private $id_cliente;
    private $valor_total;
    private $data_compra;
    private $valortotal_frete;


    function __construct($id_cliente, $tot , $fret){
        $this->id_cliente = $id_cliente;
        $this->valor_total =$tot;
        $this->valortotal_frete = $fret;
        $this->data_compra = time();
    }

    function getId_Compra(){
        return $this->id_compra;
    }

    function getId_Cliente(){
        return $this->id_cliente;
    }

    function getTotal(){
        return $this->valor_total;
    }

    function getFrete(){
        return $this->valortotal_frete;
    }

    function getData(){
        return $this->data_compra;
    }



}





?>