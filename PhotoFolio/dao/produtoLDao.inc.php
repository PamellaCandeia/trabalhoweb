<?php

    require_once 'connection.php';
    require_once '../classes/ProdutosLocacao.php';
    // require_once '../utils/Utilidade.inc.php';

    class ProdutoDao{
        private $con;

        function __construct(){
            $c = new Connection();
            $this->con = $c->getConexao();
        }

        public function incluirProduto(ProdutosLocacao $produto){
            var_dump($this->con);
            $sql = $this->con->prepare("insert into produtosloc (nome, tipo, precoUnitario, qde_estoque)
            values(:nom, :tipo, :preco, :est)");

            $sql->bindValue(':nom', $produto->getNome());
            $sql->bindValue(':tipo', $produto->getTipo());
            $sql->bindValue(':preco', $produto->getPrecoUnitario());
            $sql->bindValue(':est', $produto->getEstoque());
            $sql->execute();


        }

        public function excluirProduto($id){
        
            $sql = $this->con->prepare("delete from produtosloc where Prouto_id = :id");
            $sql->bindValue(':id', $id);
            $sql->execute();

        }


        public function getProdutos(){
            $rs = $this->con->query("SELECT * FROM produtosloc");

            $lista = array();

            while($row = $rs->fetch(PDO::FETCH_OBJ)){
                $produto = new ProdutosLocacao();
                $produto->setProduto_id($row->Produto_id);
                $produto->setNome($row->nome);
                $produto->setTipo($row->volume);
                $produto->setPrecoUnitario($row->precoUnitario);
                $produto->setEstoque($row->qde_estoque);

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

        public function getProduto($id){
            $sql = "SELECT * FROM produtosloc where Produto_id = :id";
            $stmt = $this->con->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            $resultSet = $stmt->fetch(PDO::FETCH_OBJ);
            return $this->criaRetornoProduto($resultSet);
        }

        function criaRetornoProduto($row){
            $produto = new ProdutosLocacao();
            $produto->setProduto_id($row->Produto_id);
            $produto->setNome($row->nome);
            $produto->setTipo($row->volume);
            $produto->setPrecoUnitario($row->precoUnitario);
            $produto->setEstoque($row->qde_estoque);
            return $produto;
        }

       



    }

    

    




?>