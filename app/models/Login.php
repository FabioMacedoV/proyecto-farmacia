<?php

class Login extends Control{

    private $db;

    public function __construct()
    {
        $this->db = $this-> load_model("Conexion");
    }

    public function loguearse($usuario, $contrasenia){

        $sql = "EXEC [dbo].[sp_login] @nombre = :usuario, @contrasenia = :contrasenia";

        $this->db->conectar();
        $stmt = $this->db->prepare($sql);

        // Enlazar los parámetros de entrada
        $stmt->bindParam(':usuario', $usuario, PDO::PARAM_STR);
        $stmt->bindParam(':contrasenia', $contrasenia, PDO::PARAM_STR);

        // Ejecutar el procedimiento almacenado
        $stmt->execute();

        // Capturar el valor devuelto
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        return $result;
    }

}

?>