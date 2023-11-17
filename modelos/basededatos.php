<?php 
class BaseDatos{
    const servidor= "localhost";
    const usuariobd= "root";
    const clave= "122333";
    const nombrebd="trabajo_cigr";
    public static function Conectar(){
        try{
            $conexion = new PDO ("mysql:host=".self::servidor.";dbname=".self::nombrebd.";charset=utf8",self::usuariobd,self::clave);
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conexion;
        }catch(PDOException $e){
            return "Fallo".$e->getMessage();
            
        }
    }
}
?>