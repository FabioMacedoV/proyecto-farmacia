USE [NickyMedic]
GO
SET IDENTITY_INSERT [dbo].[rolempleado] ON 

INSERT [dbo].[rolempleado] ([rolempleado_id], [nombre]) VALUES (1, N'Administrador')
INSERT [dbo].[rolempleado] ([rolempleado_id], [nombre]) VALUES (2, N'Vendedor')
INSERT [dbo].[rolempleado] ([rolempleado_id], [nombre]) VALUES (3, N'Personal de almacen')
SET IDENTITY_INSERT [dbo].[rolempleado] OFF
GO
SET IDENTITY_INSERT [dbo].[horario] ON 

INSERT [dbo].[horario] ([horario_id], [descripcion]) VALUES (1, N'Lunes a Viernes 9:00 am - 5:00 pm')
INSERT [dbo].[horario] ([horario_id], [descripcion]) VALUES (2, N'Lunes a Viernes 10:00 am - 6:00 pm')
INSERT [dbo].[horario] ([horario_id], [descripcion]) VALUES (3, N'Lunes a Sábado 8:00 am - 4:00 pm')
INSERT [dbo].[horario] ([horario_id], [descripcion]) VALUES (4, N'Lunes a Viernes 12:00 pm - 8:00 pm')
INSERT [dbo].[horario] ([horario_id], [descripcion]) VALUES (5, N'Sábado y Domingo 9:00 am - 1:00 pm')
SET IDENTITY_INSERT [dbo].[horario] OFF
GO
SET IDENTITY_INSERT [dbo].[empleado] ON 

INSERT [dbo].[empleado] ([empleado_id], [nombre], [apellidos], [dni], [fecha_nacimiento], [celular], [email], [direccion], [horario_id], [rolempleado_id]) VALUES (1, N'Carlos', N'González Pérez', N'98765432', CAST(N'1985-04-12' AS Date), N'912345678', N'c.gonzalez@example.com', N'Av. Siempre Viva 123', 1, 1)
INSERT [dbo].[empleado] ([empleado_id], [nombre], [apellidos], [dni], [fecha_nacimiento], [celular], [email], [direccion], [horario_id], [rolempleado_id]) VALUES (2, N'Ana', N'Martínez López', N'87654321', CAST(N'1990-08-25' AS Date), N'987654321', N'a.martinez@example.com', N'Calle Falsa 456', 2, 2)
INSERT [dbo].[empleado] ([empleado_id], [nombre], [apellidos], [dni], [fecha_nacimiento], [celular], [email], [direccion], [horario_id], [rolempleado_id]) VALUES (3, N'Jorge', N'Ramírez Díaz', N'11223344', CAST(N'1988-12-05' AS Date), N'911223344', N'j.ramirez@example.com', N'Jr. Los Olivos 789', 3, 2)
INSERT [dbo].[empleado] ([empleado_id], [nombre], [apellidos], [dni], [fecha_nacimiento], [celular], [email], [direccion], [horario_id], [rolempleado_id]) VALUES (4, N'Lucía', N'Torres Mendoza', N'22334455', CAST(N'1995-02-18' AS Date), N'922334455', N'l.torres@example.com', N'Av. Las Flores 101', 4, 3)
INSERT [dbo].[empleado] ([empleado_id], [nombre], [apellidos], [dni], [fecha_nacimiento], [celular], [email], [direccion], [horario_id], [rolempleado_id]) VALUES (5, N'María', N'Fernández Ruiz', N'33445566', CAST(N'1987-06-30' AS Date), N'933445566', N'm.fernandez@example.com', N'Jr. El Sol 202', 5, 3)
SET IDENTITY_INSERT [dbo].[empleado] OFF
GO
SET IDENTITY_INSERT [dbo].[usuario] ON 

INSERT [dbo].[usuario] ([usuario_id], [nombre], [contraseña], [empleado_id]) VALUES (1, N'carlos_admin', N'admi123', 1)
INSERT [dbo].[usuario] ([usuario_id], [nombre], [contraseña], [empleado_id]) VALUES (2, N'ana_vendedora', N'vendedora2024', 2)
INSERT [dbo].[usuario] ([usuario_id], [nombre], [contraseña], [empleado_id]) VALUES (3, N'jorge_vendedor', N'vendedor123', 3)
INSERT [dbo].[usuario] ([usuario_id], [nombre], [contraseña], [empleado_id]) VALUES (4, N'lucia_almacen', N'almacen2024', 4)
INSERT [dbo].[usuario] ([usuario_id], [nombre], [contraseña], [empleado_id]) VALUES (5, N'maria_admin', N'almacen123', 5)
SET IDENTITY_INSERT [dbo].[usuario] OFF
GO
SET IDENTITY_INSERT [dbo].[contrato] ON 

INSERT [dbo].[contrato] ([contrato_id], [empleado_id], [fecha_inicio], [fecha_final], [tipo_contrato]) VALUES (2, 2, CAST(N'2024-02-01' AS Date), NULL, N'Indefinido')
INSERT [dbo].[contrato] ([contrato_id], [empleado_id], [fecha_inicio], [fecha_final], [tipo_contrato]) VALUES (3, 3, CAST(N'2024-03-01' AS Date), NULL, N'Indefinido')
INSERT [dbo].[contrato] ([contrato_id], [empleado_id], [fecha_inicio], [fecha_final], [tipo_contrato]) VALUES (4, 4, CAST(N'2024-04-01' AS Date), NULL, N'Indefinido')
INSERT [dbo].[contrato] ([contrato_id], [empleado_id], [fecha_inicio], [fecha_final], [tipo_contrato]) VALUES (5, 5, CAST(N'2024-05-01' AS Date), NULL, N'Indefinido')
INSERT [dbo].[contrato] ([contrato_id], [empleado_id], [fecha_inicio], [fecha_final], [tipo_contrato]) VALUES (6, NULL, CAST(N'2024-10-16' AS Date), CAST(N'2024-10-23' AS Date), N'Definido')
INSERT [dbo].[contrato] ([contrato_id], [empleado_id], [fecha_inicio], [fecha_final], [tipo_contrato]) VALUES (7, NULL, CAST(N'2024-10-16' AS Date), CAST(N'2024-10-23' AS Date), N'Definido')
INSERT [dbo].[contrato] ([contrato_id], [empleado_id], [fecha_inicio], [fecha_final], [tipo_contrato]) VALUES (8, NULL, CAST(N'2024-10-16' AS Date), CAST(N'2024-10-23' AS Date), N'Definido')
INSERT [dbo].[contrato] ([contrato_id], [empleado_id], [fecha_inicio], [fecha_final], [tipo_contrato]) VALUES (9, NULL, CAST(N'2024-10-16' AS Date), CAST(N'2024-10-23' AS Date), N'Definido')
INSERT [dbo].[contrato] ([contrato_id], [empleado_id], [fecha_inicio], [fecha_final], [tipo_contrato]) VALUES (14, NULL, CAST(N'1900-01-01' AS Date), CAST(N'1900-01-01' AS Date), N'Definido')
INSERT [dbo].[contrato] ([contrato_id], [empleado_id], [fecha_inicio], [fecha_final], [tipo_contrato]) VALUES (15, NULL, CAST(N'1900-01-01' AS Date), CAST(N'1900-01-01' AS Date), N'Definido')
INSERT [dbo].[contrato] ([contrato_id], [empleado_id], [fecha_inicio], [fecha_final], [tipo_contrato]) VALUES (16, NULL, CAST(N'1900-01-01' AS Date), CAST(N'1900-01-01' AS Date), N'Definido')
INSERT [dbo].[contrato] ([contrato_id], [empleado_id], [fecha_inicio], [fecha_final], [tipo_contrato]) VALUES (20, NULL, CAST(N'1900-01-01' AS Date), CAST(N'1900-01-01' AS Date), N'Definido')
INSERT [dbo].[contrato] ([contrato_id], [empleado_id], [fecha_inicio], [fecha_final], [tipo_contrato]) VALUES (21, NULL, CAST(N'1900-01-01' AS Date), CAST(N'1900-01-01' AS Date), N'Definido')
SET IDENTITY_INSERT [dbo].[contrato] OFF
GO
SET IDENTITY_INSERT [dbo].[salario] ON 

INSERT [dbo].[salario] ([salario_id], [empleado_id], [salario], [fecha_inicio], [fecha_fin]) VALUES (2, 2, CAST(2700.00 AS Decimal(10, 2)), CAST(N'2024-02-01' AS Date), NULL)
INSERT [dbo].[salario] ([salario_id], [empleado_id], [salario], [fecha_inicio], [fecha_fin]) VALUES (3, 3, CAST(2700.00 AS Decimal(10, 2)), CAST(N'2024-03-01' AS Date), NULL)
INSERT [dbo].[salario] ([salario_id], [empleado_id], [salario], [fecha_inicio], [fecha_fin]) VALUES (4, 4, CAST(2300.00 AS Decimal(10, 2)), CAST(N'2024-04-01' AS Date), NULL)
INSERT [dbo].[salario] ([salario_id], [empleado_id], [salario], [fecha_inicio], [fecha_fin]) VALUES (5, 5, CAST(2300.00 AS Decimal(10, 2)), CAST(N'2024-05-01' AS Date), NULL)
INSERT [dbo].[salario] ([salario_id], [empleado_id], [salario], [fecha_inicio], [fecha_fin]) VALUES (6, NULL, CAST(32.00 AS Decimal(10, 2)), CAST(N'2024-10-20' AS Date), NULL)
INSERT [dbo].[salario] ([salario_id], [empleado_id], [salario], [fecha_inicio], [fecha_fin]) VALUES (7, NULL, CAST(32.00 AS Decimal(10, 2)), CAST(N'2024-10-20' AS Date), NULL)
INSERT [dbo].[salario] ([salario_id], [empleado_id], [salario], [fecha_inicio], [fecha_fin]) VALUES (8, NULL, CAST(32.00 AS Decimal(10, 2)), CAST(N'2024-10-20' AS Date), NULL)
INSERT [dbo].[salario] ([salario_id], [empleado_id], [salario], [fecha_inicio], [fecha_fin]) VALUES (9, NULL, CAST(32.00 AS Decimal(10, 2)), CAST(N'2024-10-20' AS Date), NULL)
INSERT [dbo].[salario] ([salario_id], [empleado_id], [salario], [fecha_inicio], [fecha_fin]) VALUES (14, NULL, CAST(0.00 AS Decimal(10, 2)), CAST(N'2024-10-20' AS Date), NULL)
INSERT [dbo].[salario] ([salario_id], [empleado_id], [salario], [fecha_inicio], [fecha_fin]) VALUES (15, NULL, CAST(0.00 AS Decimal(10, 2)), CAST(N'2024-10-20' AS Date), NULL)
INSERT [dbo].[salario] ([salario_id], [empleado_id], [salario], [fecha_inicio], [fecha_fin]) VALUES (16, NULL, CAST(0.00 AS Decimal(10, 2)), CAST(N'2024-10-20' AS Date), NULL)
INSERT [dbo].[salario] ([salario_id], [empleado_id], [salario], [fecha_inicio], [fecha_fin]) VALUES (20, NULL, CAST(0.00 AS Decimal(10, 2)), CAST(N'2024-10-25' AS Date), NULL)
INSERT [dbo].[salario] ([salario_id], [empleado_id], [salario], [fecha_inicio], [fecha_fin]) VALUES (21, NULL, CAST(0.00 AS Decimal(10, 2)), CAST(N'2024-10-25' AS Date), NULL)
SET IDENTITY_INSERT [dbo].[salario] OFF
GO
SET IDENTITY_INSERT [dbo].[cliente] ON 

INSERT [dbo].[cliente] ([cliente_id], [nombre], [apellidos], [dni], [celular], [email]) VALUES (1, N'Juan', N'Pérez García', N'12345678', N'912345678', N'juan.perez@gmail.com')
INSERT [dbo].[cliente] ([cliente_id], [nombre], [apellidos], [dni], [celular], [email]) VALUES (2, N'María', N'López Fernández', N'23456789', N'923456789', N'maria.lopez@example.com')
INSERT [dbo].[cliente] ([cliente_id], [nombre], [apellidos], [dni], [celular], [email]) VALUES (3, N'Luis', N'González Martínez', N'34567890', N'934567890', N'luis.gonzalez@example.com')
INSERT [dbo].[cliente] ([cliente_id], [nombre], [apellidos], [dni], [celular], [email]) VALUES (4, N'Ana', N'Ramírez Díaz', N'45678901', N'945678901', N'ana.ramirez@gmail.com')
INSERT [dbo].[cliente] ([cliente_id], [nombre], [apellidos], [dni], [celular], [email]) VALUES (5, N'Carlos', N'Torres Sánchez', N'56789012', N'956789012', N'carlos.torres@example.com')
SET IDENTITY_INSERT [dbo].[cliente] OFF
GO
SET IDENTITY_INSERT [dbo].[venta] ON 

INSERT [dbo].[venta] ([venta_id], [fecha], [total], [cliente_id], [empleado_id], [numero], [tipo_doc_venta]) VALUES (1, CAST(N'2024-01-05T00:00:00.000' AS DateTime), CAST(29.80 AS Decimal(10, 2)), 1, 2, NULL, NULL)
INSERT [dbo].[venta] ([venta_id], [fecha], [total], [cliente_id], [empleado_id], [numero], [tipo_doc_venta]) VALUES (2, CAST(N'2024-02-10T14:30:00.000' AS DateTime), CAST(29.00 AS Decimal(10, 2)), 2, 1, NULL, NULL)
INSERT [dbo].[venta] ([venta_id], [fecha], [total], [cliente_id], [empleado_id], [numero], [tipo_doc_venta]) VALUES (3, CAST(N'2024-03-15T14:30:00.000' AS DateTime), CAST(14.00 AS Decimal(10, 2)), 3, 3, NULL, NULL)
INSERT [dbo].[venta] ([venta_id], [fecha], [total], [cliente_id], [empleado_id], [numero], [tipo_doc_venta]) VALUES (4, CAST(N'2024-04-20T14:30:00.000' AS DateTime), CAST(32.10 AS Decimal(10, 2)), 1, 2, NULL, NULL)
INSERT [dbo].[venta] ([venta_id], [fecha], [total], [cliente_id], [empleado_id], [numero], [tipo_doc_venta]) VALUES (5, CAST(N'2024-05-25T14:30:00.000' AS DateTime), CAST(13.50 AS Decimal(10, 2)), 4, 1, NULL, NULL)
INSERT [dbo].[venta] ([venta_id], [fecha], [total], [cliente_id], [empleado_id], [numero], [tipo_doc_venta]) VALUES (6, CAST(N'2024-06-30T14:30:00.000' AS DateTime), CAST(58.00 AS Decimal(10, 2)), 2, 2, NULL, NULL)
INSERT [dbo].[venta] ([venta_id], [fecha], [total], [cliente_id], [empleado_id], [numero], [tipo_doc_venta]) VALUES (7, CAST(N'2024-07-10T14:30:00.000' AS DateTime), CAST(59.60 AS Decimal(10, 2)), 5, 3, NULL, NULL)
INSERT [dbo].[venta] ([venta_id], [fecha], [total], [cliente_id], [empleado_id], [numero], [tipo_doc_venta]) VALUES (8, CAST(N'2024-08-05T14:30:00.000' AS DateTime), CAST(10.70 AS Decimal(10, 2)), 1, 2, NULL, NULL)
INSERT [dbo].[venta] ([venta_id], [fecha], [total], [cliente_id], [empleado_id], [numero], [tipo_doc_venta]) VALUES (9, CAST(N'2024-09-12T14:30:00.000' AS DateTime), CAST(5.60 AS Decimal(10, 2)), 3, 1, NULL, NULL)
INSERT [dbo].[venta] ([venta_id], [fecha], [total], [cliente_id], [empleado_id], [numero], [tipo_doc_venta]) VALUES (10, CAST(N'2024-10-01T14:30:00.000' AS DateTime), CAST(29.00 AS Decimal(10, 2)), 4, 2, NULL, NULL)
INSERT [dbo].[venta] ([venta_id], [fecha], [total], [cliente_id], [empleado_id], [numero], [tipo_doc_venta]) VALUES (11, CAST(N'2024-10-10T14:30:00.000' AS DateTime), CAST(40.50 AS Decimal(10, 2)), 5, 3, NULL, NULL)
SET IDENTITY_INSERT [dbo].[venta] OFF
GO
SET IDENTITY_INSERT [dbo].[categoria] ON 

INSERT [dbo].[categoria] ([categoria_id], [nombre]) VALUES (1, N'Cuidado para el bebe')
INSERT [dbo].[categoria] ([categoria_id], [nombre]) VALUES (2, N'Medicamentos')
INSERT [dbo].[categoria] ([categoria_id], [nombre]) VALUES (3, N'Cuidado personal')
SET IDENTITY_INSERT [dbo].[categoria] OFF
GO
SET IDENTITY_INSERT [dbo].[marca] ON 

INSERT [dbo].[marca] ([marca_id], [nombre]) VALUES (1, N'Bayer')
INSERT [dbo].[marca] ([marca_id], [nombre]) VALUES (2, N'GlaxoSmithKline')
INSERT [dbo].[marca] ([marca_id], [nombre]) VALUES (3, N'Pfizer')
INSERT [dbo].[marca] ([marca_id], [nombre]) VALUES (4, N'Johnson & Johnson')
INSERT [dbo].[marca] ([marca_id], [nombre]) VALUES (5, N'Sandoz')
INSERT [dbo].[marca] ([marca_id], [nombre]) VALUES (6, N'Sanofi')
INSERT [dbo].[marca] ([marca_id], [nombre]) VALUES (7, N'Merck')
INSERT [dbo].[marca] ([marca_id], [nombre]) VALUES (8, N'Teva')
INSERT [dbo].[marca] ([marca_id], [nombre]) VALUES (9, N'Novartis')
INSERT [dbo].[marca] ([marca_id], [nombre]) VALUES (10, N'Abbott')
SET IDENTITY_INSERT [dbo].[marca] OFF
GO
SET IDENTITY_INSERT [dbo].[proveedor] ON 

INSERT [dbo].[proveedor] ([proveedor_id], [nombre], [direccion], [celular], [email]) VALUES (1, N'Farmindustria', N'Av. Javier Prado Este 1300, San Isidro, Lima', N'987654321', N'contacto@farmindustria.com.pe')
INSERT [dbo].[proveedor] ([proveedor_id], [nombre], [direccion], [celular], [email]) VALUES (2, N'Química Suiza', N'Av. Pardo 900, Miraflores, Lima', N'987123456', N'info@quimicasuiza.com.pe')
INSERT [dbo].[proveedor] ([proveedor_id], [nombre], [direccion], [celular], [email]) VALUES (3, N'Inmunofarma', N'Av. José Larco 123, Miraflores, Lima', N'963852741', N'ventas@inmunofarma.com.pe')
INSERT [dbo].[proveedor] ([proveedor_id], [nombre], [direccion], [celular], [email]) VALUES (4, N'Laboratorios Fegali', N'Av. Prolongación Iquitos 500, Lima', N'996123456', N'fegali@laboratoriosfegali.com.pe')
INSERT [dbo].[proveedor] ([proveedor_id], [nombre], [direccion], [celular], [email]) VALUES (5, N'Casa de Farma', N'Calle Arica 234, Surquillo, Lima', N'945678123', N'ventas@casadefarma.com.pe')
SET IDENTITY_INSERT [dbo].[proveedor] OFF
GO
SET IDENTITY_INSERT [dbo].[producto] ON 

INSERT [dbo].[producto] ([producto_id], [nombre], [descripcion], [indicaciones], [contraindicaciones], [precio], [stock], [categoria_id], [marca_id], [proveedor_id], [fecha_vencimiento]) VALUES (1, N'Jabón Líquido Johnson´s Baby', N'Jabón suave para el cuidado de la piel del bebé.', N'Uso diario en la bañera para la higiene del bebé.', N'No aplicar en áreas irritadas.', CAST(29.80 AS Decimal(10, 2)), 100, 1, 1, 1, CAST(N'2024-10-25' AS Date))
INSERT [dbo].[producto] ([producto_id], [nombre], [descripcion], [indicaciones], [contraindicaciones], [precio], [stock], [categoria_id], [marca_id], [proveedor_id], [fecha_vencimiento]) VALUES (2, N'Aspirina 500mg', N'Analgésico y antiinflamatorio para el alivio del dolor.', N'Tomar según indicaciones del médico.', N'No usar en caso de alergia al ácido acetilsalicílico.', CAST(2.80 AS Decimal(10, 2)), 200, 2, 2, 2, CAST(N'2024-10-25' AS Date))
INSERT [dbo].[producto] ([producto_id], [nombre], [descripcion], [indicaciones], [contraindicaciones], [precio], [stock], [categoria_id], [marca_id], [proveedor_id], [fecha_vencimiento]) VALUES (3, N'Crema Hidratante Nivea', N'Crema hidratante para el cuidado de la piel de las mujeres.', N'0', N'Evitar contacto con los ojos.', CAST(150.00 AS Decimal(10, 2)), 150, 3, 1, 3, CAST(N'2024-10-25' AS Date))
INSERT [dbo].[producto] ([producto_id], [nombre], [descripcion], [indicaciones], [contraindicaciones], [precio], [stock], [categoria_id], [marca_id], [proveedor_id], [fecha_vencimiento]) VALUES (4, N'Antibiótico Amoxicilina 500mg', N'Antibiótico para el tratamiento de infecciones.', N'Tomar con un vaso de agua según indicaciones.', N'No usar si es alérgico a la penicilina.', CAST(29.00 AS Decimal(10, 2)), 120, 2, 3, 4, CAST(N'2024-10-25' AS Date))
INSERT [dbo].[producto] ([producto_id], [nombre], [descripcion], [indicaciones], [contraindicaciones], [precio], [stock], [categoria_id], [marca_id], [proveedor_id], [fecha_vencimiento]) VALUES (5, N'Suero Oral Hidratante', N'Suero para rehidratación oral en casos de deshidratación.', N'Administrar según necesidad.', N'No usar en caso de obstrucción intestinal.', CAST(10.70 AS Decimal(10, 2)), 80, 2, 4, 2, CAST(N'2024-10-25' AS Date))
INSERT [dbo].[producto] ([producto_id], [nombre], [descripcion], [indicaciones], [contraindicaciones], [precio], [stock], [categoria_id], [marca_id], [proveedor_id], [fecha_vencimiento]) VALUES (6, N'Champú Anticaspa Head & Shoulders', N'Champú para combatir la caspa y el picor del cuero cabelludo.', N'Uso regular para mantener el cabello saludable.', N'No aplicar en heridas abiertas.', CAST(13.50 AS Decimal(10, 2)), 200, 3, 1, 3, CAST(N'2024-10-25' AS Date))
INSERT [dbo].[producto] ([producto_id], [nombre], [descripcion], [indicaciones], [contraindicaciones], [precio], [stock], [categoria_id], [marca_id], [proveedor_id], [fecha_vencimiento]) VALUES (7, N'Fórmula Infantil Similac', N'Fórmula en polvo para lactantes.', N'Preparar según las instrucciones del envase.', N'No usar como sustituto de la leche materna.', CAST(60.00 AS Decimal(10, 2)), 50, 1, 2, 2, CAST(N'2024-10-25' AS Date))
SET IDENTITY_INSERT [dbo].[producto] OFF
GO
SET IDENTITY_INSERT [dbo].[almacen] ON 

INSERT [dbo].[almacen] ([almacen_id], [nombre]) VALUES (1, N'Sin Refrigeración')
INSERT [dbo].[almacen] ([almacen_id], [nombre]) VALUES (2, N'Con Refrigeración')
SET IDENTITY_INSERT [dbo].[almacen] OFF
GO
SET IDENTITY_INSERT [dbo].[inventario] ON 

INSERT [dbo].[inventario] ([inventario_id], [cantidad], [fechaingreso], [fechavencimiento], [producto_id], [almacen_id]) VALUES (1, 50, CAST(N'2024-10-01' AS Date), CAST(N'2025-10-01' AS Date), 1, 1)
INSERT [dbo].[inventario] ([inventario_id], [cantidad], [fechaingreso], [fechavencimiento], [producto_id], [almacen_id]) VALUES (2, 20, CAST(N'2024-10-02' AS Date), CAST(N'2025-09-01' AS Date), 4, 2)
INSERT [dbo].[inventario] ([inventario_id], [cantidad], [fechaingreso], [fechavencimiento], [producto_id], [almacen_id]) VALUES (3, 100, CAST(N'2024-10-03' AS Date), CAST(N'2025-12-01' AS Date), 2, 1)
INSERT [dbo].[inventario] ([inventario_id], [cantidad], [fechaingreso], [fechavencimiento], [producto_id], [almacen_id]) VALUES (4, 30, CAST(N'2024-10-04' AS Date), CAST(N'2025-08-01' AS Date), 5, 2)
INSERT [dbo].[inventario] ([inventario_id], [cantidad], [fechaingreso], [fechavencimiento], [producto_id], [almacen_id]) VALUES (5, 80, CAST(N'2024-10-05' AS Date), CAST(N'2025-11-01' AS Date), 6, 1)
SET IDENTITY_INSERT [dbo].[inventario] OFF
GO
SET IDENTITY_INSERT [dbo].[detalleventa] ON 

INSERT [dbo].[detalleventa] ([detalleventa_id], [cantidad], [precio_unitario], [descuento], [impuestos], [venta_id], [producto_id]) VALUES (1, 1, CAST(29.80 AS Decimal(10, 2)), CAST(0.00 AS Decimal(10, 2)), CAST(0.00 AS Decimal(10, 2)), 1, 1)
INSERT [dbo].[detalleventa] ([detalleventa_id], [cantidad], [precio_unitario], [descuento], [impuestos], [venta_id], [producto_id]) VALUES (2, 1, CAST(29.00 AS Decimal(10, 2)), CAST(0.00 AS Decimal(10, 2)), CAST(0.00 AS Decimal(10, 2)), 2, 4)
INSERT [dbo].[detalleventa] ([detalleventa_id], [cantidad], [precio_unitario], [descuento], [impuestos], [venta_id], [producto_id]) VALUES (3, 5, CAST(2.80 AS Decimal(10, 2)), CAST(0.00 AS Decimal(10, 2)), CAST(0.00 AS Decimal(10, 2)), 3, 2)
INSERT [dbo].[detalleventa] ([detalleventa_id], [cantidad], [precio_unitario], [descuento], [impuestos], [venta_id], [producto_id]) VALUES (4, 3, CAST(10.70 AS Decimal(10, 2)), CAST(0.00 AS Decimal(10, 2)), CAST(0.00 AS Decimal(10, 2)), 4, 5)
INSERT [dbo].[detalleventa] ([detalleventa_id], [cantidad], [precio_unitario], [descuento], [impuestos], [venta_id], [producto_id]) VALUES (5, 1, CAST(13.50 AS Decimal(10, 2)), CAST(0.00 AS Decimal(10, 2)), CAST(0.00 AS Decimal(10, 2)), 5, 6)
INSERT [dbo].[detalleventa] ([detalleventa_id], [cantidad], [precio_unitario], [descuento], [impuestos], [venta_id], [producto_id]) VALUES (6, 2, CAST(29.00 AS Decimal(10, 2)), CAST(0.00 AS Decimal(10, 2)), CAST(0.00 AS Decimal(10, 2)), 6, 3)
INSERT [dbo].[detalleventa] ([detalleventa_id], [cantidad], [precio_unitario], [descuento], [impuestos], [venta_id], [producto_id]) VALUES (7, 2, CAST(29.80 AS Decimal(10, 2)), CAST(0.00 AS Decimal(10, 2)), CAST(0.00 AS Decimal(10, 2)), 7, 1)
INSERT [dbo].[detalleventa] ([detalleventa_id], [cantidad], [precio_unitario], [descuento], [impuestos], [venta_id], [producto_id]) VALUES (8, 1, CAST(10.70 AS Decimal(10, 2)), CAST(0.00 AS Decimal(10, 2)), CAST(0.00 AS Decimal(10, 2)), 8, 5)
INSERT [dbo].[detalleventa] ([detalleventa_id], [cantidad], [precio_unitario], [descuento], [impuestos], [venta_id], [producto_id]) VALUES (9, 2, CAST(2.80 AS Decimal(10, 2)), CAST(0.00 AS Decimal(10, 2)), CAST(0.00 AS Decimal(10, 2)), 9, 2)
INSERT [dbo].[detalleventa] ([detalleventa_id], [cantidad], [precio_unitario], [descuento], [impuestos], [venta_id], [producto_id]) VALUES (10, 1, CAST(29.00 AS Decimal(10, 2)), CAST(0.00 AS Decimal(10, 2)), CAST(0.00 AS Decimal(10, 2)), 10, 4)
INSERT [dbo].[detalleventa] ([detalleventa_id], [cantidad], [precio_unitario], [descuento], [impuestos], [venta_id], [producto_id]) VALUES (11, 3, CAST(13.50 AS Decimal(10, 2)), CAST(0.00 AS Decimal(10, 2)), CAST(0.00 AS Decimal(10, 2)), 11, 6)
SET IDENTITY_INSERT [dbo].[detalleventa] OFF
GO
SET IDENTITY_INSERT [dbo].[pago] ON 

INSERT [dbo].[pago] ([pago_id], [fecha], [monto], [metodopago], [venta_id]) VALUES (1, CAST(N'2024-01-15T00:00:00.000' AS DateTime), CAST(50.00 AS Decimal(10, 2)), N'Efectivo', 1)
INSERT [dbo].[pago] ([pago_id], [fecha], [monto], [metodopago], [venta_id]) VALUES (2, CAST(N'2024-02-20T00:00:00.000' AS DateTime), CAST(50.00 AS Decimal(10, 2)), N'Tarjeta de Crédito', 2)
INSERT [dbo].[pago] ([pago_id], [fecha], [monto], [metodopago], [venta_id]) VALUES (3, CAST(N'2024-03-10T00:00:00.000' AS DateTime), CAST(20.00 AS Decimal(10, 2)), N'Efectivo', 3)
INSERT [dbo].[pago] ([pago_id], [fecha], [monto], [metodopago], [venta_id]) VALUES (4, CAST(N'2024-04-05T00:00:00.000' AS DateTime), CAST(32.10 AS Decimal(10, 2)), N'Tarjeta de Débito', 4)
INSERT [dbo].[pago] ([pago_id], [fecha], [monto], [metodopago], [venta_id]) VALUES (5, CAST(N'2024-05-12T00:00:00.000' AS DateTime), CAST(20.00 AS Decimal(10, 2)), N'Efectivo', 5)
INSERT [dbo].[pago] ([pago_id], [fecha], [monto], [metodopago], [venta_id]) VALUES (6, CAST(N'2024-06-18T00:00:00.000' AS DateTime), CAST(58.00 AS Decimal(10, 2)), N'Transferencia', 6)
INSERT [dbo].[pago] ([pago_id], [fecha], [monto], [metodopago], [venta_id]) VALUES (7, CAST(N'2024-07-22T00:00:00.000' AS DateTime), CAST(60.00 AS Decimal(10, 2)), N'Efectivo', 7)
INSERT [dbo].[pago] ([pago_id], [fecha], [monto], [metodopago], [venta_id]) VALUES (8, CAST(N'2024-08-15T00:00:00.000' AS DateTime), CAST(20.00 AS Decimal(10, 2)), N'Tarjeta de Crédito', 8)
INSERT [dbo].[pago] ([pago_id], [fecha], [monto], [metodopago], [venta_id]) VALUES (9, CAST(N'2024-09-10T00:00:00.000' AS DateTime), CAST(10.00 AS Decimal(10, 2)), N'Efectivo', 9)
INSERT [dbo].[pago] ([pago_id], [fecha], [monto], [metodopago], [venta_id]) VALUES (10, CAST(N'2024-10-05T00:00:00.000' AS DateTime), CAST(30.00 AS Decimal(10, 2)), N'Transferencia', 10)
INSERT [dbo].[pago] ([pago_id], [fecha], [monto], [metodopago], [venta_id]) VALUES (11, CAST(N'2024-10-15T00:00:00.000' AS DateTime), CAST(40.50 AS Decimal(10, 2)), N'Tarjeta de Débito', 11)
SET IDENTITY_INSERT [dbo].[pago] OFF
GO
SET IDENTITY_INSERT [dbo].[detalleventa_historial] ON 

INSERT [dbo].[detalleventa_historial] ([historial_id], [detalleventa_id], [fecha_modificacion], [operacion]) VALUES (4, 1, CAST(N'2024-01-05T00:00:00.000' AS DateTime), N'insertar')
INSERT [dbo].[detalleventa_historial] ([historial_id], [detalleventa_id], [fecha_modificacion], [operacion]) VALUES (5, 2, CAST(N'2024-01-10T00:00:00.000' AS DateTime), N'insertar')
INSERT [dbo].[detalleventa_historial] ([historial_id], [detalleventa_id], [fecha_modificacion], [operacion]) VALUES (6, 3, CAST(N'2024-01-15T00:00:00.000' AS DateTime), N'insertar')
INSERT [dbo].[detalleventa_historial] ([historial_id], [detalleventa_id], [fecha_modificacion], [operacion]) VALUES (7, 4, CAST(N'2024-01-20T00:00:00.000' AS DateTime), N'insertar')
INSERT [dbo].[detalleventa_historial] ([historial_id], [detalleventa_id], [fecha_modificacion], [operacion]) VALUES (8, 5, CAST(N'2024-01-25T00:00:00.000' AS DateTime), N'insertar')
INSERT [dbo].[detalleventa_historial] ([historial_id], [detalleventa_id], [fecha_modificacion], [operacion]) VALUES (9, 6, CAST(N'2024-01-30T00:00:00.000' AS DateTime), N'insertar')
INSERT [dbo].[detalleventa_historial] ([historial_id], [detalleventa_id], [fecha_modificacion], [operacion]) VALUES (10, 7, CAST(N'2024-02-05T00:00:00.000' AS DateTime), N'insertar')
INSERT [dbo].[detalleventa_historial] ([historial_id], [detalleventa_id], [fecha_modificacion], [operacion]) VALUES (11, 8, CAST(N'2024-02-10T00:00:00.000' AS DateTime), N'insertar')
INSERT [dbo].[detalleventa_historial] ([historial_id], [detalleventa_id], [fecha_modificacion], [operacion]) VALUES (12, 9, CAST(N'2024-02-15T00:00:00.000' AS DateTime), N'insertar')
INSERT [dbo].[detalleventa_historial] ([historial_id], [detalleventa_id], [fecha_modificacion], [operacion]) VALUES (13, 10, CAST(N'2024-02-20T00:00:00.000' AS DateTime), N'insertar')
INSERT [dbo].[detalleventa_historial] ([historial_id], [detalleventa_id], [fecha_modificacion], [operacion]) VALUES (14, 11, CAST(N'2024-02-25T00:00:00.000' AS DateTime), N'insertar')
SET IDENTITY_INSERT [dbo].[detalleventa_historial] OFF
GO
SET IDENTITY_INSERT [dbo].[detallepago] ON 

INSERT [dbo].[detallepago] ([detallepago_id], [comprobante], [pago_id]) VALUES (1, N'Boleta', 1)
INSERT [dbo].[detallepago] ([detallepago_id], [comprobante], [pago_id]) VALUES (2, N'Factura', 2)
INSERT [dbo].[detallepago] ([detallepago_id], [comprobante], [pago_id]) VALUES (3, N'Boleta', 3)
INSERT [dbo].[detallepago] ([detallepago_id], [comprobante], [pago_id]) VALUES (4, N'Factura', 4)
INSERT [dbo].[detallepago] ([detallepago_id], [comprobante], [pago_id]) VALUES (5, N'Boleta', 5)
INSERT [dbo].[detallepago] ([detallepago_id], [comprobante], [pago_id]) VALUES (6, N'Factura', 6)
INSERT [dbo].[detallepago] ([detallepago_id], [comprobante], [pago_id]) VALUES (7, N'Boleta', 7)
INSERT [dbo].[detallepago] ([detallepago_id], [comprobante], [pago_id]) VALUES (8, N'Factura', 8)
INSERT [dbo].[detallepago] ([detallepago_id], [comprobante], [pago_id]) VALUES (9, N'Boleta', 9)
INSERT [dbo].[detallepago] ([detallepago_id], [comprobante], [pago_id]) VALUES (10, N'Factura', 10)
INSERT [dbo].[detallepago] ([detallepago_id], [comprobante], [pago_id]) VALUES (11, N'Boleta', 11)
SET IDENTITY_INSERT [dbo].[detallepago] OFF
GO
