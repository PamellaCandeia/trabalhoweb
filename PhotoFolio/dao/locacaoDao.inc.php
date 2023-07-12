<?php

    require_once 'connection.php';
    require_once '../classes/ProdutosLocacao.php';
    // require_once '../utils/Utilidade.inc.php';

    class LocacaoDao{
        private $con;

        function __construct(){
            $c = new Connection();
            $this->con = $c->getConexao();
        }

        public function incluirLocacao(Locacao $produto){
            var_dump($this->con);
            $sql = $this->con->prepare("insert into locacao (idProduto, dataLocacao, dataEntrega, quantidade, ValorTotal, situacao, totalDiarias)
            values(:idProduto, :dataLo, :Ent, :quant, :vt, :sit, :tD)");

            $sql->bindValue(':idProduto', $produto->getId_produto());
            $sql->bindValue(':dataLo', $produto->getDataLocacao());
            $sql->bindValue(':Ent', $produto->getDataEntrega());
            $sql->bindValue(':quant', $produto->getQuantidade());
            $sql->bindValue(':vt', $produto->getValorTotal());
            $sql->bindValue(':sit', $produto->getSituacao());
            $sql->bindValue(':tD', $produto->getTotalDiarias());
            $sql->execute();


        }

        public function excluirProduto($id){
        
            $sql = $this->con->prepare("delete from produtosloc where Prouto_id = :id");
            $sql->bindValue(':id', $id);
            $sql->execute();

        }


        public function getLocacoes(){
            $rs = $this->con->query("SELECT * FROM locacao");

            $lista = array();

            while($row = $rs->fetch(PDO::FETCH_OBJ)){
                $produto = new Locacao();
                $produto->setIDLocacao($row->idLocacao);
                $produto->setIdProduto($row->idProduto);
                $produto->setDataLocacao($row->dataLocacao);
                $produto->setDataEntrega($row->dataEntrega);
                $produto->setQuantidade($row->quantidade);
                $produto->setValorTotal($row->ValorTotal);
                $produto->setSituacao($row->situacao);
                $produto->setTotalDiarias($row->dataLocacao, $row->dataEntrega);

                $lista[] =  $produto;
                //o atributo do row é o mesmo nome do banco;
            }
            return $lista;
        }

        public function Alterarbebidas(bebida $bebida){
            $sql = $this->con->prepare("update bebidas set nome=:nom, volume=:vol, preco=:preco, peso=:peso, qde_estoque=:est, fabricante=:fab where id_bebida = :id");

            $sql->bindValue(':nom', $bebida->getNome());
            $sql->bindValue(':vol', $bebida->getVolume());
            $sql->bindValue(':preco', $bebida->getPreco());
            $sql->bindValue(':peso', $bebida->getPeso());
            $sql->bindValue(':est', $bebida->getEstoque());
            $sql->bindValue(':fab', $bebida->getFabricante());
            $sql->bindValue(':id', $bebida->getbebida_id());
            $sql->execute();

        }

        public function getLocacao($id){
            $sql = "SELECT * FROM locacao where idLocacao = :id";
            $stmt = $this->con->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            $resultSet = $stmt->fetch(PDO::FETCH_OBJ);
            return $this->criaRetornoProduto($resultSet);
        }

        function criaRetornoProduto($row){
            $produto = new Locacao();
            $produto->setIDLocacao($row->idLocacao);
            $produto->setIdProduto($row->idProduto);
            $produto->setDataLocacao($row->dataLocacao);
            $produto->setDataEntrega($row->dataEntrega);
            $produto->setQuantidade($row->quantidade);
            $produto->setValorTotal($row->ValorTotal);
            $produto->setSituacao($row->situacao);
            $produto->setTotalDiarias($row->dataLocacao, $row->dataEntrega);
            return $produto;
        }

       



    }

    

    




?>