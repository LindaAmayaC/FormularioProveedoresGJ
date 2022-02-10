<?php

    class Producto{
        public $nombreProducto;
        public $cantidadProducto;


        function __construct($nombreProducto,$cantidadProducto){
            $this -> nombreProducto = $nombreProducto;
            $this -> cantidadProducto = $cantidadProducto;

        }
    }
?>