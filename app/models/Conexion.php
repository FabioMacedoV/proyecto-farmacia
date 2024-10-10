<?php

class Conexion{

    function ConexionDB(){

        $host = "localhost";
        $dbname = "restobar";
        $username = "usr_restobar";
        $password = "fabio12345";
        $puerto = 1433;

        try{

            $conn = new PDO("sqlsrv:Server=$host,$puerto;Database=$dbname", $username, $password);
            $resp = "Se conecto correctamente a la base de datos";

        }catch(PDOException $exp){
            echo("No se logro conectar correctamente con la Base de datos: $dbname, Error: $exp");
        }

        return $resp;

    }

}