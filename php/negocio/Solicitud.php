<?php
//interfaz que solicita los datos que se van a usar 
class Solicitud
{
    public $numeroSolicitud;
    public $productos;
   

    function __construct($numeroSolicitud,$productos = [])
    {
        $this->numeroSolicitud = $numeroSolicitud;
        $this->productos = $productos;
    }
       
}
