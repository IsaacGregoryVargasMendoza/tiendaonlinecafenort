USE tiendacafenort;
SELECT * FROM comprobantes;
INSERT INTO comprobantes(nombreComprobante,estadoComprobante) VALUE('TICKET',TRUE);
INSERT INTO comprobantes(nombreComprobante,estadoComprobante) VALUE('BOLETA',TRUE);
INSERT INTO comprobantes(nombreComprobante,estadoComprobante) VALUE('FACTURA',TRUE);

SELECT * FROM clientes;
INSERT INTO clientes(dniCliente,nombreCliente,direccionCliente,celularCliente,correoCliente,estadoCliente) VALUE('70294583','Isaac Gregory Vargas Mendoza','La Esperanza','974632523','isaac@gmail.com',TRUE);
INSERT INTO clientes(dniCliente,nombreCliente,direccionCliente,celularCliente,correoCliente,estadoCliente) VALUE('12345678','Manuel Asto Lazaro','El Milagro','963258741','manuel@gmail.com',TRUE);
INSERT INTO clientes(dniCliente,nombreCliente,direccionCliente,celularCliente,correoCliente,estadoCliente) VALUE('98765432','Gustavo Otiniano Reyes','EL Valle','987456321','gustavo@gmail.com',TRUE);

SELECT * FROM tipo_productos;
INSERT INTO tipo_productos(descripcionTipoProducto,estadoTipoProducto)value('Materia Prima',TRUE);
INSERT INTO tipo_productos(descripcionTipoProducto,estadoTipoProducto)value('Envases',TRUE);
INSERT INTO tipo_productos(descripcionTipoProducto,estadoTipoProducto)value('Congelados',TRUE);
INSERT INTO tipo_productos(descripcionTipoProducto,estadoTipoProducto)value('Panaderia',TRUE);
INSERT INTO tipo_productos(descripcionTipoProducto,estadoTipoProducto)value('Limpieza',TRUE);

SELECT * FROM productos;
INSERT INTO productos(nombreProducto,descripcionProducto,stockProducto,precioProducto,unidadMedida,imagenProducto,idTIpoProducto,visibleProducto,estadoProducto,descuentoProducto)
VALUE('Taper Pollo','',10,173.00,'Unidad','',1,TRUE,TRUE,0);
INSERT INTO productos(nombreProducto,descripcionProducto,stockProducto,precioProducto,unidadMedida,imagenProducto,idTIpoProducto,visibleProducto,estadoProducto,descuentoProducto)
VALUE('Taper Pavo','',12,292.00,'Unidad','',1,TRUE,TRUE,0);
INSERT INTO productos(nombreProducto,descripcionProducto,stockProducto,precioProducto,unidadMedida,imagenProducto,idTIpoProducto,visibleProducto,estadoProducto,descuentoProducto)
VALUE('Taper Chicharron','',5,305.00,'Unidad','',1,TRUE,TRUE,0);
INSERT INTO productos(nombreProducto,descripcionProducto,stockProducto,precioProducto,unidadMedida,imagenProducto,idTIpoProducto,visibleProducto,estadoProducto,descuentoProducto)
VALUE('Pan de Hot Dog','',256,0.80,'Unidad','',4,TRUE,TRUE,0);
INSERT INTO productos(nombreProducto,descripcionProducto,stockProducto,precioProducto,unidadMedida,imagenProducto,idTIpoProducto,visibleProducto,estadoProducto,descuentoProducto)
VALUE('Pan Pullman','',8,12.50,'Unidad','',4,TRUE,TRUE,0);

DROP PROCEDURE sp_generar_codigo
delimiter //
CREATE PROCEDURE sp_generar_codigo()
BEGIN
	declare contador INT;
	declare p_codigo_secundario VARCHAR(7);
	SET contador = (SELECT COUNT(*)+1 FROM productos); 
	if(contador<10) then
		SET p_codigo_secundario= CONCAT('PRO000',contador);
		ELSE IF(contador<100) THEN
			SET p_codigo_secundario= CONCAT('PRO00',contador);
			ELSE IF(contador<1000)THEN
				SET p_codigo_secundario= CONCAT('PRO0',contador);
				ELSE IF(contador<10000)THEN
					SET p_codigo_secundario= CONCAT('PRO0',contador);
				END if;
			END if;
		END if;
	END if;
	SELECT p_codigo_secundario AS 'codigo';
END
//

DELIMITER @@

CREATE PROCEDURE SP_INSERTAR_SERVICIO(
    IN PARAM_COTIZACION_ID INT,
    IN PARAM_STATUS_ADVISOR_ID INT,
    IN PARAM_STATUS_CLIENTE_ID INT,
    IN PARAM_SERVICIO_FECHA_INICIO DATE,
    IN PARAM_SERVICIO_FECHA_FIN DATE,
    IN PARAM_SERVICIO_NUMERO_SI VARCHAR(30)
)
BEGIN
	INSERT INTO SERVICIOS (
    COTIZACION_ID,
    STATUS_ADVISOR_ID,
    STATUS_CLIENTE_ID,
    SERVICIO_FECHA_INICIO,
    SERVICIO_FECHA_FIN,
    SERVICIO_NUMERO_SI,
    SERVICIO_ESTADO_REGISTRO) VALUES 
    (
	PARAM_COTIZACION_ID,
    PARAM_STATUS_ADVISOR_ID,
    PARAM_STATUS_CLIENTE_ID,
    PARAM_SERVICIO_FECHA_INICIO,
    PARAM_SERVICIO_FECHA_FIN,
    PARAM_SERVICIO_NUMERO_SI,
    'A');
    SET @PARAM_SERVICIO_ID = LAST_INSERT_ID();
    SELECT @PARAM_SERVICIO_ID AS 'id';
END @@

DELIMITER ;

delimiter //
create procedure mostrar()
begin
   SELECT * from productos;
end
//

DROP PROCEDURE mostrarultimo
delimiter //
create procedure mostrarultimo(OUT p_ultimo VARCHAR(2))
BEGIN
	DECLARE contador INT;
   SET contador = (SELECT COUNT(*)+1 FROM productos);
   SET p_ultimo = CONCAT('PRO',contador);
end
//

CALL sp_generar_codigo;
(@hola);
SELECT @hola;


USE TIENDACAFENORT
SELECT * FROM productos
SELECT * FROM tipo_productos

UPDATE tipo_productos FROM  estadoTipoProducto

SELECT * FROM carritos;
SELECT * FROM ventas;
SELECT * FROM clientes;
SELECT * FROM producto_ventas;
SELECT * FROM comprobantes;