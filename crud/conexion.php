<?php

    class Conexion{

        public function conectar(){
            $conexion = new PDO("mysql:host=localhost;dbname=pdof","root","");
            return $conexion;
        }


        



    }

   /* $obj = new Conexion();
    if($obj -> conectar()){
        echo "conectado con exito";
    }else {
        echo "No se a podido conectar";
    }*/




?>