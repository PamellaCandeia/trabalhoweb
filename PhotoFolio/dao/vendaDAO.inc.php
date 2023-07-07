<?php

    require_once("../classes/Venda.inc.php");
    require_once("../classes/Item.inc.php");
    require_once("conexao.inc.php");
    require_once("../utils/utils.inc.php");
    
    class VendaDAO{

        public function __construct()
        {
            $conexao = new Conexao();
            $this->con = $conexao->getConexao();
        }

        private function getUltimaVenda(){
            $sql = $this->con->query("SELECT MAX(id_venda) AS maior FROM vendas")
            $sql->execute();

            $row = $sql->fetch(PDO::FETCH_OBJ);
            return $row->maior;
        };

        private function incluirItens($id_venda, $carrinho){
            $id_item = 1;
            foreach($carrinho as $item){
                $sql = this->con->query("
                    INSERT INTO itens (id_item, id_produto, quantidade, valorTotal, id_venda
                    VALUES (:id, :idProd, :quant, :val, :idVenda)
                ")
                
                $sql->bindvalue(':id', $id_item);
                $sql->bindvalue(':idProd', $item->getProduto()->getProduto());//getProdutoId(); 
                $sql->bindvalue(':quant', $item->getProduto()->getQuantidade());
                $sql->bindvalue(':val', $item->getProduto()->getValorItem());
                $sql->bindvalue(':id', $id_venda);
                $sql->execute();
                $id_item++;
            }
        };

        public function incluirVenda(Venda $venda, $carrinho){
            $sql = this->con->query("
                INSERT INTO itens (cpf_cliente, dataVenda, valorTotal
                VALUES (:cpf, :dtaVenda, :total)
            ")
            
            $sql->bindvalue(':cpf', $venda->getCpf());
            $sql->bindvalue(':data', converteDataMysql($venda->getData()));//getProdutoId(); 
            $sql->bindvalue(':total', $venda->getTotal());
            $sql->execute();

            $id = $this->getUltimaVenda();
            $this->incluirItens($id, $carrinho);
        };

        
    }

?>