<?php

class Conexao
{
      private $mysql_server = 'localhost';
      private $nome_banco = 'trabalhoweb';
      private $usuario = 'root';
      private $senha = ''; 
      private $conexao;

      public function getConexao()
      {
            $this->conexao = new PDO("mysql:host=$this->mysql_server;dbname=$this->nome_banco","$this->usuario","$this->senha");
            return $this->conexao;
      }
}

?>
