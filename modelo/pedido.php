<?php
include('D-Pedido.php');
include('conexion.php');
class Pedido{
    public $id_pedido;
    public $cliente;
    public $fecha;
    public $id_vendedor=1;
    public $monto_total;

    public function __construct(){
        $this->id_pedido;
        $this->cliente = " ";
        $this->fecha = date("Y-m-d H:i:s");
        $this->id_vendedor = 1;
        $this->monto_total=0;
    }

    public function calcularMonto($cantidad,$precio_unitario){
        $pedido=new Detalle_Pedido();
        $producto=$pedido->get_subTotal($cantidad,$precio_unitario);
        $this->monto_total+=$producto;
        $this->monto_total;
        return $this->monto_total;
    }

    public function cantidadVentas($id_vendedor){
        $this->id_vendedor=$id_vendedor;
        $cn=new Conexion();
        $cantidadVentas="SELECT id_vendedor FROM pedido WHERE id_vendedor='$this->id_vendedor'";
        $cant=0;
        foreach ($cn->query($cantidadVentas) as $row) {
            $cant+=1;
        }
        return $cant;
    }

    public function insertarPedido($cliente){
        $this->cliente=$cliente;
        $cn=new Conexion();
        $cn->getConexion();
        $insertarPedido='INSERT INTO pedido(cliente,fecha,id_vendedor,monto_total) VALUES (?,?,?,?)';
        $query=$cn->prepare($insertarPedido);
        $query->execute([
            $this->cliente, $this->fecha, $this->id_vendedor, $this->monto_total
        ]);
        return $cn->lastInsertId();
    }
    
    public function modificarMontoTotal($monto_total,$id){
        $this->monto_total=$monto_total;
        $cn=new Conexion();
        $cn->getConexion();
        $modificarMontoTotal='UPDATE pedido SET monto_total=? WHERE id_pedido=?';
        $query=$cn->prepare($modificarMontoTotal);
        $query->execute([
            $this->monto_total,$id
        ]);
    }

    public function VerListaPedido($fecha_inicial,$fecha_final){
        $cn=new Conexion();
        $cn->getConexion();
        $VerListaPedido="SELECT cliente,fecha,monto_total 
        FROM pedido 
        WHERE fecha >='$fecha_inicial' AND fecha <='$fecha_final'";
        foreach ($cn->query($VerListaPedido) as $row) {
            echo '<table>';
            echo '<div class="row mt-4">';
            echo '<div class="col">' . 'Cliente: ' . '</div>';
            echo '<div class="col">' . $row['cliente'] . '</div>';
            echo '</div>';
            echo '<div class="row">';
            echo '<div class="col">' . 'Fecha: ' . '</div>';
            echo '<div class="col">' . $row['fecha'] . '</div>';
            echo '</div>';
            echo '<div class="row" style="border-bottom: 1px solid black;">';
            echo '<div class="col">' . 'Monto Total: ' . '</div>';
            echo '<div class="col">' . $row['monto_total'] . '</div>';
            echo '</div>';
            echo '</table>';
        }
    }

}