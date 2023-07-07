<?php

    require_once 'connection.php';
    require_once '../classes/bebidasLoja.inc.php';
    // require_once '../utils/Utilidade.inc.php';

    class BebidaDao{
        private $con;

        function __construct(){
            $c = new Connection();
            $this->con = $c->getConexao();
        }

        public function incluirBebida(Bebida $bebida){
            var_dump($this->con);
            $sql = $this->con->prepare("insert into bebidas (nome, volume, preco, peso, qde_estoque, fabricante)
            values(:nom, :vol, :preco, :peso, :est, :fab)");

            $sql->bindValue(':nom', $bebida->getNome());
            $sql->bindValue(':vol', $bebida->getVolume());
            $sql->bindValue(':preco', $bebida->getPreco());
            $sql->bindValue(':peso', $bebida->getPeso());
            $sql->bindValue(':est', $bebida->getEstoque());
            $sql->bindValue(':fab', $bebida->getFabricante());
            $sql->execute();


        }

        public function excluirBebida($id){
        
            $sql = $this->con->prepare("delete from bebidas where id_bebida = :id");
            $sql->bindValue(':id', $id);
            $sql->execute();

        }


        public function getbebidas(){
            $rs = $this->con->query("SELECT * FROM bebidas");

            $lista = array();

            while($row = $rs->fetch(PDO::FETCH_OBJ)){
                $bebida = new Bebida();
                $bebida->setBebida_id($row->id_bebida);
                $bebida->setVolume($row->volume);
                $bebida->setNome($row->nome);
                $bebida->setPreco($row->preco);
                $bebida->setPeso($row->peso);
                $bebida->setEstoque($row->qde_estoque);
                $bebida->setFabricante($row->fabricante);

                $lista[] =  $bebida;
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

        public function getbebida($id){
            $sql = "SELECT * FROM bebidas where id_bebida = :id";
            $stmt = $this->con->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            $resultSet = $stmt->fetch(PDO::FETCH_OBJ);
            return $this->criaRetornoBebida($resultSet);
        }
        function criaRetornoBebida($row){
            $bebida = new Bebida();
            $bebida->setBebida_id($row->id_bebida);
            $bebida->setNome($row->nome);
            $bebida->setVolume($row->volume);
            $bebida->setPreco($row->preco);
            $bebida->setPeso($row->peso);
            $bebida->setEstoque($row->qde_estoque);
            $bebida->setFabricante($row->fabricante);
            return $bebida;
        }

       



    }

    

    




?>