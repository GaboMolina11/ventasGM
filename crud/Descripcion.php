<?php
// Verificamos la conexión con el servidor y la base de datos
$mysqli = new mysqli('127.0.0.1', 'root', 'root', 'venta_informatica');
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta http-equiv=”Content-Type” content=”text/html; charset=UTF-8″/>
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

<nav class="navbar navbar-expand-lg navbar-light bg-light" style="position: fixed;
    top: 0;
    left: 0;
    z-index: 50;
    width: 100%;">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="../../VentasPrototipo/ventasGM/crud/catalogo.php">GM Informatica</a>
        <div class="di spa-der-md spa-top-xs hidden-sm">
            <span class="whatsapp"></span>
            <div class="di may color-blanco texto-md spa-izq-xs valign-medio">
                <div class="bold">
                    <a href="https://api.whatsapp.com/send?phone=0059894464027"
                       class="whatsapp" target="_blank"> <i class="fa fa-whatsapp whatsapp-icon"></i></a>
                </div>
            </div>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
                    class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
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
                <li class="nav-item"><a class="nav-link" href="../contacto.html">Contáctanos</a></li>
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
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style=" margin-top: 8px; box-shadow: 0px 3px 15px black;">
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
                   <img class="d-block w-100" src="..\images\corepseries_banner_1920x470.jpg" alt="Six slide">
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
<!-- Section-->

<?php
echo '<section class="py-5">';

$prod = $_GET["saludo"];


echo ' <div class="container px-4 px-lg-5 mt-5">';
echo ' <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3  justify-content-center">';
echo '<div class="col-md-6">';
echo '<div class="card">';


//$query = $mysqli -> query ("SELECT descripcion,imagenDescripcion FROM articulos where nombreProducto='$prod'");
$query = "SELECT descripcion,imagenDescripcion,precio,nombreProducto FROM articulos where nombreProducto='$prod'";
$result = $mysqli->query($query);
// echo $query;
foreach ($result as $row) {

    //  while ($valores = mysqli_fetch_array($result)) {
    //    echo $valores;
    echo '<img class="card-img-top" src="' . $row['imagenDescripcion'] . '" /></a>';


    echo '</div>';
    echo '</div>';


    echo '  </table>';
    echo '<div>';
    echo ' <h4 class="" style="min-inline-size: max-content;"> </tbody> <thead><tr scope="row"> ' . $row['nombreProducto'] . ' </tr> </thead></h4>';
    echo '<br></br>';
    echo ' <h4 class="fw-bold" style="min-inline-size: max-content; color: #FF0000"> </tbody> <thead><tr><tr scope="col">USD</tr><tr scope="row"> ' . $row['precio'] . ' iva inc</tr></tr> </thead></h4>';
    echo ' <hr>';
    echo '<br><br>';
    echo '<a class="btn btn-primary btn-lg" href="../contacto.html" role="button">!Lo quiero!</a>';
    echo '</div>';


    echo '</div>';
    echo '</div>';
    echo '</section>';

    //echo '<table class="table table-striped">';
    echo '<thead>';
    echo '<tr>';
    //echo '<th scope="col">#</th>';
    //echo '<th scope="col">Descripción</th>';

    echo '</tr>';
    echo ' </thead>';
    echo '<tbody>';


//     <th scope="row">' . $row['precio'] . '</th>';

    echo '</tr>';

    echo ' <div class="col mb-100">';
    echo '<div class="col-md-70">';


    //echo '<h3 class="fw-bold" style="min-inline-size: max-content;">Descripción del Producto</h3>';

    echo '<div ><!-- Product name-->';
    echo '  <tr>';
    echo '<div class="card" style="align-content: center;"><table class="table table-striped"><thead>';
    echo ' <tr></tr> </thead><tbody>  <tr><th> <h3 class="fw-bold" style="min-inline-size: max-content;">Descripción del Producto</h3></th></tr>';
    echo ' <th scope="row"><textarea rows="10" disabled style=" width: 100%; height: auto; overflow: hidden">' . $row['descripcion'] . ' </textarea></th>';


    echo ' </tbody> </table> </div>';

    echo '</div>';
}

?>

</div>
</div>

</section>
<!-- Footer-->
<!--<footer class="py-5 bg-dark">
    <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2021</p></div>
</footer>-->
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>
</body>
</html>


