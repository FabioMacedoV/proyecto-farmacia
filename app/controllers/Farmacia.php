<?php

class Farmacia extends Control{

    public function index(){

        $datos = [
            'title' => 'Inicio',
            'css-ext' => '/css/inicio.css'
        ];

        $this->load_view('inicio', $datos);

    }

}