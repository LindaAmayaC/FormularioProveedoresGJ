<?php 
include_once 'conexion/crest.php';

class FormularioDao{
    

    
    function formularioEnviadoABitrix($listadoFormularios){
       
        $formularioEnviado = CRest::call('crm.item.add',$this->formNormalizadoABitrix($listadoFormularios));  
        return $formularioEnviado; 
    }
    
    function formNormalizadoABitrix($listadoFormularios){
        $nombresProductos=array();
        $cantidadesProductos=array();
        $valoresProductos=array();
        $nombreProveedor = $listadoFormularios[0]->nombreProveedor;
        $condicionPago = $listadoFormularios[0]->condicionPago;
        $numeroSolicitud= $listadoFormularios[0]->numeroSolicitud;
        $ivaProductos=array();
        $tiempoEntrega = $listadoFormularios[0]->tiempoEntrega;
        $totalProductos=array();
        $tiempoGarantia = array();
        $condicionGarantia = array();
        $beneficioAdicional = $listadoFormularios[0]->beneficioAdicional;
        $vigenciaCotizacion= $listadoFormularios[0]->vigenciaCotizacion;
        $observacionProducto=array();
        $observacionesGenerales=$listadoFormularios[0]->observacionesGenerales;

        for ($i = 0 ; $i < count($listadoFormularios); $i++){
            $nombresProductos[] = $listadoFormularios [$i]->nombreProducto;
            $cantidadesProductos[] = $listadoFormularios[$i]->cantidadProducto;
            $valoresProductos[]= $listadoFormularios[$i]->valorProducto;
            $ivaProductos[]=$listadoFormularios[$i] ->ivaProducto;
            $totalProductos[]=$listadoFormularios[$i]->totalProducto;
            $tiempoGarantia[] = $listadoFormularios[$i]->tiempoGarantia;
            $condicionGarantia[] = $listadoFormularios[$i]->condicionGarantia;
            $observacionProducto[]=$listadoFormularios[$i]->observacionProducto;
        }
        

        $datosBitrix =[
            "entityTypeId" => 180,
            "fields" => [
                "title" => $numeroSolicitud,
                "ufCrm40_1640695319564" => $nombresProductos, //aqui van los nombres de los productos 
                "ufCrm40_1640695367517" => $cantidadesProductos, //aqui van los cantidad de los productos 
                "ufCrm40_1640695391503" => $valoresProductos, //aqui van los valores de los productos 
                "ufCrm40_1640695479748" => $nombreProveedor, //aqui va nombre proveedor
                "ufCrm40_1640695541215" => $condicionPago,
                "ufCrm40_1643766553076" => $tiempoEntrega,
                "ufCrm40_1644008103002" => $ivaProductos,
                "ufCrm40_1644008144416" => $totalProductos,
                "ufCrm40_1644270754431" => $tiempoGarantia,
                "ufCrm40_1644257883019" => $condicionGarantia,
                "ufCrm40_1644260512042" => $beneficioAdicional,
                "ufCrm40_1644260485675" => $vigenciaCotizacion,
                "ufCrm40_1644447622291" => $observacionProducto,
                "ufCrm40_1644447649383" => $observacionesGenerales
            ]

        ];
        
        return $datosBitrix;
    } 
}
?>
