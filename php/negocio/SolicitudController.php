<?php 

    class SolicitudController{
        function obtenerSolicitud($numeroSolicitud){
            $solicitudDao = new SolicitudDao;
            $productosSolicitudBitrix = $solicitudDao ->obtenerSolicitudBitrix($numeroSolicitud);
            $solicitudNormalizadaObtenida = $this ->datosSolicitudNormalizados($productosSolicitudBitrix['result']);
            
            if($solicitudNormalizadaObtenida->numeroSolicitud == $numeroSolicitud){
              return $solicitudNormalizadaObtenida; 
            }
            elseif($solicitudNormalizadaObtenida->numeroSolicitud == null){
                header("Location: index.php?respuestaSolicitud=null");
               
            }
        }  
      
        private function datosSolicitudNormalizados($productosSolicitud){
            $listaProductos=array();

            foreach($productosSolicitud as $itemProducto){
                $numeroSolicitud =  $itemProducto['OWNER_ID'];
                $producto = new Producto(
                    $itemProducto['PRODUCT_NAME'],
                    $itemProducto['QUANTITY']
                );
                $listaProductos[] = $producto;
            }
            return new Solicitud($numeroSolicitud,$listaProductos);
        }
    }
?>