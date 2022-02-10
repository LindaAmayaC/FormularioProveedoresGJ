<?php
//interfaz que solicita los datos que se van a usar 
class Formulario
{
    public $numeroSolicitud;
    public $nombreProveedor;
    public $nombreProducto;
    public $cantidadProducto;
    public $valorProducto;
    public $condicionPago; 

    function __construct($numeroSolicitud, $nombreProveedor, $nombreProducto, $cantidadProducto, $valorProducto, $condicionPago)
    {
        $this->numeroSolicitud = $numeroSolicitud;
        $this->nombreProveedor = $nombreProveedor;
        $this->nombreProducto = $nombreProducto;
        $this->cantidadProducto = $cantidadProducto;
        $this->valorProducto = $valorProducto;
        $this->condicionPago = $condicionPago;
    }
}
