<?

?>
<!DOCTYPE html>
<html lang="es">
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

    <script src="jquery/jquery-3.3.1.min.js"></script>

    <link rel="stylesheet" href="../bootstrap-table/bootstrap-table.css">
    <script src="../bootstrap-table/bootstrap-table.js"></script>
    <script src="../bootstrap-table/bootstrap-table-zh-CN.js"></script>


</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">

    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="navbar-brand" href="formulario.php"> INGRESAR</a>
            <a class="nav-item nav-link active" href="modificarArticulo.php">BUSCAR </a>
            <a class="nav-item nav-link" href="#">LISTAR</a>

        </div>
    </div>
</nav>
<div class="container">


    <section class="row">
        <form action="listarProductos.php" method="POST">
            Buscar Articulo
            <input type="text" id="palabra" name="palabra">
            <input type="submit" name="search" id="search" value="Buscar">
        </form>




</div>
</body>
</section>
</html>


<?php
$nombreProducto = $_POST['producto'];
$precio = $_POST['precio'];
$descripcion = $_POST['descripcion'];
$categoria = $_POST['categoria'];
$nombreMarca = $_POST['nombreMarca'];
$nuevo = $_POST['nuevo'];
$uploadCatalogo = "../images/";
$uploadDescripcion = "../imagenesDescripcion/";
//saber el nombre del archivo
$archivoImagenCatalogo = $_FILES['imagenCatalogo']['name'];
//nombre temporal del fichero
$catalogotmp = ($_FILES['imagenCatalogo']['tmp_name']);

$descripciontmp = ($_FILES['imagenDescripcion']['tmp_name']);

//concatenas el nombre completo
$imagenCatalogo = $uploadCatalogo . $archivoImagenCatalogo;


$FileDescripcion = $_FILES['imagenDescripcion']['name'];
$imagenDescripcion = $uploadDescripcion . $FileDescripcion;

move_uploaded_file($catalogotmp, $imagenCatalogo);
move_uploaded_file($descripciontmp, $imagenDescripcion);
$conexion = mysqli_connect("127.0.0.1", "root", "1234",
    "venta_informatica");

if ($conexion->connect_error) {
    echo "Fallo al conectar a MySQL: (" . $conexion->connect_error . ") " . $conexion->connect_error;
}
$consultaInsert = "INSERT INTO articulos
    (id,nombreProducto,precio,imagenCatalogo,imagenDescripcion,descripcion,categoria_id,nombreMarca_id,nuevo,stock)
    VALUES (null ,'$nombreProducto', $precio ,'$imagenCatalogo', '$imagenDescripcion',' $descripcion',
    $categoria,$nombreMarca,$nuevo,'1')";
echo $consultaInsert;

//mysqli_query($conexion, $consultaInsert);

if (mysqli_query($conexion, $consultaInsert)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $consultaInsert . "<br>" . mysqli_error($conexion);
}
mysqli_close($conexion);


?>
