<?php 
include_once 'php/dao/conexion/crest.php';

class SolicitudDao{
    

  function obtenerSolicitudBitrix($numeroSolicitud){

        if(CRest::call('crm.deal.get',['id' => $numeroSolicitud])==true){
          $datosSolicitudBitrix = CRest::call('crm.deal.productrows.get',['id' => $numeroSolicitud]);
        }else{
            return false;
        }
      return $datosSolicitudBitrix;  
  }
    
}
?>