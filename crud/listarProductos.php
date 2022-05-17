<!DOCTYPE html>
<html>
<head>
<title>Listar Productos Buscados</title>

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

<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
<script type="text/javascript" src="js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<meta charset="utf-8">
<style type="text/css">
  .pagina {
   padding:8px 16px;
   border:1px solid #ccc;
   color:#333;
   font-weight:bold;
  }
</style>
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
 
<!-- <div class="container">
  <div class="row">
    <div class="col-md-12">
     
    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
<div class="panel-body"> -->


<?php
$conexion = mysqli_connect("127.0.0.1", "root", "1234", "venta_informatica");
$record_per_page = 5;
$pagina = '';
if(isset($_GET["pagina"]))
{
 $pagina = $_GET["pagina"];
}
else
{
 $pagina = 1;
}

$start_from = ($pagina-1)*$record_per_page;

$palabra= $_POST['palabra'];
echo $palabra;

$query = "SELECT  * FROM  ARTICULOS WHERE nombreProducto LIKE '%$palabra%' order by id DESC LIMIT $start_from, $record_per_page";
$result = mysqli_query($conexion, $query);

?>

<div class="table-responsive">
    <table class="table table-striped table-bordered">
     <tr class="bg-primary text-white">
      <th>ID</th>
      <th>Nombres</th>
      <th>Accion</th>

     </tr>
     <?php
	 $number=0;
     while($row = mysqli_fetch_array($result))
     {
		 $number++;
     ?>
     <tr>
      <td><?php echo $number; ?></td>
      <td><?php echo $row["nombreProducto"]; ?></td>
      <td>
 <a href="editar.php?editId=<?php echo $row["id"]; ?> " class="text-primary"><i class="fa fa-fw fa-edit"></i> editar</a>
                <a href="borrar.php?delId=<?php echo $row["id"]; ?> " class="text-danger" > <i class="fa fa-fw fa-trash"></i> Eliminar</a>
                 </td>
               
     </tr>
     <?php
     }
     ?>
    </table>
     <div align="center">
    <br />
    <?php
    $page_query = "SELECT  * FROM  ARTICULOS WHERE nombreProducto LIKE '%$palabra%' ORDER BY id DESC";
    $page_result = mysqli_query($conexion, $page_query);
    $total_records = mysqli_num_rows($page_result);
    $total_pages = ceil($total_records/$record_per_page);
    $start_loop = $pagina;
    $diferencia = $total_pages - $pagina;
    if($diferencia <= 5)
    {
     $start_loop = $total_pages - 5;
    }
    $end_loop = $start_loop + 4;
    if($pagina > 1)
    {
     echo "<a class='pagina' href='listarProductos.php?pagina=1'>Primera</a>";
     echo "<a class='pagina' href='listarProductos.php?pagina=".($pagina - 1)."'><<</a>";
    }
    for($i=$start_loop; $i<=$end_loop; $i++)
    {     
     echo "<a class='pagina' href='listarProductos.php?pagina=".$i."'>".$i."</a>";
    }
    if($pagina <= $end_loop)
    {
     echo "<a class='pagina' href='listarProductos.php?pagina=".($pagina + 1)."'>>></a>";
     echo "<a class='pagina' href='listarProductos.php?pagina=".$total_pages."'>Última</a>";
    }
    
    
    ?>
    </div>
    <br /><br />

 </div>


</div>
</div>
  </div>
</div>
<div class="panel-footer">
  <div class="container">
   
</div>
</body>
</html>