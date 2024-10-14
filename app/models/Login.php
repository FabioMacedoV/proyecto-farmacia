<?php

class Login extends Control{

    private $db;

    public function __construct()
    {
        $this->db = $this-> load_model("Conexion");
    }

    public function loguearse($usuario, $contrasenia){

        $this->db->conectar();
        $resp = $this->db->prepare("EXEC [dbo].[sp_login] @nombre = $usuario, @contrasenia= $contrasenia");
        $resp->execute();

        if($resp -> fetch(PDO::FETCH_OBJ) != 0){
            return true;
        }else{
            return false;
        }

    }

}

?>