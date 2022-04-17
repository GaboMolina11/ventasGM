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
<div class="container">

    <section class="row">


        <form action="ingresarArticulos.php" method="post" enctype="multipart/form-data">
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

            <select class="form-select" name="categoria" aria-label="Default select example">
                <option selected>Categoria</option>
                <option value="1">Mouse</option>
                <option value="2">Fuentes</option>
                <option value="3">Three</option>
            </select>
            <br>
            <div class="form-group">
                <label>Descripcion</label>
                <input type="text" class="form-control" name="descripcion" placeholder="descripcion">
            </div>
            <br>

            <select class="form-select" name="nombreMarca" aria-label="Default select example">
                <option selected>Marca</option>
                <option value="1">Logitech</option>
                <option value="2">Next</option>
                <option value="3">Three</option>
            </select>
            <br>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>


    </section>

</div>
</body>
</html>

