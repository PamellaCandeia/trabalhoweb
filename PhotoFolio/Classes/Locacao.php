<?php
 require_once "ProdutosLocacao.php";

 class Locacao
{
    private $idProduto;
    private $idLocacao;
    private $dataLocacao;
    private $dataEntrega;
    private $ValorTotal;
    private $quantidade;
    private $situacao;
    private $totalDiarias;

    function setLocacao( $idProduto, $dataLocacao, $dataEntrega, $quantidade)
    {
        $this->idProduto = $idProduto;
        $this->quantidade = $quantidade;
        $this->dataLocacao = $dataLocacao;
        $this->dataEntrega = $dataEntrega;
       
    }

    function getQuantidade(){
        return $this->quantidade;
    }

    public function setQuantidade($quant)
    {
        return $this->quantidade = $quant;
    }


    function getId_produto(){
        return $this->idProduto;
    }

    public function getIDLocacao()
    {
        return $this->idLocacao;
    }

    public function setIDLocacao($idLocacao)
    {
        $this->idLocacao = $idLocacao;
    }

    public function getIdProduto()
    {
        return $this->idProduto;
    }

    public function setIdProduto($idProduto)
    {
        $this->idProduto = $idProduto;
    }

    public function getValorTotal()
    {
        return $this->ValorTotal;
    }

    public function getDataLocacao()
    {
        return $this->dataLocacao;
    }

    public function setDataLocacao($dataLocacao)
    {
        return $this->dataLocacao = $dataLocacao;
    }

    public function getDataEntrega()
    {
        return $this->dataEntrega;
    }

    public function setDataEntrega($dataEntrega)
    {
        return $this->dataEntrega = $dataEntrega;
    }


    public function getSituacao()
    {
        return $this->situacao;
    }

    public function setSituacao($situacao)
    {
        return $this->situacao = $situacao;
    }


    public function getTotalDiarias(){
        return $this->totalDiarias;
    }

    public function setTotalDiarias($dataLocacao , $dataEntrega){
        $locacao = DateTime::createFromFormat('Y-m-d', $dataLocacao);
        $entrega = DateTime::createFromFormat('Y-m-d', $dataEntrega);
        $numdias = $entrega->diff($locacao);
        return $this->totalDiarias = $numdias->days;
    }
    

    public function setValorTotal($total)
    {
        $this->ValorTotal =  $total;
    }

   
















}