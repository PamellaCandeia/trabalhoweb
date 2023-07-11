<?php
 require_once "ProdutosLocacao.php";

 class Locacao
{
    private ProdutosLocacao $Produto;
    private $nome;
    private $idProduto;
    private $idLocacao;
    private $dataLocacao;
    private $dataEntrega;
    private $ValorTotal;
    private $quantidade;
    private $situacao;
    private $totalDiarias;

    function setLocacao($nome, $dataLocacao, $dataEntrega, $quantidade)
    {
        $this->nome = $nome;
        $this->quantidade = $quantidade;
        $this->dataLocacao = $dataLocacao;
        $this->dataEntrega = $dataEntrega;
       
    }

    function getQuantidade(){
        return $this->quantidade;
    }

    public function setQuantidade()
    {
        return $this->quantidade;
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
        return $this->dataLocacao = $dataEntrega;
    }


    public function getDataSituacao()
    {
        return $this->situacao;
    }

    public function setDataSituacao($situacao)
    {
        return $this->situacao = $situacao;
    }


    public function getTotalDiarias(){
        return $this->totalDiarias;
    }

    public function setTotalDiarias($dataLocacao , $dataEntrega){
        
        return $this->totalDiarias = $dataEntrega - $dataLocacao;
    }
    

    public function setValorTotal($totalDiarias)
    {
        $this->ValorTotal =  $totalDiarias * $this->Produto->getPrecoUnitario();
    }

   
















}