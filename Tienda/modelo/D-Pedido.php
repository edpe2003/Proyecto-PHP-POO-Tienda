<?php
class Detalle_Pedido{
    public $id;
    public $id_pedido;
    public $producto;
    public $cantidad;
    public $precio_unitario;

    public function __construct(){
        $this->id;
        $this->id_pedido;
        $this->producto;
        $this->cantidad;
        $this->precio_unitario;
    }

    public function get_subTotal($cantidad,$precio_unitario){
        $this->cantidad=$cantidad;
        $this->precio_unitario=$precio_unitario;
        return $cantidad * $precio_unitario;
    }

    public function insertarDetallesPedido($id,$producto,$cantidad,$precio_unitario){
        $this->id_pedido=$id;
        $this->producto=$producto;
        $this->cantidad=$cantidad;
        $this->precio_unitario=$precio_unitario;
        $cn=new Conexion();
        $cn->getConexion();
        $insertarPedido='INSERT INTO detalle_pedido(id_pedido,producto,cantidad,precio_unitario) VALUES (?,?,?,?)';
        $query=$cn->prepare($insertarPedido);
        $query->execute([
            $this->id_pedido, $this->producto, $this->cantidad, $this->precio_unitario
        ]);
    }

    public function verDetallePedido($id){
        $this->id_pedido=$id;
        $cn=new Conexion();
        $cn->getConexion();
        $verDetallePedido="SELECT producto,cantidad,precio_unitario FROM detalle_pedido WHERE id_pedido='$id'";
        foreach ($cn->query($verDetallePedido) as $row) {
            echo '<table>';
            echo '<div class="row mt-4">';
            echo '<div class="col">' . 'Producto: ' . '</div>';
            echo '<div class="col">' . $row['producto'] . '</div>';
            echo '</div>';
            echo '<div class="row">';
            echo '<div class="col">' . 'Cantidad: ' . '</div>';
            echo '<div class="col">' . $row['cantidad'] . '</div>';
            echo '</div>';
            echo '<div class="row" style="border-bottom: 1px solid black;">';
            echo '<div class="col">' . 'Precio Unitario: ' . '</div>';
            echo '<div class="col">' . $row['precio_unitario'] . '</div>';
            echo '</div>';
            echo '</table>';
        }
    }
    
} 