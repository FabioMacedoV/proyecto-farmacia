<?php

class Control{

    //* Esta funcion se encarga de requerir el modelo que vamos a usar en el controlador
    public function load_model($model)
    {
        require_once '../app/models/' . $model . '.php';

        return new $model;
    }

    //* Esta funcion se encarga de requerir la vista que vamos a usar en el controlador
    //? Ademas podemos llamar a un array de datos para la vista, como para un editar
    
    public function load_view($view, $datos = [])
    {
        if(file_exists('../app/views/pages/' . $view . '.php')){
            require_once '../app/views/pages/' . $view . '.php';
        }
        else
        {
        die("404 NOT FOUND");
        }
    }
}