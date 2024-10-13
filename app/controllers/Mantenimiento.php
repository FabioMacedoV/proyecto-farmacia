<?php

class Mantenimiento extends Control{

    public function inicio(){

        $datos = [
            'title' => 'Inicio',
            'css-ext' => '/css/mantenimiento/inicio.css'
        ];

        $this->load_view('mantenimiento/inicio', $datos);
    }
}