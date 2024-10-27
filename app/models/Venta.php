<?php

class Venta extends Control
{

    private $db;

    public function __construct()
    {
        $this->db = $this->load_model("Conexion");
    }

    public function obtenerGrilla($nombre)
    {

        $sql = "EXEC [dbo].[sp_obtener_informacion_venta] @nombre = :nombre";

        $this->db->conectar();

        $stmt = $this->db->prepare($sql);

        $stmt->bindParam(":nombre", $nombre, PDO::PARAM_STR);

        $stmt->execute();

        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $results;
    }

    public function obtenerVenta($id)
    {
        $sql = "EXEC [dbo].[sp_obtenerventaporid] @venta_id = :id";

        $this->db->conectar();

        $stmt = $this->db->prepare($sql);

        $stmt->bindParam(":id", $id, PDO::PARAM_INT);

        $stmt->execute();

        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $results;
    }

    public function obtenerDetalleVenta($id)
    {
        $sql = "EXEC [dbo].[sp_obtenerdetalleventaporid] @venta_id = :id";

        $this->db->conectar();

        $stmt = $this->db->prepare($sql);

        $stmt->bindParam(":id", $id, PDO::PARAM_INT);

        $stmt->execute();

        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $results;
    }

    public function obtenerProductoPorId($id)
    {
        $sql = "EXEC [dbo].[sp_obtener_producto_por_id] @producto_id = :id";

        $this->db->conectar();

        $stmt = $this->db->prepare($sql);

        $stmt->bindParam(":id", $id, PDO::PARAM_INT);

        $stmt->execute();

        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $results;
    }

    public function agregarDatosVenta($data)
    {
        $sql = "EXEC [dbo].[sp_insertar_venta] 
        @tipoDoc = :documento,
        @numero = :numero,
        @fecha = :fecha,
        @cliente_id = :cliente,
        @empleado_id = :empleado,
        @total = :total";

        $this->db->conectar();

        $stmt = $this->db->prepare($sql);

        $stmt->bindParam(":documento", $data['documento'], PDO::PARAM_STR);
        $stmt->bindParam(":numero", $data['numero'], PDO::PARAM_STR);
        $stmt->bindParam(":fecha", $data['fecha'], PDO::PARAM_STR);
        $stmt->bindParam(":cliente", $data['cliente'], PDO::PARAM_STR);
        $stmt->bindParam(":empleado", $data['empleado'], PDO::PARAM_STR);
        $stmt->bindParam(":total", $data['total'], PDO::PARAM_STR);

        $stmt->execute();


        return true;
    }

    public function agregarDetalleVenta($data)
    {
        $sql = "EXEC [dbo].[sp_insertar_detalleventa]
        @cantidad = :cantidad,
        @precio_unitario = :precio,
        @impuestos = :impuestos,
        @descuento = :descuentos,
        @producto_id = :producto";

        $this->db->conectar();

        $stmt = $this->db->prepare($sql);

        $stmt->bindParam(":cantidad", $data['cantidad'], PDO::PARAM_STR);
        $stmt->bindParam(":precio", $data['precio'], PDO::PARAM_STR);
        $stmt->bindParam(":impuestos", $data['impuestos'], PDO::PARAM_STR);
        $stmt->bindParam(":descuentos", $data['descuentos'], PDO::PARAM_STR);
        $stmt->bindParam(":producto", $data['producto'], PDO::PARAM_STR);

        $stmt->execute();
        return true;
    }
}
