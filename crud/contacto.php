<?php

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];


$destinatario = "gabriel8476@hotmail.com";


$subject = "Consulta WEB";
$message = nl2br("Asunto: <b>$subject</b> <br> <br> Nombre del cliente: <b>$nombre</b>   <br> <br> Email: <b>$email</b>  <br> <br> Telefono: <b>$telefono</b>  <br> <br> Mensaje: <b>$mensaje</b>");
//para el envío en formato HTML
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";


mail($destinatario, $subject, $message, $headers);


if (!empty($message)) {
    $mensajeEnviado = "Su mensaje se ha enviado correctamente";
}


?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>GMInformatica</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Favicon-->
    <link href="css/templatemo-diagoona.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet"/>
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet"/>
</head>


<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<body>
<nav class="navbar navbar-expand-lg" style="
    background: black;
    padding: 1.5rem;
"></nav>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="crud/catalogo.php">GM Informatica</a>
        <div class="di spa-der-md spa-top-xs hidden-sm">
            <span class="whatsapp"></span>
            <div class="di may color-blanco texto-md spa-izq-xs valign-medio">
                <div class="bold">
                    <a href="https://api.whatsapp.com/send?phone=094464027"
                       class="whatsapp" target="_blank"> <i class="fa fa-whatsapp whatsapp-icon"></i></a>
                </div>
            </div>
        </div>
    </div>
</nav>

<main class="tm-col-right tm-contact-main" style="
    text-align: -webkit-center;
"> <!-- Content -->
    <div clas="tm-container" style="box-sizing: content-box;max-inline-size: fit-content;text-align: -webkit-center;">
        <div class="tm-container">
            <div>
                <div class="tm-row">
                    <div class="tm-col-left"></div>
                    <main class="tm-col-right tm-contact-main"> <!-- Content -->
                        <section class="tm-content tm-contact">
                            <h2 class="mb-4 tm-content-title">Contáctanos</h2>
                            <p class="mb-85"> Dejanos tu consulta y te responderemos a la brevedad:</p>
                            <form action="contacto.php" method="POST" enctype="multipart/form-data"
                                  autocomplete="off">

                                <div class="form-group mb-4">
                                    <input type="text" name="nombre" class="form-control" placeholder="Nombre"
                                           required="Por favor, ingrese su nombre" autocomplete="off">
                                </div>
                                <div class="form-group mb-4">
                                    <input type="email" name="email" class="form-control" placeholder="Email"
                                           required="Por favor, ingrese su email" autocomplete="off">
                                </div>
                                <div class="form-group mb-4">
                                    <input type="number" name="telefono" class="form-control" placeholder="Teléfono"
                                           required="Por favor, ingrese un número de teléfono de contacto"
                                           autocomplete="off">
                                </div>
                                <div class=" form-group mb-5">
                            <textarea rows="6" name="mensaje" class="form-control" placeholder="Mensaje..."
                                      required=""></textarea>
                                </div>
                                <div class="text-right">
                                    <button type="submit" class="btn btn-big btn-primary">Enviar</button>
                                    <script>  swal("Gracias!", "Su mensaje se ha enviado correctamente", "success"); </script
                                </div>
                            </FORM>
                        </section>

                        <!--                        <IMG SRC="images/arctic.png" ALIGN=LEFT>-->
                        <IMG SRC="images/logo_thermaltake.png" ALIGN=LEFT>
                        <IMG SRC="images/logitech.png" ALIGN=LEFT>
                        <IMG SRC="images/seasonic.png" ALIGN=LEFT>
                        <IMG SRC="images/netac.com.jpg" ALIGN=LEFT>
                        <IMG SRC="images/gainward.png" ALIGN=LEFT>

                    </main>
                </div>
            </div>

        </div>
    </div>


</body>
</html>
