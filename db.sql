create schema ejercicio_web;

use ejercicio_web;

create table detalle_pedido(
id_pedido int,
producto varchar(100),
cantidad int,
precio_unitario double
);

create table pedido(
id_pedido int auto_increment key,
cliente varchar(20),
fecha date,
id_vendedor int,
monto_total double
);
