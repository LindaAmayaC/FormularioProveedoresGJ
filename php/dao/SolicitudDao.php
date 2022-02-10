<?php 
include_once 'php/dao/conexion/crest.php';

class SolicitudDao{
    

   function obtenerSolicitudBitrix($numeroSolicitud){
       $datosSolicitudBitrix = CRest::call('crm.deal.productrows.get',['id' => $numeroSolicitud]);
       return $datosSolicitudBitrix;  
   }
    
}
?>