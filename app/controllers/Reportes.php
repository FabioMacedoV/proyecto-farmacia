<?php

class reportes extends control{

    public function inicio(){
        $datos = [
            'title' => 'Reportes',
        ];

        $this->load_view('reporte/inicio', $datos);
    }

    public function venta(){
        $datos = [
            'title' => 'Reporte Venta',
            'css-ext' => '/css/reporte/grid-view.css',
        ];

        $this->load_view('reporte/reporte-venta', $datos);
    }

    public function producto(){
        $datos = [
            'title' => 'Reporte Producto',
            'css-ext' => '/css/reporte/grid-view.css',
        ];

        $this->load_view('reporte/reporte-producto', $datos);
    }

}