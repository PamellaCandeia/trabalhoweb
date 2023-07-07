<?php

class Connection
{
      private $mysql_server = 'localhost';
      private $base_name = 'distribuidora';
      private $user = 'root';
      private $password = ''; 
      private $connection;

      public function getConexao()
      {
            $this->connection = new PDO("mysql:host=$this->mysql_server;dbname=$this->base_name","$this->user","$this->password");
            return $this->connection;
      }
}

?>
