<?php
    class Categoria extends Conectar{
        public function get_categoria(){
            $conectar = parent::conexion();
            parent::set_names();
            $sql="SELECT * FROM tm_categoria WHERE est=1";
            $sql=$conectar->prepare($sql);
            $sql->execute();
            return $resultado = $sql->fetchAll();
        }

        public function get_categoria_x_id($id){
            $conectar = parent::conexion();
            parent::set_names();
            $sql="SELECT * FROM tm_categoria WHERE est=1 AND cat_id=?";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1,$id);
            $sql->execute();
            return $resultado = $sql->fetchAll();
        }
    } 

    
?>