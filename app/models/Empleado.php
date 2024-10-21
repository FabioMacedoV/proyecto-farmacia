<?php

class Empleado extends Control{

    private $db;

    public function __construct(){
        $this ->db = $this-> load_model("Conexion");
    }

    public function obtenerGrilla($nombre){
        
        $sql = "EXEC [dbo].[sp_obtener_informacion_empleado] @nombre = :nombre";

        $this->db->conectar();

        $stmt = $this->db->prepare($sql);

        $stmt->bindParam(":nombre", $nombre, PDO::PARAM_STR);

        $stmt->execute();

        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $results;

    }

    public function obtenerEmpleado($id){

        $sql = "EXEC [dbo].[sp_obtenerempleadoporid] @empleado_id = :id";

        $this->db->conectar();

        $stmt = $this->db->prepare($sql);

        $stmt->bindParam(":id", $id, PDO::PARAM_INT);

        $stmt->execute();

        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $results;

    }

    public function guardarEmpleado($data){

        $sql = "EXEC [dbo].[sp_insertar_empleado]
        @nombre = :nombre, 
        @dni = :dni, 
        @apellidos = :apellidos, 
        @fecha_nacimiento = :fechaNacimiento, 
        @direccion = :direccion, 
        @celular = :celular, 
        @email = :email, 
        @rol_empleado_id = :rol,
        @salario = :salario,
        @inicio_contrato = :inicioContrato,
        @horario_id = :horario,
        @fin_contrato = :finContrato";

        $this->db->conectar();

        $stmt = $this->db->prepare($sql);

        $stmt->bindParam(":nombre", $data['nombre'], PDO::PARAM_STR);
        $stmt->bindParam(":dni", $data['dni'], PDO::PARAM_STR);
        $stmt->bindParam(":apellidos", $data['apellidos'], PDO::PARAM_STR);
        $stmt->bindParam(":fechaNacimiento", $data['fechaNacimiento'], PDO::PARAM_STR);
        $stmt->bindParam(":direccion", $data['direccion'], PDO::PARAM_STR);
        $stmt->bindParam(":celular", $data['celular'], PDO::PARAM_STR);
        $stmt->bindParam(":email", $data['correo'], PDO::PARAM_STR);
        $stmt->bindParam(":rol", $data['rol'], PDO::PARAM_INT);
        $stmt->bindParam(":salario", $data['salario'], PDO::PARAM_INT);
        $stmt->bindParam(":inicioContrato", $data['inicioContrato'], PDO::PARAM_STR);
        $stmt->bindParam(":horario", $data['horario'], PDO::PARAM_INT);
        $stmt->bindParam(":finContrato", $data['finContrato'], PDO::PARAM_STR);

        $stmt->execute();
        return true;

    }

    public function actualizarEmpleado($data){

        $sql = "EXEC [dbo].[sp_actualizar_empleado]
        @empleado_id = :id,
        @nombre = :nombre, 
        @dni = :dni, 
        @apellidos = :apellidos, 
        @fecha_nacimiento = :fechaNacimiento, 
        @direccion = :direccion, 
        @celular = :celular, 
        @email = :email, 
        @rol_empleado_id = :rol,
        @salario = :salario,
        @inicio_contrato = :inicioContrato,
        @horario_id = :horario,
        @fin_contrato = :finContrato";

        $this->db->conectar();

        $stmt = $this->db->prepare($sql);

        $stmt->bindParam(":id", $data['id'], PDO::PARAM_STR);
        $stmt->bindParam(":nombre", $data['nombre'], PDO::PARAM_STR);
        $stmt->bindParam(":dni", $data['dni'], PDO::PARAM_STR);
        $stmt->bindParam(":apellidos", $data['apellidos'], PDO::PARAM_STR);
        $stmt->bindParam(":fechaNacimiento", $data['fechaNacimiento'], PDO::PARAM_STR);
        $stmt->bindParam(":direccion", $data['direccion'], PDO::PARAM_STR);
        $stmt->bindParam(":celular", $data['celular'], PDO::PARAM_STR);
        $stmt->bindParam(":email", $data['correo'], PDO::PARAM_STR);
        $stmt->bindParam(":rol", $data['rol'], PDO::PARAM_INT);
        $stmt->bindParam(":salario", $data['salario'], PDO::PARAM_INT);
        $stmt->bindParam(":inicioContrato", $data['inicioContrato'], PDO::PARAM_STR);
        $stmt->bindParam(":horario", $data['horario'], PDO::PARAM_INT);
        $stmt->bindParam(":finContrato", $data['finContrato'], PDO::PARAM_STR);

        $stmt->execute();
        return true;

    }



}