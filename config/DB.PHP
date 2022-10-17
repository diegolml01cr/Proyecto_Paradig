<?php
    class db{
        private $host= "localhost";
        private $dbname="BUFETE_ABOGADOS";
        private $user="DREYES";
        private $password="Qwerty1029";
        public function conexion(){
            try{
                
                $PDO = new PDO("mysql:host=".$this->host.";dbname=".$this->dbname,$this->user,$this->password);
                return $PDO;
                
            }catch(PDOException $e){
                return $e->getMessage();
            }
        }
    }

?>