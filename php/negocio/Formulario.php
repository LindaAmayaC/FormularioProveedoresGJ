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
    public $tiempoEntrega;
    public $ivaProducto; 
    public $totalProducto;
    public $tiempoGarantia;
    public $condicionGarantia;
    public $beneficioAdicional;
    public $vigenciaCotizacion;
    public $observacionProducto;
    public $observacionesGenerales;

    function __construct($numeroSolicitud, $nombreProveedor, $nombreProducto, $cantidadProducto, 
                        $valorProducto, $condicionPago,$tiempoEntrega,$ivaProducto, $totalProducto,
                        $tiempoGarantia,$condicionGarantia,$beneficioAdicional,$vigenciaCotizacion,
                        $observacionProducto,$observacionesGenerales)
    {
        $this->numeroSolicitud     =$numeroSolicitud;
        $this->nombreProveedor     =$nombreProveedor;
        $this->nombreProducto      =$nombreProducto;
        $this->cantidadProducto    =$cantidadProducto;
        $this->valorProducto       =$valorProducto;
        $this->condicionPago       =$condicionPago;
        $this->tiempoEntrega       =$tiempoEntrega;
        $this->ivaProducto         =$ivaProducto; 
        $this->totalProducto       =$totalProducto; 
        $this->tiempoGarantia      =$tiempoGarantia;
        $this->condicionGarantia   =$condicionGarantia;
        $this->beneficioAdicional  =$beneficioAdicional;
        $this->vigenciaCotizacion  =$vigenciaCotizacion;
        $this->observacionProducto =$observacionProducto;
        $this->observacionesGenerales =$observacionesGenerales;
    }
}
