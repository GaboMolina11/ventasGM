<?php
// Verificamos la conexión con el servidor y la base de datos
$mysqli = new mysqli('127.0.0.1', 'root', 'root', 'venta_informatica');
?>

<!DOCTYPE html>
<html>
<head>
    <title>Formulario para subir articulos</title>
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


        <form action="formulario.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label>Producto</label>
                <input type="text" class="form-control" name="producto" placeholder="Producto">

            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Precio</label>
                <input type="text" class="form-control" name="precio" id="exampleInputPassword1" placeholder="Precio">
            </div>
            <br>

            <div class="form-group">
                <label for="exampleFormControlFile1">ImagenCatalogo</label>
                <input type="file" class="form-control-file" name="imagenCatalogo" id="exampleFormControlFile1">
            </div>
            <br>
            <div class="form-group">
                <label for="exampleFormControlFile2">ImagenDescripcion</label>
                <input type="file" class="form-control-file" name="imagenDescripcion" id="exampleFormControlFile2">
            </div>
            <br>

            <spam> Categorías </spam>
            <select class="form-select" name="categoria" aria-label="Default select example">

                <?php $query = $mysqli->query("SELECT * FROM categorias");
                while ($valores = mysqli_fetch_array($query)) {

                    echo $valores[0];
                    echo '<option value="' . $valores[0] .'"> '. $valores[1] .' </option>';

                }
                ?>
            </select>
            <br>
            <div class="form-group">
                <label>Descripcion</label>
                <textarea type="text" class="form-control" name="descripcion" placeholder="descripcion"> </textarea>
            </div>
            <br>

            <spam> Marcas </spam>
            <select class="form-select" name="nombreMarca" aria-label="Default select example">

                <?php $query = $mysqli->query("SELECT * FROM marcas");
                while ($valores = mysqli_fetch_array($query)) {

                    echo $valores[0];
                    echo '<option value="' . $valores[0] .'"> '. $valores[1] .' </option>';

                }
                ?>



            </select>
            <br>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>


    </section>

    <?php
$nombreProducto = $_POST['producto'];
$precio = $_POST['precio'];
$descripcion = $_POST['descripcion'];
$categoria = $_POST['categoria'];
$nombreMarca = $_POST['nombreMarca'];
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
$conexion = mysqli_connect("127.0.0.1", "root", "root",
    "venta_informatica");

if ($conexion->connect_error) {
    echo "Fallo al conectar a MySQL: (" . $conexion->connect_error . ") " . $conexion->connect_error;
}
$consultaInsert = "INSERT INTO articulos
    (id,nombreProducto,precio,imagenCatalogo,imagenDescripcion,descripcion,categoria_id,nombreMarca_id)
    VALUES (null ,'$nombreProducto', $precio ,'$imagenCatalogo', '$imagenDescripcion',' $descripcion',
    $categoria,$nombreMarca)";
//echo $consultaInsert;
echo "Datos insertados Correctamente";

//mysqli_query($conexion, $consultaInsert);

if (mysqli_query($conexion, $consultaInsert)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $consultaInsert . "<br>" . mysqli_error($conexion);
}
mysqli_close($conexion);


?>

</div>
</body>
</html>

