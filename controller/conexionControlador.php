<?php
class conexion{

    private $servidor = 'localhost';
    private $usuario = 'root';
    private $pass = '';    
    private $dbName = 'proyecto_personal';
    private $conexion;
    public function __construct()
    {
       try {
           $this->conexion = new PDO("mysql:host=$this->servidor;dbname=$this->dbName",$this->usuario,$this->pass);
           $this->conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);           

       } catch (PDOException $e) {
           return "Falla de conexion".$e;
       } 
    }
    public function ejecutar($query){
        $this->conexion->exec($query);
        return $this->conexion->lastInsertId();
    }



}


?>