<?php

    require_once 'connection.php';
    require_once '../Classes/cidade.inc.php';
    require_once '../utils/Utilidade.inc.php';

    class cidadesDao{
        private $con;

        function __construct(){
            $c = new Connection();
            $this->con = $c->getConexao();
        }


        public function getCidades(){
            $rs = $this->con->query("SELECT * FROM cidades");

            $lista = array();

            while($row = $rs->fetch(PDO::FETCH_OBJ)){  
    
                $cidade = new Cidade();
                $cidade->setCidadeId($row->id_cidade);
                $cidade->setCEP($row->CEP);
                $cidade->setCidadeN($row->cidade);
                $cidade->setEstado($row->estado);
                $cidade->setValorFrete($row->valorfrete_porPeso);
                $cidade->setPeso($row->peso);
                // $lista[] =  $row;
                $lista[] =  $cidade;
            
            }
            return $lista;
        }

        


    }

    

    




?>