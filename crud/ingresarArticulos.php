<!DOCTYPE html>
<html>
<head>

    <title>Se procesa datos a la base</title>
</head>
<body>
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

if ($conexion->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
}
$consultaInsert = "INSERT INTO articulos
    (id,nombreProducto,precio,imagenCatalogo,imagenDescripcion,descripcion,categoria,nombreMarca)
    VALUES (null ,'$nombreProducto', $precio ,'$imagenCatalogo', '$imagenDescripcion',' $descripcion',
    $categoria,$nombreMarca)";
echo $consultaInsert;

//mysqli_query($conexion, $consultaInsert);

if (mysqli_query($conexion, $consultaInsert)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $consultaInsert . "<br>" . mysqli_error($conexion);
}
mysqli_close($conexion);


?>
</body>
</html>