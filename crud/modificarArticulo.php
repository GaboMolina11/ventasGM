<?php
// Verificamos la conexión con el servidor y la base de datos
$mysqli = new mysqli('127.0.0.1', 'root', '1234', 'venta_informatica');
//
?>
// Este es cambio de prueba para git

<!DOCTYPE html>
<html>
<head>
    <title>Formulario modificar Articulos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
            integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
            integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
            crossorigin="anonymous"></script>
</head>
<body>
<div class="container">


    <section class="row">
        <form action="ModificarArticulo.php" method="POST">
            Palabras clave
            <input type="text" id="keywords" name="keywords" size="30" maxlength="30">
            <input type="submit" name="search" id="search" value="Buscar">
        </form>
        <?php
        //Si se ha pulsado el botón de buscar
        if (isset($_POST['search'])) {
            //Recogemos las claves enviadas
            $keywords = $_POST['keywords'];

            //Conectamos con la base de datos en la que vamos a buscar

            $mysqli = new mysqli('127.0.0.1', 'root', '1234', 'venta_informatica');


            $query = $mysqli->query("SELECT  nombreProducto FROM  ARTICULOS WHERE nombreProducto LIKE '%$keywords%'");

            while ($valores = mysqli_fetch_array($query)) {

                echo 'erorroororor';
                echo $valores[0];
                // echo '<h2>Se han encontrado '.$count_results.' resultados.</h2>';


            }

        }


        ?>

</div>
</body>
</html>

