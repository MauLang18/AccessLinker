<?php
    class db{
        private $host = "localhost";
        private $dbname = "DB_ACCESSLINKER";
        private $username = "root";
        private $password = "171822";

        public function conexion(){
            try{
                $PDO = new PDO("mysql:host=".$this->host.";dbname=".$this->dbname,$this->username,$this->password);
                return $PDO;
            }catch(PDOException $e){
                return $e->getMessage();
            }
        }
    }
    $obj = new db();
    print_r($obj->conexion());
?>