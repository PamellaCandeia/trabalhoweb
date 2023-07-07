<?php

    require_once '../classes/venda.inc.php';
    require_once '../classes/Item.inc.php';
    require_once 'connection.php';
    require_once '../utils/Utilidade.inc.php';
    
    class VendaDAO{
        private $con;

        public function __construct()
        {
            $conexao = new Connection();
            $this->con = $conexao->getConexao();
        }

        private function getUltimaVenda(){
            $sql = $this->con->query("select MAX(id_compra) as maior from compras");
            $sql->execute();

            $row = $sql->fetch(PDO::FETCH_OBJ);

            return $row->maior;
        }

        private function incluirItens($id_Compra, $carrinho){
            //$id_item = 1;
            foreach($carrinho as $item){
                $sql = $this->con->prepare("
                    insert into itens_compra ( id_bebida, quantidade, valor_item, id_compra)
                    values (:idBebida, :quant, :valItem, :idC)
                ");
                
               // $sql->bindvalue(':id', $id_item);
                $sql->bindvalue(':idBebida', $item->getBebida()->getBebida_id());//getProdutoId(); 
                $sql->bindvalue(':quant', $item->getQuantidade());
                $sql->bindvalue(':val', $item->getValorItem());
                $sql->bindvalue(':idC', $id_Compra);
                $sql->execute();
               // $id_item++;
            }
        }

        public function incluirVenda(Venda $compra, $carrinho){
            $sql = $this->con->prepare("
                insert into compras (id_cliente, data_compra, valor_total, valortotal_frete)
                values (:cliente, :dataCompra, :total, :frete)
            ");
            
            $sql->bindvalue(':cliente', $compra->getId_Cliente());
            $sql->bindvalue(':dataCompra', convertDataMysql($compra->getData()));//getProdutoId(); 
            $sql->bindvalue(':total', $compra->getTotal());
            $sql->bindvalue(':frete', $compra->getFrete());
            $sql->execute();

            $id = $this->getUltimaVenda();
            $this->incluirItens($id, $carrinho);
        }

        
    }

?>