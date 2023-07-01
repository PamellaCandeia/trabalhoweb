<?php

    require_once 'connection.php';
    require_once '../classes/produtoLoja.inc.php';
    // require_once '../utils/Utilidade.inc.php';

    class ProdutoDao{
        private $con;

        function __construct(){
            $c = new Connection();
            $this->con = $c->getConexao();
        }

        public function incluirProduto(Produto $produto){
            var_dump($this->con);
            $sql = $this->con->prepare("insert into bebidas (nome, volume, preco, peso, qde_estoque, fabricante)
            values(:nom, :vol, :preco, :peso, :est, :fab)");

            $sql->bindValue(':nom', $produto->getNome());
            $sql->bindValue(':vol', $produto->getvolume());
            $sql->bindValue(':preco', $produto->getPreco());
            $sql->bindValue(':peso', $produto->getPeso());
            $sql->bindValue(':est', $produto->getEstoque());
            $sql->bindValue(':fab', $produto->getFabricante());
            $sql->execute();


        }

        // public function excluirproduto($id){
        
        //     $sql = $this->con->prepare("delete from produtos where produto_id = :id");
        //     $sql->bindValue(':id', $id);
        //     $sql->execute();

        // }


        // public function getProdutos(){
        //     $rs = $this->con->query("SELECT * FROM produtos");

        //     $lista = array();

        //     while($row = $rs->fetch(PDO::FETCH_OBJ)){
        //         $produto = new Produto();
        //         $produto->setProduto_id($row->produto_id);
        //         $produto->setref($row->referencia);
        //         $produto->setNome($row->nome);
        //         $produto->setPreco($row->preco);
        //         $produto->setDescricao($row->descricao);
        //         $produto->setEstoque($row->estoque);
        //         $produto->setFabricante($row->cod_fabricante);
        //         $produto->setData($row->data_fabricacao);

        //         $lista[] =  $produto;
        //         //o atributo do row é o mesmo nome do banco;
        //     }
        //     return $lista;
        // }

        // public function AlterarProdutos(Produto $produto){
        //    // var_dump($this->con);
        //     $sql = $this->con->prepare("update produtos set nome=:nom, descricao=:desc, data_fabricacao=:data, preco=:preco, estoque=:est, referencia=:ref, cod_fabricante=:fab
        //     where produto_id = :id");

        //     $sql->bindValue(':nom', $produto->getNome());
        //     $sql->bindValue(':desc', $produto->getDescricao());
        //     $sql->bindValue(':preco', $produto->getPreco());
        //     $sql->bindValue(':est', $produto->getEstoque());
        //     $sql->bindValue(':ref', $produto->getRef());
        //     $sql->bindValue(':fab', $produto->getFabricante());
        //     $sql->bindValue(':data', convertDataMysql($produto->getData()));
        //     $sql->bindValue(':id', $produto->getProduto_id());
        //     $sql->execute();

        // }


        // public function getProduto($id){

        //     $sql = $this->con->prepare("select * from produtos where produto_id = :id");
        //     $sql->bindValue(':id', $id);
        //     $sql->execute();

        //     $row = $sql->fetch(PDO::FETCH_OBJ);
        //     $produto = new Produto();
        //     $produto->setProduto_id($row->produto_id);
        //     $produto->setref($row->referencia);
        //     $produto->setNome($row->nome);
        //     $produto->setPreco($row->preco);
        //     $produto->setDescricao($row->descricao);
        //     $produto->setEstoque($row->estoque);
        //     $produto->setFabricante($row->cod_fabricante);
        //     $produto->setData($row->data_fabricacao);

        //     return $produto;
           
            
        // }

       



    }

    

    




?>