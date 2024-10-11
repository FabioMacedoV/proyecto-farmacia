<?php

class Core{

    //* Creamos las variables para manejas las rutas de nuestro codigo
    protected $controller;
    protected $method;
    protected $parameters = [];

    public function __construct()
    {
        //* Estraemos la Url del navegador
        $url = $this->getUrl();

        if($url != [] ){

            /*
        * Revisamos si dentro de la carpeta "controllers" existe un archivo con el mismo nombre
        * que el primer parametro de nuestra URL, si esta lo tiene, procede a asignar el nombre
        * para usarlo como nombre del archivo, y destruimos todo lo anterior del valor anterior 
        * de $url[0]
        */
        if(file_exists('../app/controllers/' . ucwords($url[0]) . '.php')){
            $this->controller = ucwords($url[0]);
            unset($url[0]);
        }

        //* Luego requerimos el archivo del nombre de nuestra variable $controller
        require_once '../app/controllers/' . $this->controller . '.php';
        $this->controller = new $this->controller;


        /*
        * Ahora hacemos lo mismo con el segundo valor, pero este lo usaremos como metodo de la
        * clase del controlador, si existe un segundo parametro y existe un metodo con el mismo
        * nombre de este en nuestro controlador, entonces se le asigna el valor a la variable 
        * $method, y de destruye el valor anterior de $url[1]
        */ 
        if(isset($url[1])){
            if(method_exists($this->controller, $url[1])){
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        /*
        * Ahora tenemos los parametros, como asignamos a $parameters un array vacio, lo que hacemos
        * es que comparamos si $parameters es igual a la URL, entonces nos dara los valores de la 
        * URL, asi si no hay nada en $parameters, entonces seguira siendo un array vacio.
        */
        $this->parameters = $url ? array_values($url) : [];

        /* 
        * Por ultimo usamos esta funcion call_user_func_array con los prarmetros obtenidos.
        */
        call_user_func_array([$this->controller, $this->method], $this->parameters);

        }else{
            $this->controller = ucwords('farmacia');

            require_once '../app/controllers/' . $this->controller . '.php';
            $this->controller = new $this->controller;
            
            $this->method = 'index';
            $this->parameters = $url ? array_values($url) : [];
            call_user_func_array([$this->controller, $this->method], $this->parameters);
        }

    }


    //* Funcion que extrae la URL de nuestros
    public function getUrl()
    {
        if(isset($_GET['url'])){
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);

            return $url;
        }
    }
}