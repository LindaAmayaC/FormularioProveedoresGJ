<?php

include_once "php/negocio/Formulario.php";
include_once "php/negocio/FormularioController.php";
include_once "php/dao/FormularioDao.php";
include_once "php/negocio/SolicitudController.php";
include_once "php/negocio/Solicitud.php";
include_once "php/negocio/Producto.php";
include_once "php/dao/SolicitudDao.php";


if(!isset($_POST['numeroSolicitud'])){
    header("Location: index.php"); 
}

$numeroSolicitud = $_POST['numeroSolicitud'];  
$solicitudController = new SolicitudController;
$solicitudObtenida = $solicitudController->obtenerSolicitud($numeroSolicitud);
$contador = count($solicitudObtenida->productos);


?> 
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Solicitudes</title>

    <link href="assets/css/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="alertifyjs/alertify.js"></script>
    <link rel="stylesheet" type="text/css" href="alertifyjs/css/alertify.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
    
    <header></header>
    <div class="logo">
        <img src="assets/imagenes/LogoGj.jpeg">
    </div>
    <section class="containerGeneral">
    
		<h1> Solicitud <?php echo $numeroSolicitud;  ?></h1>
        <main>
            <section class="containerAllForm">
                <p class="title"> Diligencie el siguiente formulario para presentar su oferta laboral.</p>
                <div class="container-form">
                    <form id="formulario" method="POST" action="php/presentacion/DatosFormulario.php">
                        <input type="hidden" name="numeroSolicitud" value="<?php echo $numeroSolicitud;  ?>"></input>
                        <div>
                            <label for="pwd">Nombre de proveedor</label>
                            <input name="nombre_proveedor" class="inputbtn " id="nombre_proveedor" type="text" Required ></input>
                        </div>
                        <div class="condPago">
                            <label for="pwd">Condiciones de pago</label>
                            <input name="cond_Pago" class="inputbtn" id="cond_Pago" type="text" Required ></input>
                        </div>
                        <div class="tiempoEntrega">
                            <label for="pwd">Tiempo  de  entrega</label>
                            <input name="tiempoEntrega" class="inputbtn" id="tiempoEntrega" type="number" placeholder="Días" Required ></input>
                        </div>
                        <div class="tiempoEntrega">
                            <label for="pwd">Beneficios adicionales</label>
                            <input name="beneficioAdd" class="inputbtn" id="beneficiosAdd" type="text"  Required ></input>
                        </div>
                        <div class="tiempoEntrega">
                            <label for="pwd">Vigencia de cotización</label>
                            <input name="vigenciaCotizacion" class="inputbtn" id="vigenciaCotizacion" type="number" placeholder="Días" Required ></input>
                        </div>
                        <div class="productos">
                            <label for="pwd-prod">Productos</label>
                        </div>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-2" style="background-color:#bce7fd; ">Nombre</div>
                                <div class="col-sm-1" style="background-color:#bce7fd; ">Cantidad</div>
                                <div class="col-sm-1" style="background-color:#bce7fd;">Valor unitario</div>
                                <div class="col-sm-1" style="background-color:#bce7fd;">IVA</div>
                                <div class="col-sm-2" style="background-color:#bce7fd;">Valor total</div>
                                <div class="col-sm-1" style="background-color:#bce7fd;">Tiempo de garantía</div>
                                <div class="col-sm-2" style="background-color:#bce7fd;">Condición de garantía</div>
                                <div class="col-sm-2" style="background-color:#bce7fd;">Observaciones</div>
                                <?php for ($i=0; $i < $contador; $i++) {?>
                                    <input name="nombre_producto[]" id="nombre_producto"  class="col-sm-2 inputList nombre_producto"        style="background-color:#f8f9fa;" value="<?php echo $solicitudObtenida->productos[$i]->nombreProducto ?>" readonly></input>
                                    <input name="cant_producto[]"   id="cant_producto"    class="col-sm-1 inputList cant_producto numeric"  style="background-color:#f8f9fa;" value="<?php echo $solicitudObtenida->productos[$i]->cantidadProducto ?>" readonly></input>
                                    <input name="valor_producto[]"  id="valor_producto"   class="col-sm-1 inputList valor_producto numeric"  type="number" Required ></input>
                                    <input name="iva_producto[]"    id="iva_producto"     class="col-sm-1 inputList iva_producto numeric"    type="number" Required ></input>
                                    <input name="total_producto[]"  id="total_producto"   class="col-sm-2 inputList total_producto numeric"  type="number" Required ></input>
                                    <input name="tiempoGarantia[]"  id="tiempoGarantia"   class="col-sm-1 inputList tiempoGarantia numeric"  type="number" Required placeholder="Días"></input>
                                    <input name="condGarantia[]"    id="condGarantia"     class="col-sm-2 inputList condGarantia numeric"    type="text"   Required ></input>
                                    <input name="observacion[]"     id="observacion"      class="col-sm-2 inputList observacion numeric"     type="text"   ></input>
                                <?php }?>
                            </div>
                            <div class="btnAgregarProducto"> 
                            <button type="button" class="btn btn-outline-primary" id="btnAgregarProducto" onclick="accionBtnAggProducto()">Agregar Producto</button>
                            </div>
                        </div>
                        <div class="observacionesGenerales">
                            <label for="observacionesGenerales">Observaciones generales de la propuesta: </label>
                            <textarea id="observacionesGenerales" name="observacionesGenerales" rows="6"></textarea>
                        </div>
                        <button type="submit" class="btnEnviar"> Enviar</button>
                    </form>
                </div>
            </section>
        </main>
    </section>
    <script src="js/app.js"></script>
  
</body>
</html>