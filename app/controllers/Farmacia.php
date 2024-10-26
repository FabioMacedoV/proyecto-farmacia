<?php

class Farmacia extends Control{

    public function index(){

        $datos = [
            'title' => 'Inicio',
            'css-ext' => '/css/farmacia/inicio.css',
        ];

        $this->load_view('farmacia/inicio', $datos);
    }

    public function login($mensaje = null){

        $datos = [
            "title" => "Login",
            "css-ext" => '/css/login/login.css',
            "mensaje" => $mensaje
        ];

        $this->load_view("login/login", $datos);
    }


    //* Funciones de Ejecucion;
    public function iniciar_sesion(){
        
        $modelo = $this->load_model("Login");

        $usuario = trim($_POST["txtusuario"]);
        $contrasenia = trim($_POST["txtcontrasenia"]);

        $resp = $modelo->loguearse($usuario, $contrasenia);


        if((int)$resp['confirmacion'] != 1 ){
            return $this->login("Error");
        }

        if((int)$resp['id_usuario'] == 0){
            return $this->login("Error");
        }

        if($resp['nombre_usuario'] == ''){
            return $this->login("Error");
        }

        if($resp['tipo_usuario'] < 1){
            return $this->login("Error");
        }

        session_start();

        $_SESSION['IdUsuario'] = $resp['id_usuario'];
        $_SESSION['Usuario'] = $resp['nombre_usuario'];
        $_SESSION['Tipousuario'] = $resp['tipo_usuario'];

        
        header("Location: ".URL.'/mantenimiento/inicio');
        exit();
        
    }

    public function cerrar_sesion(){
        session_start();
        $_SESSION = array();

        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(session_name(), '', time() - 42000,
                $params["path"], $params["domain"],
                $params["secure"], $params["httponly"]
            );
        }

        session_destroy();
        $this->login();
    }

}