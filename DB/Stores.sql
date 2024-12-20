USE [NickyMedic]
GO
/****** Object:  StoredProcedure [dbo].[sp_actualizar_categoria]    Script Date: 27/10/2024 14:35:41 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO

-- procedimiento para actualizar categoria
create procedure [dbo].[sp_actualizar_categoria]
    @categoria_id int,
    @nombre nvarchar(100)
as
begin
    update categoria
    set 
        nombre = @nombre
    where 
        categoria_id = @categoria_id;
end

GO
/****** Object:  StoredProcedure [dbo].[sp_actualizar_cliente]    Script Date: 27/10/2024 14:35:41 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO

-- procedimiento para actualizar cliente
create procedure [dbo].[sp_actualizar_cliente]
    @cliente_id int,
    @nombre nvarchar(100),
    @apellidos nvarchar(100),
    @dni char(8),
    @celular char(9),
    @email nvarchar(100)
as
begin
    update cliente
    set 
        nombre = @nombre,
        apellidos = @apellidos,
        dni = @dni,
        celular = @celular,
        email = @email
    where 
        cliente_id = @cliente_id;
end

GO
/****** Object:  StoredProcedure [dbo].[sp_actualizar_contrato]    Script Date: 27/10/2024 14:35:41 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO

-- procedimiento para actualizar contrato
create procedure [dbo].[sp_actualizar_contrato]
    @contrato_id int,
    @empleado_id int,
    @fecha_inicio date,
    @fecha_final date,
    @tipo_contrato nvarchar(50)
as
begin
    update contrato
    set 
        empleado_id = @empleado_id,
        fecha_inicio = @fecha_inicio,
        fecha_final = @fecha_final,
        tipo_contrato = @tipo_contrato
    where 
        contrato_id = @contrato_id;
end

GO
/****** Object:  StoredProcedure [dbo].[sp_actualizar_detallepago]    Script Date: 27/10/2024 14:35:41 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO

-- procedimiento para actualizar detalle pago
create procedure [dbo].[sp_actualizar_detallepago]
    @detallepago_id int,
    @comprobante nvarchar(20),
    @pago_id int
as
begin
    update detallepago
    set 
        comprobante = @comprobante,
        pago_id = @pago_id
    where 
        detallepago_id = @detallepago_id;
end

GO
/****** Object:  StoredProcedure [dbo].[sp_actualizar_detalleventa_historial]    Script Date: 27/10/2024 14:35:41 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO

-- procedimiento para actualizar detalle venta historial
create procedure [dbo].[sp_actualizar_detalleventa_historial]
    @historial_id int,
    @detalleventa_id int,
    @fecha_modificacion datetime,
    @operacion nvarchar(50)
as
begin
    update detalleventa_historial
    set 
        detalleventa_id = @detalleventa_id,
        fecha_modificacion = @fecha_modificacion,
        operacion = @operacion
    where 
        historial_id = @historial_id;
end

GO
/****** Object:  StoredProcedure [dbo].[sp_actualizar_empleado]    Script Date: 27/10/2024 14:35:41 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO

-- procedimiento para actualizar empleado
CREATE procedure [dbo].[sp_actualizar_empleado]
    @empleado_id int, 
    @nombre nvarchar(100), 
    @dni char(8), 
    @apellidos nvarchar(100), 
    @fecha_nacimiento date, 
    @direccion nvarchar(100), 
    @celular char(9), 
    @email nvarchar(100), 
    @rol_empleado_id int, 
	@salario int, 
	@inicio_contrato date,
    @horario_id int, 
	@fin_contrato date
as
begin
    update empleado
    set 
        nombre = @nombre,
        apellidos = @apellidos,
        dni = @dni,
        fecha_nacimiento = @fecha_nacimiento,
        celular = @celular,
        email = @email,
        direccion = @direccion,
        horario_id = @horario_id,
        rolempleado_id = @rol_empleado_id
    where 
        empleado_id = @empleado_id;

	update salario
	set
		salario = @salario,
		fecha_inicio = getdate()
	where empleado_id = @empleado_id

	update contrato
	set 
		fecha_inicio = @inicio_contrato, 
		fecha_final = @fin_contrato
	where empleado_id = @empleado_id

end

GO
/****** Object:  StoredProcedure [dbo].[sp_actualizar_horario]    Script Date: 27/10/2024 14:35:41 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO

-- procedimiento para actualizar horario
create procedure [dbo].[sp_actualizar_horario]
    @horario_id int,
    @descripcion nvarchar(100)
as
begin
    update horario
    set 
        descripcion = @descripcion
    where 
        horario_id = @horario_id;
end

GO
/****** Object:  StoredProcedure [dbo].[sp_actualizar_inventario]    Script Date: 27/10/2024 14:35:41 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO

-- procedimiento para actualizar inventario
create procedure [dbo].[sp_actualizar_inventario]
    @inventario_id int,
    @cantidad int,
    @fechaingreso date,
    @fechavencimiento date,
    @producto_id int,
    @almacen_id int
as
begin
    update inventario
    set 
        cantidad = @cantidad,
        fechaingreso = @fechaingreso,
        fechavencimiento = @fechavencimiento,
        producto_id = @producto_id,
        almacen_id = @almacen_id
    where 
        inventario_id = @inventario_id;
end

GO
/****** Object:  StoredProcedure [dbo].[sp_actualizar_marca]    Script Date: 27/10/2024 14:35:41 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO

-- procedimiento para actualizar marca
create procedure [dbo].[sp_actualizar_marca]
    @marca_id int,
    @nombre nvarchar(100)
as
begin
    update marca
    set 
        nombre = @nombre
    where 
        marca_id = @marca_id;
end

GO
/****** Object:  StoredProcedure [dbo].[sp_actualizar_pago]    Script Date: 27/10/2024 14:35:41 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO

-- procedimiento para actualizar pago
create procedure [dbo].[sp_actualizar_pago]
    @pago_id int,
    @fecha datetime,
    @monto decimal(10,2),
    @metodopago nvarchar(50)
as
begin
    update pago
    set 
        fecha = @fecha,
        monto = @monto,
        metodopago = @metodopago
    where 
        pago_id = @pago_id;
end

GO
/****** Object:  StoredProcedure [dbo].[sp_actualizar_producto]    Script Date: 27/10/2024 14:35:41 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO

-- procedimiento para actualizar producto
CREATE procedure [dbo].[sp_actualizar_producto]
    @producto_id int,
    @nombre nvarchar(100),
    @descripcion nvarchar(255),
    @indicaciones nvarchar(255),
    @contraindicaciones nvarchar(255),
	@fechaVencimiento datetime,
    @precio decimal(10,2),
    @stock int,
    @categoria_id int,
    @marca_id int,
    @proveedor_id int
as
begin
    update producto
    set 
        nombre = @nombre,
        descripcion = @descripcion,
        indicaciones = @indicaciones,
        contraindicaciones = @contraindicaciones,
		fecha_vencimiento = @fechaVencimiento,
        precio = @precio,
        stock = @stock,
        categoria_id = @categoria_id,
        marca_id = @marca_id,
        proveedor_id = @proveedor_id
    where 
        producto_id = @producto_id;
end

GO
/****** Object:  StoredProcedure [dbo].[sp_actualizar_proveedor]    Script Date: 27/10/2024 14:35:41 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO

-- procedimiento para actualizar proveedor
create procedure [dbo].[sp_actualizar_proveedor]
    @proveedor_id int,
    @nombre nvarchar(100),
    @direccion nvarchar(255),
    @celular char(9),
    @email nvarchar(100)
as
begin
    update proveedor
    set 
        nombre = @nombre,
        direccion = @direccion,
        celular = @celular,
        email = @email
    where 
        proveedor_id = @proveedor_id;
end

GO
/****** Object:  StoredProcedure [dbo].[sp_actualizar_rolempleado]    Script Date: 27/10/2024 14:35:41 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO


--PROCEDIMIENTOS DE ACTUALIZACIÓN DE DATOS--

-- procedimiento para actualizar rol empleado
create procedure [dbo].[sp_actualizar_rolempleado]
    @rolempleado_id int,
    @nombre nvarchar(50)
as
begin
    update rolempleado
    set 
        nombre = @nombre
    where 
        rolempleado_id = @rolempleado_id;
end

GO
/****** Object:  StoredProcedure [dbo].[sp_actualizar_salario]    Script Date: 27/10/2024 14:35:41 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO

-- procedimiento para actualizar salario
create procedure [dbo].[sp_actualizar_salario]
    @salario_id int,
    @empleado_id int,
    @salario decimal(10,2),
    @fecha_inicio date,
    @fecha_fin date
as
begin
    update salario
    set 
        empleado_id = @empleado_id,
        salario = @salario,
        fecha_inicio = @fecha_inicio,
        fecha_fin = @fecha_fin
    where 
        salario_id = @salario_id;
end

GO
/****** Object:  StoredProcedure [dbo].[sp_actualizar_stock]    Script Date: 27/10/2024 14:35:41 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO

--PROCEDIMIENTOS PARA EL STOCK--

-- procedimiento para actualizar stock
create procedure [dbo].[sp_actualizar_stock] 
    @producto_id int,
    @cantidad_vendida int
as
begin
    -- iniciar una transacción
    begin transaction;

    -- declarar una variable para almacenar el stock actual
    declare @stock_actual int;

    -- obtener el stock actual del producto
    select @stock_actual = stock
    from producto
    where producto_id = @producto_id;

    -- verificar si hay suficiente stock para realizar la venta
    if @stock_actual >= @cantidad_vendida
    begin
        -- actualizar el stock restando la cantidad vendida
        update producto
        set stock = stock - @cantidad_vendida
        where producto_id = @producto_id;

        -- confirmar la transacción
        commit transaction;

        print 'stock actualizado correctamente';
    end
    else
    begin
        -- si no hay suficiente stock, deshacer la transacción
        rollback transaction;

        print 'error: stock insuficiente';
    end
end;
select * from producto
exec sp_actualizar_stock 1, 4


-- Para saber la cantidad de total de procedimientos que tengo en mi bd
select count(*) as procedimientos
from sys.procedures
GO
/****** Object:  StoredProcedure [dbo].[sp_actualizar_usuario]    Script Date: 27/10/2024 14:35:41 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO

-- procedimiento para actualizar usuario
create procedure [dbo].[sp_actualizar_usuario]
    @usuario_id int,
    @nombre nvarchar(50),
    @contraseña nvarchar(255),
    @empleado_id int
as
begin
    update usuario
    set 
        nombre = @nombre,
        contraseña = @contraseña,
        empleado_id = @empleado_id
    where 
        usuario_id = @usuario_id;
end

GO
/****** Object:  StoredProcedure [dbo].[sp_actualizar_venta]    Script Date: 27/10/2024 14:35:41 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO

-- procedimiento para actualizar venta
create procedure [dbo].[sp_actualizar_venta]
    @venta_id int,
    @fecha datetime,
    @total decimal(10,2),
    @cliente_id int,
    @empleado_id int
as
begin
    update venta
    set 
        fecha = @fecha,
        total = @total,
        cliente_id = @cliente_id,
        empleado_id = @empleado_id
    where 
        venta_id = @venta_id;
end

GO
/****** Object:  StoredProcedure [dbo].[sp_asignar_empleado_a_horario]    Script Date: 27/10/2024 14:35:41 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
create procedure [dbo].[sp_asignar_empleado_a_horario]
    @empleado_id int,
    @horario_id int
as
begin
    update empleado
    set horario_id = @horario_id
    where empleado_id = @empleado_id;

    if @@rowcount > 0
    begin
        select 'asignacion_exitosa' as mensaje;
    end
    else
    begin
        select 'empleado_no_encontrado' as mensaje;
    end
end
GO
/****** Object:  StoredProcedure [dbo].[sp_buscar_productos_por_nombre_o_categoria]    Script Date: 27/10/2024 14:35:41 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
create procedure [dbo].[sp_buscar_productos_por_nombre_o_categoria]
    @producto_nombre nvarchar(100) = null,
    @categoria_nombre nvarchar(100) = null 
as
begin
    select p.producto_id, p.nombre, p.descripcion, c.nombre as categoria
    from producto p
    left join categoria c on p.categoria_id = c.categoria_id
    where (@producto_nombre is null or p.nombre like '%' + @producto_nombre + '%')
      and (@categoria_nombre is null or c.nombre like '%' + @categoria_nombre + '%')
end

GO
/****** Object:  StoredProcedure [dbo].[sp_eliminar_categoria]    Script Date: 27/10/2024 14:35:41 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO

-- procedimiento para eliminar categoria
create procedure [dbo].[sp_eliminar_categoria]
    @categoria_id int
as
begin
    delete from categoria
    where categoria_id = @categoria_id;
end

GO
/****** Object:  StoredProcedure [dbo].[sp_eliminar_cliente]    Script Date: 27/10/2024 14:35:41 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO

-- procedimiento para eliminar cliente
create procedure [dbo].[sp_eliminar_cliente]
    @cliente_id int
as
begin
    delete from cliente
    where cliente_id = @cliente_id;
end

GO
/****** Object:  StoredProcedure [dbo].[sp_eliminar_contrato]    Script Date: 27/10/2024 14:35:41 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO

-- procedimiento para eliminar contrato
create procedure [dbo].[sp_eliminar_contrato]
    @contrato_id int
as
begin
    delete from contrato
    where contrato_id = @contrato_id;
end

GO
/****** Object:  StoredProcedure [dbo].[sp_eliminar_detallepago]    Script Date: 27/10/2024 14:35:41 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO

-- procedimiento para eliminar detalle pago
create procedure [dbo].[sp_eliminar_detallepago]
    @detallepago_id int
as
begin
    delete from detallepago
    where detallepago_id = @detallepago_id;
end

GO
/****** Object:  StoredProcedure [dbo].[sp_eliminar_detalleventa]    Script Date: 27/10/2024 14:35:41 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO

-- procedimiento para eliminar detalle venta
create procedure [dbo].[sp_eliminar_detalleventa]
    @detalleventa_id int
as
begin
    delete from detalleventa
    where detalleventa_id = @detalleventa_id;
end

GO
/****** Object:  StoredProcedure [dbo].[sp_eliminar_detalleventa_historial]    Script Date: 27/10/2024 14:35:41 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO

-- procedimiento para eliminar detalle venta historial
create procedure [dbo].[sp_eliminar_detalleventa_historial]
    @historial_id int
as
begin
    delete from detalleventa_historial
    where historial_id = @historial_id;
end

GO
/****** Object:  StoredProcedure [dbo].[sp_eliminar_empleado]    Script Date: 27/10/2024 14:35:41 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO

-- procedimiento para eliminar empleado
CREATE procedure [dbo].[sp_eliminar_empleado]
    @empleado_id int
as
begin
	delete from salario
	where empleado_id = @empleado_id;

	delete from contrato
	where empleado_id = @empleado_id;

    delete from empleado
    where empleado_id = @empleado_id;
end

GO
/****** Object:  StoredProcedure [dbo].[sp_eliminar_horario]    Script Date: 27/10/2024 14:35:41 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO

-- procedimiento para eliminar horario
create procedure [dbo].[sp_eliminar_horario]
    @horario_id int
as
begin
    delete from horario
    where horario_id = @horario_id;
end

GO
/****** Object:  StoredProcedure [dbo].[sp_eliminar_inventario]    Script Date: 27/10/2024 14:35:41 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO

-- procedimiento para eliminar inventario
create procedure [dbo].[sp_eliminar_inventario]
    @inventario_id int
as
begin
    delete from inventario
    where inventario_id = @inventario_id;
end

GO
/****** Object:  StoredProcedure [dbo].[sp_eliminar_marca]    Script Date: 27/10/2024 14:35:41 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO

-- procedimiento para eliminar marca
create procedure [dbo].[sp_eliminar_marca]
    @marca_id int
as
begin
    delete from marca
    where marca_id = @marca_id;
end

GO
/****** Object:  StoredProcedure [dbo].[sp_eliminar_pago]    Script Date: 27/10/2024 14:35:41 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO

-- procedimiento para eliminar pago
create procedure [dbo].[sp_eliminar_pago]
    @pago_id int
as
begin
    delete from pago
    where pago_id = @pago_id;
end

GO
/****** Object:  StoredProcedure [dbo].[sp_eliminar_producto]    Script Date: 27/10/2024 14:35:41 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO

-- procedimiento para eliminar producto
create procedure [dbo].[sp_eliminar_producto]
    @producto_id int
as
begin
    delete from producto
    where producto_id = @producto_id;
end

GO
/****** Object:  StoredProcedure [dbo].[sp_eliminar_proveedor]    Script Date: 27/10/2024 14:35:41 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO

-- procedimiento para eliminar proveedor
create procedure [dbo].[sp_eliminar_proveedor]
    @proveedor_id int
as
begin
    delete from proveedor
    where proveedor_id = @proveedor_id;
end

GO
/****** Object:  StoredProcedure [dbo].[sp_eliminar_rolempleado]    Script Date: 27/10/2024 14:35:41 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO

--PROCEDIMIENTOS PARA LA ELIMINACIÓN DE DATOS--

-- procedimiento para eliminar rol empleado
create procedure [dbo].[sp_eliminar_rolempleado]
    @rolempleado_id int
as
begin
    delete from rolempleado
    where rolempleado_id = @rolempleado_id;
end

GO
/****** Object:  StoredProcedure [dbo].[sp_eliminar_salario]    Script Date: 27/10/2024 14:35:41 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO

-- procedimiento para eliminar salario
create procedure [dbo].[sp_eliminar_salario]
    @salario_id int
as
begin
    delete from salario
    where salario_id = @salario_id;
end

GO
/****** Object:  StoredProcedure [dbo].[sp_eliminar_usuario]    Script Date: 27/10/2024 14:35:41 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO

-- procedimiento para eliminar usuario
create procedure [dbo].[sp_eliminar_usuario]
    @usuario_id int
as
begin
    delete from usuario
    where usuario_id = @usuario_id;
end

GO
/****** Object:  StoredProcedure [dbo].[sp_eliminar_venta]    Script Date: 27/10/2024 14:35:41 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO

-- procedimiento para eliminar venta
create procedure [dbo].[sp_eliminar_venta]
    @venta_id int
as
begin
    delete from venta
    where venta_id = @venta_id;
end

GO
/****** Object:  StoredProcedure [dbo].[sp_filtrar_ventas_por_cliente_o_empleado]    Script Date: 27/10/2024 14:35:41 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
create procedure [dbo].[sp_filtrar_ventas_por_cliente_o_empleado]
    @nombre_cliente nvarchar(200) = null,
    @nombre_empleado nvarchar(200) = null
as
begin
    select v.venta_id, v.fecha, v.total, 
           c.nombre + ' ' + c.apellidos as cliente, 
           e.nombre + ' ' + e.apellidos as empleado
    from venta v
    left join cliente c on v.cliente_id = c.cliente_id
    left join empleado e on v.empleado_id = e.empleado_id
    where (@nombre_cliente is null or (c.nombre + ' ' + c.apellidos) like '%' + @nombre_cliente + '%')
      and (@nombre_empleado is null or (e.nombre + ' ' + e.apellidos) like '%' + @nombre_empleado + '%');
end
GO
/****** Object:  StoredProcedure [dbo].[sp_generar_reporte_inventario]    Script Date: 27/10/2024 14:35:41 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
create procedure [dbo].[sp_generar_reporte_inventario]
as
begin
    select p.producto_id, p.nombre, p.descripcion, i.cantidad, i.fechavencimiento
    from producto p
    join inventario i on p.producto_id = i.producto_id
    where i.cantidad > 0
    order by p.nombre;
end

GO
/****** Object:  StoredProcedure [dbo].[sp_generar_reporte_ventas]    Script Date: 27/10/2024 14:35:41 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
create procedure [dbo].[sp_generar_reporte_ventas]
    @fecha_inicio date,
    @fecha_fin date
as
begin
    select v.venta_id, v.fecha, v.total, c.nombre as cliente, e.nombre as empleado
    from venta v
    left join cliente c on v.cliente_id = c.cliente_id
    left join empleado e on v.empleado_id = e.empleado_id
    where v.fecha between @fecha_inicio and @fecha_fin
    order by v.fecha;
end

GO
/****** Object:  StoredProcedure [dbo].[sp_grafico_cantidad_producto]    Script Date: 27/10/2024 14:35:41 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
create procedure [dbo].[sp_grafico_cantidad_producto]
as
begin
	
	select 
		prod.producto_id,
		prod.nombre,
		inv.cantidad
	from inventario inv
	left join producto prod
	on prod.producto_id = inv.producto_id

end
GO
/****** Object:  StoredProcedure [dbo].[sp_informacíon_inventario_por_producto]    Script Date: 27/10/2024 14:35:41 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
create procedure [dbo].[sp_informacíon_inventario_por_producto]
	@producto_id int
as
begin
	select i.cantidad, i.fechaingreso, i.fechavencimiento, pr.nombre as proveedor
	from producto p
	inner join inventario i on p.producto_id = i.producto_id
	inner join proveedor pr on p.proveedor_id = pr.proveedor_id
	where @producto_id = p.producto_id
end

GO
/****** Object:  StoredProcedure [dbo].[sp_insertar_categoria]    Script Date: 27/10/2024 14:35:41 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO

--Insertar categoria 
create procedure [dbo].[sp_insertar_categoria]
    @nombre nvarchar(100)
as
begin
    insert into categoria (nombre)
    values (@nombre)
end
GO
/****** Object:  StoredProcedure [dbo].[sp_insertar_cliente]    Script Date: 27/10/2024 14:35:41 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
create procedure [dbo].[sp_insertar_cliente]
    @nombre nvarchar(100),
    @apellidos nvarchar(100),
    @dni char(8),
    @celular char(9),
    @email nvarchar(100)
as
begin
    insert into cliente (nombre, apellidos, dni, celular, email)
    values (@nombre, @apellidos, @dni, @celular, @email)
end
GO
/****** Object:  StoredProcedure [dbo].[sp_insertar_contrato]    Script Date: 27/10/2024 14:35:41 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO

--Insertar contrato
create procedure [dbo].[sp_insertar_contrato]
    @empleado_id int,
    @fecha_inicio date,
    @fecha_final date,
    @tipo_contrato nvarchar(50)
as
begin
    insert into contrato (empleado_id, fecha_inicio, fecha_final, tipo_contrato)
    values (@empleado_id, @fecha_inicio, @fecha_final, @tipo_contrato)
end
GO
/****** Object:  StoredProcedure [dbo].[sp_insertar_detallepago]    Script Date: 27/10/2024 14:35:41 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO

--Insertar detallepago
create procedure [dbo].[sp_insertar_detallepago]
    @comprobante nvarchar(20),
    @pago_id int
as
begin
    insert into detallepago (comprobante, pago_id)
    values (@comprobante, @pago_id)
end
GO
/****** Object:  StoredProcedure [dbo].[sp_insertar_detalleventa]    Script Date: 27/10/2024 14:35:41 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE procedure [dbo].[sp_insertar_detalleventa]
    @cantidad int,
    @precio_unitario decimal(10, 2),
    @impuestos decimal(10, 2),
    @descuento decimal(10, 2),
	@producto_id int
as
begin

	declare @id int;

	select @id = MAX(venta_id) from venta;

    insert into detalleventa (cantidad, precio_unitario, descuento, impuestos, venta_id, producto_id)
    values (@cantidad, @precio_unitario, @descuento, @impuestos, @id, @producto_id)
end

GO
/****** Object:  StoredProcedure [dbo].[sp_insertar_detalleventa_historial]    Script Date: 27/10/2024 14:35:41 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO

--Insertar detalleventa_historial
create procedure [dbo].[sp_insertar_detalleventa_historial]
    @detalleventa_id int,
    @operacion nvarchar(50)
as
begin
    -- insertar un nuevo registro en la tabla detalleventa_historial
    insert into detalleventa_historial (detalleventa_id, operacion)
    values (@detalleventa_id, @operacion)
end
GO
/****** Object:  StoredProcedure [dbo].[sp_insertar_empleado]    Script Date: 27/10/2024 14:35:41 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO

--Insertar empleado
CREATE procedure [dbo].[sp_insertar_empleado]
    @nombre nvarchar(100), 
    @dni char(8), 
    @apellidos nvarchar(100), 
    @fecha_nacimiento date, 
    @direccion nvarchar(100), 
    @celular char(9), 
    @email nvarchar(100), 
    @rol_empleado_id int, 
	@salario int, 
	@inicio_contrato date,
    @horario_id int, 
	@fin_contrato date
as
begin
	declare @idEmpleadoNew int;

    insert into empleado (nombre, apellidos, dni, fecha_nacimiento, celular, email, direccion, horario_id, rolempleado_id)
    values (@nombre, @apellidos, @dni, @fecha_nacimiento, @celular, @email, @direccion, @horario_id, @rol_empleado_id)

	set @idEmpleadoNew = SCOPE_IDENTITY();

	insert into salario (empleado_id, salario, fecha_inicio)
	values(@idEmpleadoNew, @salario, GETDATE());

	insert into contrato(empleado_id, fecha_inicio, fecha_final, tipo_contrato)
	values(@idEmpleadoNew, @inicio_contrato, @fin_contrato, 'Definido');

	select 1;

end
GO
/****** Object:  StoredProcedure [dbo].[sp_insertar_horario]    Script Date: 27/10/2024 14:35:41 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO

--Insertar horario
create procedure [dbo].[sp_insertar_horario]
    @descripcion nvarchar(100)
as
begin
    insert into horario (descripcion)
    values (@descripcion)
end
GO
/****** Object:  StoredProcedure [dbo].[sp_insertar_inventario]    Script Date: 27/10/2024 14:35:41 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO

--Insertar inventario
create procedure [dbo].[sp_insertar_inventario]
    @cantidad int,
    @fechaingreso date,
    @fechavencimiento date,
    @producto_id int,
    @almacen_id int
as
begin
    insert into inventario (cantidad, fechaingreso, fechavencimiento, producto_id, almacen_id)
    values (@cantidad, @fechaingreso, @fechavencimiento, @producto_id, @almacen_id)
end
GO
/****** Object:  StoredProcedure [dbo].[sp_insertar_marca]    Script Date: 27/10/2024 14:35:41 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO

--Insertar marca
create procedure [dbo].[sp_insertar_marca]
    @nombre nvarchar(100)
as
begin
    insert into marca (nombre)
    values (@nombre)
end
GO
/****** Object:  StoredProcedure [dbo].[sp_insertar_producto]    Script Date: 27/10/2024 14:35:41 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO

--Insertar producto
CREATE procedure [dbo].[sp_insertar_producto]
    @nombre nvarchar(100),
    @descripcion nvarchar(255),
    @indicaciones nvarchar(255),
    @contraindicaciones nvarchar(255),
	@fechaVencimiento datetime,
    @precio decimal(10, 2),
    @stock int,
    @categoria_id int,
    @marca_id int,
    @proveedor_id int
as
begin
    insert into producto (nombre, descripcion, indicaciones, contraindicaciones, fecha_vencimiento, precio, stock, categoria_id, marca_id, proveedor_id)
    values (@nombre, @descripcion, @indicaciones, @contraindicaciones, @fechaVencimiento, @precio, @stock, @categoria_id, @marca_id, @proveedor_id)
end
GO
/****** Object:  StoredProcedure [dbo].[sp_insertar_proveedor]    Script Date: 27/10/2024 14:35:41 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO

--Insertar proveedor
create procedure [dbo].[sp_insertar_proveedor]
    @nombre nvarchar(100),
    @direccion nvarchar(255),
    @celular char(9),
    @email nvarchar(100)
as
begin
    insert into proveedor (nombre, direccion, celular, email)
    values (@nombre, @direccion, @celular, @email)
end
GO
/****** Object:  StoredProcedure [dbo].[sp_insertar_rol_empleado]    Script Date: 27/10/2024 14:35:41 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO

--PROCEDIMIENTOS DE INSERCIÓN DE DATOS--

--Insertar rol de empleado
create procedure [dbo].[sp_insertar_rol_empleado]
    @nombre nvarchar(50)
as
begin
    insert into rolempleado (nombre)
    values (@nombre)
end
GO
/****** Object:  StoredProcedure [dbo].[sp_insertar_salario]    Script Date: 27/10/2024 14:35:41 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO

--Insertar salario
create procedure [dbo].[sp_insertar_salario]
    @empleado_id int,
    @salario decimal(10, 2),
    @fecha_inicio date,
    @fecha_fin date = null
as
begin
    insert into salario (empleado_id, salario, fecha_inicio, fecha_fin)
    values (@empleado_id, @salario, @fecha_inicio, @fecha_fin);
end
GO
/****** Object:  StoredProcedure [dbo].[sp_insertar_usuario]    Script Date: 27/10/2024 14:35:41 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO

--Insertar usuario
create procedure [dbo].[sp_insertar_usuario]
    @nombre nvarchar(50),
    @contraseña nvarchar(255),
    @empleado_id int
as
begin
    insert into usuario (nombre, contraseña, empleado_id)
    values (@nombre, @contraseña, @empleado_id)
end
GO
/****** Object:  StoredProcedure [dbo].[sp_insertar_venta]    Script Date: 27/10/2024 14:35:41 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO

--Insertaer venta
CREATE procedure [dbo].[sp_insertar_venta]
@tipoDoc int,
@numero varchar(20),
@fecha date,
@cliente_id int,
@empleado_id int,
@total decimal(10, 2)
as
begin

    insert into venta ( fecha, total, cliente_id, empleado_id, numero, tipo_doc_venta)
    values ( CAST(@fecha AS DATETIME), @total, @cliente_id, @empleado_id,  @numero, @tipoDoc)

end
GO
/****** Object:  StoredProcedure [dbo].[sp_login]    Script Date: 27/10/2024 14:35:41 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO

--PROCEDIMIENTO PARA MANEJAR EL INICIO DE SESIÓN
CREATE procedure [dbo].[sp_login]
	@nombre NVARCHAR(50),
	@contrasenia NVARCHAR(255)
AS
BEGIN
	SET NOCOUNT ON

	DECLARE @tempUsuario TABLE(
		id_usuario INT,
		nombre_usuario VARCHAR(100),
		tipo_usuario INT,
		confirmacion BIT
	);

	IF EXISTS( SELECT 1 FROM usuario WHERE nombre = @nombre AND contraseña = @contrasenia)
	BEGIN
		INSERT INTO @tempUsuario(
			id_usuario,
			nombre_usuario,
			tipo_usuario,
			confirmacion
		)
		SELECT 
			usu.usuario_id,
			CONCAT(emp.nombre, ' ', emp.apellidos),
			emp.rolempleado_id,
			1
		FROM usuario usu
		INNER JOIN empleado emp
		ON emp.empleado_id = usu.usuario_id
		WHERE usu.nombre = @nombre AND usu.contraseña = @contrasenia

	END
	ELSE
	BEGIN
		INSERT INTO @tempUsuario(
			id_usuario,
			nombre_usuario,
			tipo_usuario,
			confirmacion
		)

		SELECT TOP 1
			0,
			'',
			0,
			0
		FROM usuario usu
	END

	SELECT * FROM @tempUsuario

END
GO
/****** Object:  StoredProcedure [dbo].[sp_obtener_categoria_por_nombre]    Script Date: 27/10/2024 14:35:41 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
create procedure [dbo].[sp_obtener_categoria_por_nombre]
    @nombre nvarchar(100)
as
begin
	if not exists (select * from categoria where nombre = @nombre)
	begin 
		raiserror('Categoria no encontrada.', 16, 1)
		return
	end

    select *
    from categoria
    where nombre = @nombre;
end

GO
/****** Object:  StoredProcedure [dbo].[sp_obtener_cliente_por_dni]    Script Date: 27/10/2024 14:35:41 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
create procedure [dbo].[sp_obtener_cliente_por_dni]
    @dni char(8)
as
begin
	if not exists (select * from cliente where dni = @dni)
	begin 
		raiserror('Cliente no encontrado.', 16, 1)
		return
	end

    select *
    from cliente
    where dni = @dni;
end

GO
/****** Object:  StoredProcedure [dbo].[sp_obtener_empleado_por_apellidos]    Script Date: 27/10/2024 14:35:41 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO

--PROCEDIMIENTOS PARA CONSULTAR/OBTENER DATOS--

-- procedimiento para obtener empleado por apellidos
create procedure [dbo].[sp_obtener_empleado_por_apellidos]
    @apellidos nvarchar(100)
as
begin
    if not exists (select * from empleado where apellidos = @apellidos)
    begin 
        raiserror('Empleado no encontrado.', 16, 1)
        return
    end

    select *
    from empleado
    where apellidos = @apellidos;
end
GO
/****** Object:  StoredProcedure [dbo].[sp_obtener_informacion_cliente]    Script Date: 27/10/2024 14:35:41 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE procedure [dbo].[sp_obtener_informacion_cliente]
	@nombre varchar(150)
as
begin
	select cliente_id, concat(nombre, ' ', apellidos) as cliente, dni, celular, email
	from cliente
	WHERE (@nombre = '' or concat(nombre, ' ', apellidos) like '%'+@nombre+'%')
end
GO
/****** Object:  StoredProcedure [dbo].[sp_obtener_informacion_empleado]    Script Date: 27/10/2024 14:35:41 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE procedure [dbo].[sp_obtener_informacion_empleado]
	@nombre varchar(150)
as
begin
	select e.empleado_id, concat(e.nombre, ' ', e.apellidos) as empleado, re.nombre as cargo, h.descripcion as horario
	from empleado e
	left join rolempleado re on e.rolempleado_id = re.rolempleado_id
	left join horario h on e.horario_id = h.horario_id
	WHERE (@nombre = '' or concat(e.nombre, '', e.apellidos) like '%'+@nombre+'%')
end
GO
/****** Object:  StoredProcedure [dbo].[sp_obtener_informacion_inventario]    Script Date: 27/10/2024 14:35:41 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO


CREATE procedure [dbo].[sp_obtener_informacion_inventario]
	@nombre varchar(150)
as
begin
	select p.nombre as producto, i.cantidad,i.fechaingreso, i.fechavencimiento, pr.nombre as proveedor
	from inventario i
	inner join producto p on i.producto_id = p.producto_id
	inner join proveedor pr on p.proveedor_id = pr.proveedor_id
	WHERE (@nombre = '' or p.nombre like '%'+@nombre+'%')
end

GO
/****** Object:  StoredProcedure [dbo].[sp_obtener_informacion_producto]    Script Date: 27/10/2024 14:35:41 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE procedure [dbo].[sp_obtener_informacion_producto]
	@nombre varchar(150)
as
begin
	select p.producto_id AS id, p.nombre, p.precio, p.stock, c.nombre as categoria, m.nombre as marca
	from producto p
	left join categoria c on p.categoria_id = c.categoria_id
	left join marca m on p.marca_id = m.marca_id
	WHERE (@nombre = '' or p.nombre like '%'+@nombre+'%')
end
GO
/****** Object:  StoredProcedure [dbo].[sp_obtener_informacion_venta]    Script Date: 27/10/2024 14:35:41 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE procedure [dbo].[sp_obtener_informacion_venta]
	 @nombre varchar(150)
as
begin
	select v.venta_id, v.fecha, v.total, concat(c.nombre, ' ', c.apellidos) as cliente, concat(e.nombre, ' ', e.apellidos) as empleado
	from venta v
	inner join cliente c on v.cliente_id = c.cliente_id
	inner join empleado e on v.empleado_id = e.empleado_id
	WHERE (@nombre = '' or concat(e.nombre, ' ', e.apellidos) like '%'+@nombre+'%')
end
GO
/****** Object:  StoredProcedure [dbo].[sp_obtener_inventario_por_nombre_producto]    Script Date: 27/10/2024 14:35:41 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
create procedure [dbo].[sp_obtener_inventario_por_nombre_producto]
    @nombre nvarchar(100)
as
begin
    if not exists (select * from inventario i
                   join producto p on i.producto_id = p.producto_id
                   where p.nombre = @nombre)
    begin 
        raiserror('No se encontró inventario para el producto especificado.', 16, 1)
        return
    end

    select p.nombre as 'producto', i.cantidad, i.fechaingreso, i.fechavencimiento
    from inventario i
    join producto p on i.producto_id = p.producto_id
    where p.nombre = @nombre
end
GO
/****** Object:  StoredProcedure [dbo].[sp_obtener_marca_por_nombre]    Script Date: 27/10/2024 14:35:41 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
create procedure [dbo].[sp_obtener_marca_por_nombre]
    @nombre nvarchar(100)
as
begin
	if not exists (select * from marca where nombre = @nombre)
	begin 
		raiserror('Marca no encontrada.', 16, 1)
		return
	end

    select *
    from marca
    where nombre = @nombre;
end

GO
/****** Object:  StoredProcedure [dbo].[sp_obtener_producto_por_id]    Script Date: 27/10/2024 14:35:41 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE procedure [dbo].[sp_obtener_producto_por_id]
    @producto_id int
as
begin
	
	select 
		descripcion,
		precio,
		stock
	from producto

	where producto_id = @producto_id
END
GO
/****** Object:  StoredProcedure [dbo].[sp_obtener_producto_por_marca]    Script Date: 27/10/2024 14:35:41 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
create procedure [dbo].[sp_obtener_producto_por_marca]
	@nombre nvarchar(100)
as
begin
	select m.nombre as 'marca', p.nombre as 'producto', p.precio
	from producto p
	inner join marca m on p.marca_id = m.marca_id
	where @nombre = m.nombre
end

GO
/****** Object:  StoredProcedure [dbo].[sp_obtener_producto_por_nombre]    Script Date: 27/10/2024 14:35:41 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
create procedure [dbo].[sp_obtener_producto_por_nombre]
	@nombre nvarchar(100)
as
begin
	if not exists (select * from producto where nombre = @nombre)
	begin 
		raiserror('Producto no encontrado.', 16, 1)
		return
	end

	select *
	from producto
	where nombre = @nombre
end

GO
/****** Object:  StoredProcedure [dbo].[sp_obtener_productos_en_stock]    Script Date: 27/10/2024 14:35:41 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
create procedure [dbo].[sp_obtener_productos_en_stock]
as
begin
    select nombre, descripcion, precio, stock
	from producto
	where stock > 0
end

GO
/****** Object:  StoredProcedure [dbo].[sp_obtener_proveedor_por_nombre]    Script Date: 27/10/2024 14:35:41 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
create procedure [dbo].[sp_obtener_proveedor_por_nombre]
	@nombre nvarchar(100)
as
begin
	if not exists (select * from proveedor where nombre = @nombre)
	begin 
		raiserror('Proveedor no encontrado.', 16, 1)
		return
	end

	select * 
	from proveedor
	where nombre = @nombre
end

GO
/****** Object:  StoredProcedure [dbo].[sp_obtener_todas_categorias]    Script Date: 27/10/2024 14:35:41 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO

-- procedimiento para obtener toda la información de la tabla categoria
CREATE procedure [dbo].[sp_obtener_todas_categorias]
as
begin
    select 
		categoria_id as 'value',
		nombre as 'label'
	from categoria;
end
GO
/****** Object:  StoredProcedure [dbo].[sp_obtener_todas_detalles_venta_historial]    Script Date: 27/10/2024 14:35:41 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO

-- procedimiento para obtener toda la información de la tabla detalleventa_historial
create procedure [dbo].[sp_obtener_todas_detalles_venta_historial]
as
begin
    select * from detalleventa_historial;
end
GO
/****** Object:  StoredProcedure [dbo].[sp_obtener_todas_marcas]    Script Date: 27/10/2024 14:35:41 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO

-- procedimiento para obtener toda la información de la tabla marca
CREATE procedure [dbo].[sp_obtener_todas_marcas]
as
begin
    select 
		marca_id as 'value',
		nombre as 'label'
	from marca;
end
GO
/****** Object:  StoredProcedure [dbo].[sp_obtener_todas_ventas]    Script Date: 27/10/2024 14:35:41 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO

-- procedimiento para obtener toda la información de la tabla venta
create procedure [dbo].[sp_obtener_todas_ventas]
as
begin
    select * from venta;
end
GO
/****** Object:  StoredProcedure [dbo].[sp_obtener_todos_clientes]    Script Date: 27/10/2024 14:35:41 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO

-- procedimiento para obtener toda la información de la tabla cliente
CREATE procedure [dbo].[sp_obtener_todos_clientes]
as
begin
    select 
		cliente_id as 'value',
		CONCAT(nombre, ' ', apellidos) as 'label'
	from cliente;
end
GO
/****** Object:  StoredProcedure [dbo].[sp_obtener_todos_contratos]    Script Date: 27/10/2024 14:35:41 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO

-- procedimiento para obtener toda la información de la tabla contrato
create procedure [dbo].[sp_obtener_todos_contratos]
as
begin
    select * from contrato;
end

GO
/****** Object:  StoredProcedure [dbo].[sp_obtener_todos_detalles_pago]    Script Date: 27/10/2024 14:35:41 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO

-- procedimiento para obtener toda la información de la tabla detallepago
create procedure [dbo].[sp_obtener_todos_detalles_pago]
as
begin
    select * from detallepago;
end
GO
/****** Object:  StoredProcedure [dbo].[sp_obtener_todos_detalles_venta]    Script Date: 27/10/2024 14:35:41 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO

-- procedimiento para obtener toda la información de la tabla detalleventa
create procedure [dbo].[sp_obtener_todos_detalles_venta]
as
begin
    select * from detalleventa;
end
GO
/****** Object:  StoredProcedure [dbo].[sp_obtener_todos_empleados]    Script Date: 27/10/2024 14:35:41 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO

-- procedimiento para obtener toda la información de la tabla empleado
create procedure [dbo].[sp_obtener_todos_empleados]
as
begin
    select * from empleado;
end
GO
/****** Object:  StoredProcedure [dbo].[sp_obtener_todos_horarios]    Script Date: 27/10/2024 14:35:41 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO

-- procedimiento para obtener toda la información de la tabla horario
CREATE procedure [dbo].[sp_obtener_todos_horarios]
as
begin
    select 
		horario_id as 'value',
		descripcion as 'label'
	from horario;
end
GO
/****** Object:  StoredProcedure [dbo].[sp_obtener_todos_inventarios]    Script Date: 27/10/2024 14:35:41 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO

-- procedimiento para obtener toda la información de la tabla inventario
create procedure [dbo].[sp_obtener_todos_inventarios]
as
begin
    select * from inventario;
end
GO
/****** Object:  StoredProcedure [dbo].[sp_obtener_todos_pagos]    Script Date: 27/10/2024 14:35:41 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO

-- procedimiento para obtener toda la información de la tabla pago
create procedure [dbo].[sp_obtener_todos_pagos]
as
begin
    select * from pago;
end
GO
/****** Object:  StoredProcedure [dbo].[sp_obtener_todos_productos]    Script Date: 27/10/2024 14:35:41 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO

-- procedimiento para obtener toda la información de la tabla producto
CREATE procedure [dbo].[sp_obtener_todos_productos]
as
begin
    select 
		producto_id as 'value',
		nombre as 'label'
	from producto;
end
GO
/****** Object:  StoredProcedure [dbo].[sp_obtener_todos_proveedores]    Script Date: 27/10/2024 14:35:41 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO

-- procedimiento para obtener toda la información de la tabla proveedor
CREATE procedure [dbo].[sp_obtener_todos_proveedores]
as
begin
    select proveedor_id as value, nombre as label from proveedor;
end
GO
/****** Object:  StoredProcedure [dbo].[sp_obtener_todos_roles_empleado]    Script Date: 27/10/2024 14:35:41 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE procedure [dbo].[sp_obtener_todos_roles_empleado]
as
begin
    select 
		rolempleado_id AS 'value',
		nombre AS 'label'
	from rolempleado;
end
GO
/****** Object:  StoredProcedure [dbo].[sp_obtener_todos_salarios]    Script Date: 27/10/2024 14:35:41 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO

-- procedimiento para obtener toda la información de la tabla salario
create procedure [dbo].[sp_obtener_todos_salarios]
as
begin
    select * from salario;
end

GO
/****** Object:  StoredProcedure [dbo].[sp_obtener_todos_usuarios]    Script Date: 27/10/2024 14:35:41 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO

-- procedimiento para obtener toda la información de la tabla usuario
create procedure [dbo].[sp_obtener_todos_usuarios]
as
begin
    select * from usuario;
end

GO
/****** Object:  StoredProcedure [dbo].[sp_obtener_ventas_por_fecha]    Script Date: 27/10/2024 14:35:41 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
create procedure [dbo].[sp_obtener_ventas_por_fecha]
    @fecha_inicio datetime,
    @fecha_fin datetime
as
begin
    if @fecha_inicio > @fecha_fin
    begin
        raiserror('La fecha de inicio no puede ser mayor que la fecha de fin.', 16, 1)
        return
    end

    select 
        v.fecha,
        v.total,
        CONCAT(c.nombre, ' ', c.apellidos) as cliente,
        CONCAT(e.nombre, ' ', e.apellidos) as empleado
    from venta v
    join cliente c on v.cliente_id = c.cliente_id
    join empleado e on v.empleado_id = e.empleado_id
    where v.fecha between @fecha_inicio and @fecha_fin;
end

GO
/****** Object:  StoredProcedure [dbo].[sp_obtenerclienteporid]    Script Date: 27/10/2024 14:35:41 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO

-- Para cliente
create procedure [dbo].[sp_obtenerclienteporid]
    @cliente_id int
as
begin
    select 
        c.cliente_id,
        c.nombre,
        c.apellidos,
        c.dni,
        c.celular,
        c.email
    from 
        cliente c
    where c.cliente_id = @cliente_id
end
GO
/****** Object:  StoredProcedure [dbo].[sp_obtenerdetalleventaporid]    Script Date: 27/10/2024 14:35:41 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE procedure [dbo].[sp_obtenerdetalleventaporid]
    @venta_id int
as
begin
	select 
		prod.producto_id as id,
		prod.nombre as nombre,
		prod.descripcion as descripcion,
		detven.cantidad as cantidad,
		detven.precio_unitario as precio

	from detalleventa detven

	INNER JOIN venta ven
	ON ven.venta_id = detven.venta_id

	INNER JOIN producto prod
	ON prod.producto_id = detven.producto_id

	inner join cliente cli
	ON cli.cliente_id = ven.cliente_id

	where ven.venta_id = @venta_id
END
GO
/****** Object:  StoredProcedure [dbo].[sp_obtenerempleadoporid]    Script Date: 27/10/2024 14:35:41 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE procedure [dbo].[sp_obtenerempleadoporid]
    @empleado_id int
as
begin
    select 
		e.empleado_id,
        e.nombre,
        e.apellidos,
        e.dni,
        e.fecha_nacimiento,
        e.celular,
        e.email,
        e.direccion,
        r.rolempleado_id as rol,
        h.horario_id as horario,
		c.fecha_inicio as inicio_contrato,
		c.fecha_final as final_contrato,
		s.salario
    from 
        empleado e
    left join horario h on e.horario_id = h.horario_id
    left join rolempleado r on e.rolempleado_id = r.rolempleado_id
	left join contrato c on e.empleado_id = c.empleado_id
	left join salario s on e.empleado_id = s.empleado_id
    where e.empleado_id = @empleado_id
end
GO
/****** Object:  StoredProcedure [dbo].[sp_obtenerinventarioporid]    Script Date: 27/10/2024 14:35:41 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO

-- Para inventario
create procedure [dbo].[sp_obtenerinventarioporid]
    @inventario_id int
as
begin
    select 
        i.inventario_id,
        p.nombre as producto,
        i.cantidad,
        i.fechaingreso,
        i.fechavencimiento,
        a.nombre as almacen
    from 
        inventario i
    inner join producto p on i.producto_id = p.producto_id
    inner join almacen a on i.almacen_id = a.almacen_id
    where i.inventario_id = @inventario_id
end
GO
/****** Object:  StoredProcedure [dbo].[sp_obtenerproductoporid]    Script Date: 27/10/2024 14:35:41 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE procedure [dbo].[sp_obtenerproductoporid]
    @producto_id int
as
begin
    select 
        p.producto_id,
        p.nombre,
        p.categoria_id as categoria,
        p.marca_id as marca,
        p.precio,
        p.stock,
		p.fecha_vencimiento,
        p.descripcion,
        p.proveedor_id as proveedor,
		p.indicaciones,
		p.contraindicaciones
    from producto p
    where p.producto_id = @producto_id
end
GO
/****** Object:  StoredProcedure [dbo].[sp_obtenerventaporid]    Script Date: 27/10/2024 14:35:41 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE procedure [dbo].[sp_obtenerventaporid]
    @venta_id int
as
begin
    select 
	CAST(ven.fecha AS DATE) as fecha,
	cli.dni as dni,
	ven.numero as numero,
	ven.tipo_doc_venta as documento, 
	cli.cliente_id as cliente,
	CONCAT(emp.nombre, ' ', emp.apellidos) as trabajador,
	detven.descuento as descuento,
	detven.impuestos as impuestos,
	ven.total as total

	from detalleventa detven

	INNER JOIN venta ven
	ON ven.venta_id = detven.venta_id

	INNER JOIN producto prod
	ON prod.producto_id = detven.producto_id

	INNER JOIN empleado emp
	ON emp.empleado_id = ven.empleado_id

	inner join cliente cli
	ON cli.cliente_id = ven.cliente_id

	where ven.venta_id = @venta_id
end
-- select * from venta
GO
/****** Object:  StoredProcedure [dbo].[sp_reporte_cantidad_ventas_mes]    Script Date: 27/10/2024 14:35:41 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO

CREATE procedure [dbo].[sp_reporte_cantidad_ventas_mes]
as
begin
    
	select 
	CASE MONTH(fecha)
		WHEN 1 THEN 'Enero'
		WHEN 2 THEN 'Febrero'
		WHEN 3 THEN 'Marzo'
		WHEN 4 THEN 'Abril'
		WHEN 5 THEN 'Mayo'
		WHEN 6 THEN 'Junio'
		WHEN 7 THEN 'Julio'
		WHEN 8 THEN 'Agosto'
		WHEN 9 THEN 'Septiembre'
		WHEN 10 THEN 'Octubre'
		WHEN 11 THEN 'Noviembre'
		WHEN 12 THEN 'Diciembre'
	END as mes,
	ISNULL(sum(total), 0) as venta_mes
	from venta

	GROUP BY YEAR(fecha), MONTH(fecha)

end

GO
/****** Object:  StoredProcedure [dbo].[sp_reporte_clientes_frecuentes]    Script Date: 27/10/2024 14:35:41 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE procedure [dbo].[sp_reporte_clientes_frecuentes]
as
begin
    select c.cliente_id, c.nombre + ' ' + c.apellidos as cliente, count(v.venta_id) as cantidad_ventas, sum(v.total) as total_compras
    from cliente c
    left join venta v on c.cliente_id = v.cliente_id
    group by c.cliente_id, c.nombre, c.apellidos
    order by total_compras desc;
end

GO
/****** Object:  StoredProcedure [dbo].[sp_reporte_producto_mas_vendido]    Script Date: 27/10/2024 14:35:41 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE procedure [dbo].[sp_reporte_producto_mas_vendido]
as
begin
    
	select top 1 prod.nombre as producto from producto prod
	left join detalleventa detven
	on detven.producto_id = prod.producto_id
	GROUP BY prod.nombre
	order by sum(detven.cantidad) desc
	
end
GO
/****** Object:  StoredProcedure [dbo].[sp_reporte_venta_diaria]    Script Date: 27/10/2024 14:35:41 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO

CREATE procedure [dbo].[sp_reporte_venta_diaria]
as
begin
    
	select ISNULL(SUM(total), 0) as venta_hoy
	from venta
	WHERE DAY(fecha) = DAY(GETDATE())
	
end
GO
/****** Object:  StoredProcedure [dbo].[sp_reporte_ventas_del_mes]    Script Date: 27/10/2024 14:35:41 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO

CREATE procedure [dbo].[sp_reporte_ventas_del_mes]
as
begin
    select ISNULL(sum(total), 0) as venta_mes,
	CASE MONTH(GETDATE())
		WHEN 1 THEN 'Enero'
		WHEN 2 THEN 'Febrero'
		WHEN 3 THEN 'Marzo'
		WHEN 4 THEN 'Abril'
		WHEN 5 THEN 'Mayo'
		WHEN 6 THEN 'Junio'
		WHEN 7 THEN 'Julio'
		WHEN 8 THEN 'Agosto'
		WHEN 9 THEN 'Septiembre'
		WHEN 10 THEN 'Octubre'
		WHEN 11 THEN 'Noviembre'
		WHEN 12 THEN 'Diciembre'
	END as mes
	from venta
	where MONTH(fecha) = MONTH(GETDATE())
end
GO
/****** Object:  StoredProcedure [dbo].[sp_validar_stock_producto]    Script Date: 27/10/2024 14:35:41 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
create procedure [dbo].[sp_validar_stock_producto]
    @producto_id int,
    @cantidad int
as
begin
    declare @stock_actual int;

    select @stock_actual = stock from producto where producto_id = @producto_id;

    if @stock_actual is null
    begin
        select 'producto_no_existente' as mensaje;
    end
    else if @stock_actual < @cantidad
    begin
        select 'stock_insuficiente' as mensaje;
    end
    else
    begin
        select 'stock_suficiente' as mensaje;
    end
end
GO
/****** Object:  StoredProcedure [dbo].[sp_verificar_existencia_cliente]    Script Date: 27/10/2024 14:35:41 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
create procedure [dbo].[sp_verificar_existencia_cliente]
    @dni char(8)
as
begin
    if exists (select 1 from cliente where dni = @dni)
    begin
        select 'cliente_existente' as mensaje;
    end
    else
    begin
        select 'cliente_no_existente' as mensaje;
    end
end
GO
/****** Object:  StoredProcedure [dbo].[sp_verificar_existencia_empleado]    Script Date: 27/10/2024 14:35:41 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
create procedure [dbo].[sp_verificar_existencia_empleado]
    @dni char(8)
as
begin
    if exists (select 1 from empleado where dni = @dni)
    begin
        select 'empleado_existente' as mensaje;
    end
    else
    begin
        select 'empleado_no_existente' as mensaje;
    end
end
GO
/****** Object:  StoredProcedure [dbo].[sp_vincular_producto_a_proveedor]    Script Date: 27/10/2024 14:35:41 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO

-- procedimiento para vincular producto a proveedor
create procedure [dbo].[sp_vincular_producto_a_proveedor]
    @producto_id int,
    @proveedor_id int
as
begin
    update producto
    set proveedor_id = @proveedor_id
    where producto_id = @producto_id;

    if @@rowcount > 0
    begin
        select 'vinculacion_exitosa' as mensaje;
    end
    else
    begin
        select 'producto_no_encontrado' as mensaje;
    end
end
GO
