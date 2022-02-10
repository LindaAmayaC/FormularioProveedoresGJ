<?php
    include_once "../negocio/Formulario.php";
    include_once "../negocio/FormularioController.php";
    include_once "../dao/FormularioDao.php";
    include_once "../negocio/SolicitudController.php";
    include_once "../negocio/Solicitud.php";
    include_once "../negocio/Producto.php";
    

    $numeroSolicitud = $_POST["numeroSolicitud"]; 
    $nombreProveedor = $_POST['nombre_proveedor'];
    $nombresProducto = $_POST['nombre_producto'];  
    $cantidadesProducto = $_POST['cant_producto'];
    $valoresProducto = $_POST['valor_producto']; 
    $condicionPago = $_POST['cond_Pago'];
    $tiempoEntrega =  $_POST['tiempoEntrega'];
    $ivasProducto = $_POST['iva_producto']; 
    $totalesProducto = $_POST['total_producto'];
    $condicionesGarantia =$_POST['condGarantia'];
    $beneficioAdicional =$_POST['beneficioAdd'];
    $vigenciaCotizacion=$_POST['vigenciaCotizacion'];
    $tiemposGarantia = $_POST['tiempoGarantia'];
    $observacionesProducto =$_POST['observacion'];
    $observacionesGenerales =$_POST['observacionesGenerales'];
  
    $datosFormulario=array(
        $numeroSolicitud,$nombreProveedor,$nombresProducto,
        $cantidadesProducto,$valoresProducto,$condicionPago,
        $tiempoEntrega,$ivasProducto,$totalesProducto, $tiemposGarantia,$condicionesGarantia,
        $beneficioAdicional,$vigenciaCotizacion,$observacionesProducto,$observacionesGenerales
    );
  
   
    $formcontroller = new FormularioController;
    $formEnviado = $formcontroller -> enviarFormulario($datosFormulario);
  
    
    header("Location:    ../../index.php?respuesta=$formEnviado");  
?>  