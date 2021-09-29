<?php
session_start();
include('../modelo/Pedido.php');
$pedido = new Pedido();
$fecha_1= $_POST['fecha_1'];
$fecha_2= $_POST['fecha_2'];
include('../vista/templateFechaPedido.php');