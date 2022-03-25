<?php
require_once "conexion.php";
class Modelousuarios{
    static public function Consultausuarios() {
        $consulta=Conexion::conectar()->prepare("SELECT*FROM usuarios");
        $consulta->execute();
        return $consulta->fetchAll();
    }
 static public function InsertarUsuarios($datos){

    $consulta=Conexion::conectar()->prepare("INSERT INTO usuarios (email, username, password) VALUES (
    '$datos[0]',
    '$datos[1]',
    '$datos[2]'
    )");

if($consulta -> execute())
				return "ok";
			else
				return "error";
}   
}