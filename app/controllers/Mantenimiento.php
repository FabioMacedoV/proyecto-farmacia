<?php

class Mantenimiento extends Control{

    public function inicio(){

        $datos = [
            'title' => 'Inicio',
            'css-ext' => '/css/mantenimiento/inicio.css',
            'grid' => [
                ["id" => "T001", "nombre" => "Nombre1", "edad" => 45, "cargo" => "empleado", "salario" => "4500"],
                ["id" => "T002", "nombre" => "Nombre2", "edad" => 23, "cargo" => "cajero", "salario" => "2500"],
            ]
        ];

        $this->load_view('mantenimiento/inicio', $datos);
    }
}