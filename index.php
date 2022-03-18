<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Solicitudes</title>

    <link href="assets/css/style.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="alertifyjs/alertify.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="alertifyjs/css/alertify.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>
<body>
    <header></header>
    <div class="logo">
        <img src="assets/imagenes/LogoGj.jpeg">
    </div>
    <section class="cd-intro">
		<h1> Propuesta de Proveedores </h1>
        <main>
            <div class="buscador">
                <form id="formularioIndex" method="POST" action="formulario.php">
                    <div id="cajaSolicitud">
                        <label for="pwd">Número de Solicitud</label>
                        <input name="numeroSolicitud" class="inputbtn " id="numeroSolicitud" type="text" Required placeholder="Ingrese número" ></input>
                    </div>
                    <div>
                        <button type="submit" class="btnEnviar"> Enviar</button>
                    </div>
                </form>
            </div>
        </main>
    </section>

<?php
    if(isset($_GET["respuestaSolicitud"]) && $_GET["respuestaSolicitud"]=="null"):?>
        <script> alertify.error("Solicitud no Encontrada.");</script>
<?php endif;?> 

<?php
    if(isset($_GET["respuesta"]) && $_GET["respuesta"]==true):?>
        <script> alertify.success("Formulario enviado.");</script>
<?php elseif(isset($_GET["respuesta"]) && $_GET["respuesta"]==false):?>
    <script> alertify.error("El formulario no se pudo enviar,contacte con un administrador del sistema.");</script> 
<?php endif;?> 

<script src="js/app.js"></script>
</body>
</html>