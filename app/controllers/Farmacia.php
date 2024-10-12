<?php

class Farmacia extends Control{

    public function index(){

        $datos = [
            'title' => 'Inicio',
            'css-ext' => '/css/inicio.css'
        ];

        $this->load_view('inicio', $datos);
    }

    public function login(){

        $datos = [
            "title" => "Login",
            "css-ext" => '/css/login.css'
        ];

        $this->load_view("login", $datos);
    }

}