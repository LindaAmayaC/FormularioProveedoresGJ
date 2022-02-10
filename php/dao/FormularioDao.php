<?php 
include_once 'conexion/crest.php';

class FormularioDao{
    
   

    function formularioEnviadoABitrix($listadoFormularios){
       
     /*   
        $formularioEnviado = CRest::call('crm.item.add',$this->formNormalizadoABitrix($listadoFormularios));  

        return $formularioEnviado; */
        return true;
        
    }
    
    function formNormalizadoABitrix($listadoFormularios){
        $nombresProductos=array();
        $cantidadesProductos=array();
        $valoresProductos=array();
        $nombreProveedor = $listadoFormularios[0]->nombreProveedor;
        $condicionPago = $listadoFormularios[0]->condicionPago;
        $numeroSolicitud= $listadoFormularios[0]->numeroSolicitud;

        for ($i = 0 ; $i < count($listadoFormularios); $i++){
            $nombresProductos[] = $listadoFormularios [$i]->nombreProducto;
            $cantidadesProductos[] = $listadoFormularios[$i]->cantidadProducto;
            $valoresProductos[]= $listadoFormularios[$i]->valorProducto;
        }
        

        $datosBitrix =[
            "entityTypeId" => 180,
            "fields" => [
                "title" => $numeroSolicitud,
                "ufCrm40_1640695319564" => $nombresProductos, //aqui van los nombres de los productos 
                "ufCrm40_1640695367517" => $cantidadesProductos, //aqui van los cantidad de los productos 
                "ufCrm40_1640695391503" => $valoresProductos, //aqui van los valores de los productos 
                "ufCrm40_1640695479748" => $nombreProveedor, //aqui va nombre proveedor
                "ufCrm40_1640695541215" => $condicionPago


            ]

        ];
        
        return $datosBitrix;
    }
}
?>