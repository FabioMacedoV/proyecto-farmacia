<?php

class Conexion{

    function ConexionDB(){

        $host = "D08KLAB102PC012\SQLEXPRESS";
        $dbname = "NickyMedicPrueba";
        $username = "usr_nickymedic";
        $password = "prueba12345";
        
        try{
            $conn = new PDO("sqlsrv:server=$host;database=$dbname", $username, $password);
            
            if($conn){
                return "Se conectó correctamente a la base de datos";
            }else{
                return "No se conecto";
            }

        }catch(PDOException $exp){
            echo("No se logró conectar correctamente con la Base de datos: $dbname, Error: " . $exp->getMessage());
        }

        return false;
    }

}