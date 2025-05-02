<?php
require_once "./modelos/inventario.modelo.php";
class ControladorInventario{
    static public function ctrInventario(){

        if(isset($_POST["nombreProducto"])){

            $tabla= "inventario";

            $datos= array(
                "nombreProducto" => $_POST["nombreProducto"],
                "cantidadProducto" => $_POST["cantidadProducto"],
                "precioProducto" => $_POST["precioProducto"],

            );
            $respuesta = ModeloInventario::mdlInventario($tabla, $datos);

            return $respuesta;
        }
    }
}