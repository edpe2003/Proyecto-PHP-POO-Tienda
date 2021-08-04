<?php
include('../modelo/pedido.php');
$pedido=new Pedido();
$detalle_pedido=new Detalle_Pedido();
$nombre= $_POST['Nombre'];
$id=$pedido->insertarPedido($nombre);

if(isset($_POST['cantidad1']) && $_POST['cantidad1']>0){
    $producto="Ensalada primavera con salsa cesar";
    $cantidad= $_POST['cantidad1'];
    $precio_unitario=50;
    $pedido->monto_total=$pedido->calcularMonto($cantidad,$precio_unitario);
    $detalle_pedido->insertarDetallesPedido($id,$producto,$cantidad,$precio_unitario);
}

if(isset($_POST['cantidad2']) && $_POST['cantidad2']>0){
    $producto="Fideos al pesto";
    $cantidad= $_POST['cantidad2'];
    $precio_unitario=100;
    $pedido->monto_total=$pedido->calcularMonto($cantidad,$precio_unitario);
    $detalle_pedido->insertarDetallesPedido($id,$producto,$cantidad,$precio_unitario);
}

if(isset($_POST['cantidad3']) && $_POST['cantidad3']>0){
    $producto="Bistec a la parrilla";
    $cantidad= $_POST['cantidad3'];
    $precio_unitario=150;
    $pedido->monto_total=$pedido->calcularMonto($cantidad,$precio_unitario);
    $detalle_pedido->insertarDetallesPedido($id,$producto,$cantidad,$precio_unitario);
}

if(isset($_POST['cantidad4']) && $_POST['cantidad4']>0){
    $producto="Sordentino";
    $cantidad= $_POST['cantidad4'];
    $precio_unitario=200;
    $pedido->monto_total=$pedido->calcularMonto($cantidad,$precio_unitario);
    $detalle_pedido->insertarDetallesPedido($id,$producto,$cantidad,$precio_unitario);
}

$pedido->modificarMontoTotal($pedido->monto_total,$id);
