<?php
    class Conectar{
        protected $dbh;
        protected function Conexion(){
            try{
                $conectar=$this->dbh= new PDO("mysql:local=localhost;dbname=apiPHP","root","Literaturarusa1");
                return $conectar;
            }catch(Exception $e){
                print "!Error BD! : ". $e->getMessage()."<br/>";
                die();
            }
        }
        public function set_names(){
            return $this->dbh->query("Set Names 'utf8'");
        }
    }
?>