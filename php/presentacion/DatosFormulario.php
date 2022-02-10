<?php
    include_once "../negocio/Formulario.php";
    include_once "../negocio/FormularioController.php";
    include_once "../dao/FormularioDao.php";
    

    $numeroSolicitud = $_POST['num_solicitud']; 
    $nombreProveedor = $_POST['nombre_proveedor'];
    $nombresProducto = $_POST['nombre_producto'];  
    $cantidadesProducto = $_POST['cant_producto'];
    $valoresProducto = $_POST['valor_producto']; 
    $condicionPago = $_POST['cond_Pago'];


    $datosFormulario=array(
        $numeroSolicitud,$nombreProveedor,$nombresProducto,
        $cantidadesProducto,$valoresProducto,$condicionPago
    );
    
 
    $formcontroller = new FormularioController;
    $formEnviado = $formcontroller -> enviarFormulario($datosFormulario);
    
    header("Location: ../../index.php?respuesta=$formEnviado");
?>  