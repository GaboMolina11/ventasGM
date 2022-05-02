<?php
// Verificamos la conexión con el servidor y la base de datos
$mysqli = new mysqli('127.0.0.1', 'root', 'root', 'venta_informatica');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <style>

        .py-5 {
            display: flex; /* or inline-flex */
        }

        .item {
            order: 3; /* default is 0 */
        }

        .tota {

            flex-grow: 4;
            width: 120px;
            background-color: rgba(0, 0, 255, .1)

        }

        .grid-container {
            display: grid;
            grid-template-columns: auto auto auto;
        }


        .grid-item {

            font-size: 30px;
            text-align: center;
        }


    </style>

    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>GMInformatica</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="../assets/favicon.ico"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet"/>
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="../css/styles.css" rel="stylesheet"/>
</head>
<body>


<div>
    <!-- messages -->

    <script src="../js/jquery-3.3.1.slim.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>

    <script src="../js/sweetalert.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="../js/notify.js"></script>
    <script src="../js/mensajes.js"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
            integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
            integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>

    <script>


        $('#carouselExampleIndicators').carousel({
            interval: false
        })

        var $carousel = $('#carouselExampleIndicators');
        $carousel.carousel();
        var handled = false;
        var itemclicked = "";
        $carousel.bind('slide.bs.carousel', function (e) {
            var current = $(e.target).find('.item.active');
            var indx = $(current).index();
            if ((indx + 2) > $('.carousel-indicators li').length)
                indx = -1

            if (!handled) {
                $('.carousel-indicators li').removeClass('active')
                $('.carousel-indicators li:nth-child(' + (indx + 2) + ')').addClass('active');

            } else {
                handled = !handled;
            }

        });

        $(".carousel-indicators li").on('click', function () {
            $(this).addClass('active').siblings().removeClass('active');
            handled = true;
        });
    </script>


</div>
<!-- Navigation-->
<nav class="navbar navbar-expand-lg" style="
    background: black;
    padding: 1.5rem;
"></nav>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="../index.html">GM Informatica</a>
        <div class="di spa-der-md spa-top-xs hidden-sm">
            <span class="whatsapp"></span>
            <div class="di may color-blanco texto-md spa-izq-xs valign-medio">
                <div class="bold">
                    <a href="https://api.whatsapp.com/send?phone=+59894464027"
                       class="whatsapp" target="_blank"> <i class="fa fa-whatsapp whatsapp-icon"></i></a>
                </div>
            </div>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
                    class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                <li class="nav-item"><a class="nav-link" href="../contacto.html">Contáctanos</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">Nuestras Marcas</a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Arctic</a></li>
                        <li><a class="dropdown-item" href="#!">Logitech</a></li>
                        <li><a class="dropdown-item" href="#!">Seasonic</a></li>
                        <li><a class="dropdown-item" href="#!">Thermaltake</a></li>
                        <li><a class="dropdown-item" href="#!">Gainward</a></li>
                        <li><a class="dropdown-item" href="#!">Netac</a></li>
                        <li><a class="dropdown-item" href="#!">Sharkoon</a></li>
                        <li><a class="dropdown-item" href="#!">New Arrivals</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">Categorías</a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    </ul>
                </li>
            </ul>
            <form class="d-flex">
                <div class="input-group">
                    <div class="form-outline">
                        <input type="search" id="form1" class="form-control" placeholder="¿Qué buscás?">
                    </div>
                    <button type="button" class="btn btn-primary"> Buscar
                        <!--                        <i class="fas fa-search">-->

                        </i>
                    </button>
                </div>
            </form>
        </div>
    </div>
</nav>
<!-- Header-->
<header class="bg-dark">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="..\images\sharkoon-nuevo-disponible.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="..\images\arctic-1920.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="..\images\kda-final.jpg" alt="Third slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="..\images\x52-pro-hotas-1920.jpg" alt="Four slide">
            </div>
         <!--   <div class="carousel-item">
                <img class="d-block w-100" src="..\images\netac-1920.jpg" alt="Five slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="\images\corepseries_banner_1920x470.jpg" alt="Six slide">
            </div>-->
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only"></span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only"></span>
        </a>
    </div>
</header>


<?php

echo '<section class="py-5">';

echo '<div class="container px-4 px-lg-5 mt-5">';
// echo '<div class="tota">';

echo '<div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">';

// Realizamos la consulta para extraer los datos
$query = $mysqli->query("SELECT * FROM articulos");
while ($valores = mysqli_fetch_array($query)) {
    echo '<div class="col mb-5">';

    // echo '<div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale';
    //echo'</div> ';
    echo '  <div class="card h-100">';

    echo '<a href="Descripcion.php?saludo=' . $valores[1] . '"><img class="card-img-top" src="' . $valores[3] . '"/></a>';

    echo ' <div class="card-body p-4">';
    echo ' <div class="text-center">';

    echo '<h5 class="fw-bolder">' . $valores[1] . '</h5>';

    echo ' <div class="d-flex justify-content-center small text-warning mb-2">';
    /*    echo '<div class="bi-star-fill"></div>';
        echo '<div class="bi-star-fill"></div>';
        echo ' <div class="bi-star-fill"></div>';
        echo '<div class="bi-star-fill"></div>';
        echo ' <div class="bi-star-fill"></div>';*/
    echo ' </div>';


    echo '<h4><span class="fw-bolder" style="min-inline-size: max-content; color: #FF0000">USD ' . $valores[2] . '</span></h4>';
    echo '</div>';
    echo '</div>';

    echo ' <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">';
    echo '   <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="Descripcion.php?saludo=' . $valores[1] .'">Mas Información</a></div>';
    echo '  </div>';
    echo ' </div>';


    echo '<br>';
    echo '<br>';
    echo '<br>';


    echo '  </div>';


}

//echo '</section>';

?>
</section>

<!-- Footer-->
<footer class="py-5 bg-dark">
    <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2021</p></div>
</footer>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>
</body>
</html>
