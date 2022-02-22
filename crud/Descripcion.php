<?php
// Verificamos la conexión con el servidor y la base de datos
$mysqli = new mysqli('127.0.0.1', 'root', 'root', 'venta_informatica');
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>GMInformatica</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="../assets/favicon.ico"/>
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
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="index.html">GM Informatica</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
                    class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                <li class="nav-item"><a class="nav-link" href="#!">Nosotros</a></li>
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
                <button class="btn btn-outline-dark" type="submit">
                    <i class="bi-cart-fill me-1"></i>
                    Carrito
                    <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                </button>
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
            <div class="carousel-item">
                <img class="d-block w-100" src="..\images\netac-1920.jpg" alt="Five slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="..\images\corepseries_banner_1920x470.jpg" alt="Six slide">
            </div>
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
<!-- Section-->
<section class="py-5">

    <?php
    $prod = $_GET["saludo"];


    echo ' <div class="container px-4 px-lg-5 mt-5">';
    echo ' <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">';
    echo '<div class="col-md-4">';
    echo '<div class="card h-100">';


    //$query = $mysqli -> query ("SELECT descripcion,imagenDescripcion FROM articulos where nombreProducto='$prod'");
    $query = "SELECT descripcion,imagenDescripcion FROM articulos where nombreProducto='$prod'";
    $result = $mysqli->query($query);
    // echo $query;
    foreach ($result as $row) {

        //  while ($valores = mysqli_fetch_array($result)) {
        //    echo $valores;
        echo '<img class="card-img-top" src="' . $row['imagenDescripcion'] . '" /></a>';


        echo '</div>';
        echo '</div>';

        echo ' <div class="col mb-10">';
        echo '<div class="col-md-10">';


        echo '<h5 class="fw-bolder">Especificaciones Generales</h5>';
        echo '<div ><!-- Product name-->';


        echo '</div>';

        echo '<table class="table table-striped">';
        echo '<thead>';
        echo '<tr>';
        echo '<th scope="col">#</th>';
        echo '<th scope="col">Descripcion</th>';

        echo '</tr>';
        echo ' </thead>';
        echo '<tbody>';

        echo '  <tr>';

        echo ' <th scope="row">' . $row['descripcion'] . '</th>';

        echo '</tr>';
    }


    echo ' </tbody>';
    echo '  </table>';

    echo '</div>';
    echo '</div>';
    ?>

    </div>
    </div>
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
