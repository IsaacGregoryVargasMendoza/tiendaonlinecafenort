USE tiendacafenort
SELECT * FROM tipo_productos;
INSERT INTO tipo_productos(descripcionTipoProducto,estadoTipoProducto)value('Materia Prima',TRUE);
INSERT INTO tipo_productos(descripcionTipoProducto,estadoTipoProducto)value('Envases',TRUE);
INSERT INTO tipo_productos(descripcionTipoProducto,estadoTipoProducto)value('Congelados',TRUE);
INSERT INTO tipo_productos(descripcionTipoProducto,estadoTipoProducto)value('Panaderia',TRUE);
INSERT INTO tipo_productos(descripcionTipoProducto,estadoTipoProducto)value('Limpieza',TRUE);

SELECT * FROM productos;
INSERT INTO productos(nombreProducto,stockProducto,precioProducto,unidadMedida,imagenProducto,idTIpoProducto,visibleProducto,estadoProducto)
VALUE('Taper Pollo',10,173.00,'Unidad','',1,TRUE,TRUE);
INSERT INTO productos(nombreProducto,stockProducto,precioProducto,unidadMedida,imagenProducto,idTIpoProducto,visibleProducto,estadoProducto)
VALUE('Taper Pavo',12,292.00,'Unidad','',1,TRUE,TRUE);
INSERT INTO productos(nombreProducto,stockProducto,precioProducto,unidadMedida,imagenProducto,idTIpoProducto,visibleProducto,estadoProducto)
VALUE('Taper Chicharron',5,305.00,'Unidad','',1,TRUE,TRUE);
INSERT INTO productos(nombreProducto,stockProducto,precioProducto,unidadMedida,imagenProducto,idTIpoProducto,visibleProducto,estadoProducto)
VALUE('Pan de Hot Dog',256,0.80,'Unidad','',4,TRUE,TRUE);
INSERT INTO productos(nombreProducto,stockProducto,precioProducto,unidadMedida,imagenProducto,idTIpoProducto,visibleProducto,estadoProducto)
VALUE('Pan Pullman',8,12.50,'Unidad','',4,TRUE,TRUE);