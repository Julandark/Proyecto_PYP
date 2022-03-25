<?php
require_once "../modelo/modelousuario.php";
class controladorUsuario{
    static public function contrConsultausuarios(){
        $respuesta = Modelousuarios::Consultausuarios();
        return $respuesta;
}
static public function contrInsertarusuarios($datos){
    if (!empty($datos[0])&&!empty($datos[1])&&!empty($datos[2])) {
        $datos1=array($datos[0],$datos[1],$datos[2]);
        $respuesta = Modelousuarios::insertarusuarios($datos1);
    }else{
    $respuesta = "vacio";
    return $respuesta;
}
    

}
}

