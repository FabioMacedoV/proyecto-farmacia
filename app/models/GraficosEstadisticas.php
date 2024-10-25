<?php

class GraficosEstadisticas extends Control{

    private $db;

    public function __construct(){
        $this->db = $this-> load_model("Conexion");
    }

    public function ventasMes(){

        $sql = "EXEC [dbo].[sp_reporte_ventas_del_mes]";
        $this->db->conectar();

        $stmt = $this->db->prepare($sql);

        // Ejecutar el procedimiento almacenado
        $stmt->execute();

        $this->db->desconectar();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }

    public function productoMasVendido(){

        $sql = "EXEC [dbo].[sp_reporte_producto_mas_vendido]";
        $this->db->conectar();

        $stmt = $this->db->prepare($sql);

        // Ejecutar el procedimiento almacenado
        $stmt->execute();

        $this->db->desconectar();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }

    public function ventasDiaria(){

        $sql = "EXEC [dbo].[sp_reporte_venta_diaria]";
        $this->db->conectar();

        $stmt = $this->db->prepare($sql);

        // Ejecutar el procedimiento almacenado
        $stmt->execute();

        $this->db->desconectar();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }

    public function clientesFrecuentes(){

        $sql = "EXEC [dbo].[sp_reporte_clientes_frecuentes]";
        $this->db->conectar();

        $stmt = $this->db->prepare($sql);

        // Ejecutar el procedimiento almacenado
        $stmt->execute();

        $this->db->desconectar();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }

    public function cantidadVentasMes(){

        $sql = "EXEC [dbo].[sp_reporte_cantidad_ventas_mes]";
        $this->db->conectar();

        $stmt = $this->db->prepare($sql);

        // Ejecutar el procedimiento almacenado
        $stmt->execute();

        $this->db->desconectar();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }
}