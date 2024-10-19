<?php

class Conexion extends Control{

    private $conexion;

    function conectar(){

        $host = "DESKTOP-JOAJFTF\SQLSERVER";
        $dbname = "NickyMedic";
        $username = "usr_nickymedic";
        $password = "prueba12345";

        try{
            $this->conexion = new PDO("sqlsrv:server=$host;database=$dbname", $username, $password);
            
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $this->conexion;

        }catch(PDOException $exp){
            echo("No se logró conectar correctamente con la Base de datos: $dbname, Error: " . $exp->getMessage());
        }

        return false;
    }

    public function desconectar(){
        $this->conexion = null;
    }

    public function prepare($sql) {
        return $this->conexion->prepare($sql); // Devuelve la declaración preparada
    }

}