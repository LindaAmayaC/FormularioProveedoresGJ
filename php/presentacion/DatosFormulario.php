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
    $ivaProducto = $_POST['iva_producto']; 
    $totalesProducto = $_POST['total_producto'];
    $condicionGarantia =$_POST['condGarantia'];
    $beneficioAdicional =$_POST['beneficioAdd'];
    $vigenciaCotizacion=$_POST['vigenciaCotizacion'];
    $tiempoGarantia = $_POST['tiempoGarantia'];
    $observacionesGenerales =$_POST['observacionesGenerales'];
    $nitProveedor=$_POST['nit'];
    
    print_r($valoresProducto);
    print_r($condicionPago);
    print_r($ivaProducto);
    print_r(count($valoresProducto));
    

    $datosFormulario=array(
        $numeroSolicitud,$nombreProveedor,$nombresProducto,
        $cantidadesProducto,$valoresProducto,$condicionPago,
        $tiempoEntrega,$ivaProducto,$totalesProducto, $tiempoGarantia,$condicionGarantia,
        $beneficioAdicional,$vigenciaCotizacion,$observacionesGenerales,$nitProveedor
    );


    /* $formcontroller = new FormularioController;
    $formEnviado = $formcontroller -> enviarFormulario($datosFormulario);

    
    header("Location:    ../../index.php?respuesta=$formEnviado");   */
?>  