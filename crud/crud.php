<?php

    require_once "conexion.php";

    class Crud extends Conexion{

        public function mostrarDatos(){
            $sql="SELECT id,nombre,sueldo,edad,fRegistro FROM t_crud";

            $query = Conexion::conectar() -> prepare($sql);

            $query -> execute();

            return $query -> fetchAll();

            $query -> close();



        }
        public function insertarDatos($datos){
            $sql = "INSERT INTO t_crud (nombre,sueldo,edad,fRegistro) values (:nombre,:sueldo,:edad,:fRegistro) ";
            $query = Conexion::conectar() -> prepare($sql);
            $query -> bindparam(":nombre",$datos["nombre"], PDO::PARAM_STR);
            $query -> bindparam(":sueldo",$datos["sueldo"], PDO::PARAM_STR);
            $query -> bindparam(":edad",$datos["edad"], PDO::PARAM_INT);
            $query -> bindparam(":fRegistro",$datos["fecha"], PDO::PARAM_STR);
            return $query -> execute();
            $query -> close(); 
            
        }
        
        public function obtenerDatos($id){
            $sql = "SELECT id,nombre,sueldo,edad,fRegistro FROM t_crud WHERE id=:id";
            $query = Conexion::conectar()->prepare($sql);
            $query -> bindparam(":id", $id, PDO::PARAM_INT);
            $query -> execute();
            return $query->fetch();
            $query->close();
        }

        public function actualizarDatos($datos){
            $sql = "UPDATE t_crud SET nombre = :nombre, sueldo = :sueldo, edad = :edad, fRegistro = :fRegistro WHERE id=:id";
            $query=Conexion::conectar()->prepare($sql);
            $query -> bindparam(":nombre",$datos["nombre"], PDO::PARAM_STR);
            $query -> bindparam(":sueldo",$datos["sueldo"], PDO::PARAM_STR);
            $query -> bindparam(":edad",$datos["edad"], PDO::PARAM_INT);
            $query -> bindparam(":fRegistro",$datos["fecha"], PDO::PARAM_STR);
            $query -> bindparam(":id",$datos["id"], PDO::PARAM_INT);

            return $query -> execute();
            $query -> close();



        }

        public function eliminarDatos($id){
            $sql = "DELETE FROM t_crud WHERE id=:id";
            $query = Conexion::conectar()->prepare($sql);
            $query -> bindParam(":id",$id, PDO::PARAM_INT);
            return $query ->execute();
            $query->close();
 
        }

    }


?>