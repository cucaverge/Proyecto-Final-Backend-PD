<?php
    if(!empty($_POST["nombre_producto"]) && !empty($_POST["descripcion_producto"])){
        $conexion = mysqli_connect("localhost:3306", "root", "", "proyecto_integrador");

        $query = "UPDATE productos SET 
                    descripcion_producto = '".$_POST['descripcion_producto']."',
                    stock_producto = '".$_POST['stock_producto']."',
                    precio_producto = '".$_POST['precio_producto']."'
                  WHERE id_producto = '".$_POST['id_producto']."'";

        $resultado = mysqli_query($conexion, $query);

        if($resultado === true){
            echo "<p>Se editó el producto correctamente!</p>";
        } else {
            echo "<p>Hubo un error, vuelva a intentarlo nuevamente!</p>";
        }

        mysqli_close($conexion);
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Productos</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Productos</h2>
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="alta-tab" data-toggle="tab" href="#alta" role="tab" aria-controls="alta" aria-selected="true">Editar</a>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="alta" role="tabpanel" aria-labelledby="alta-tab">
                <form method="post" action="" id="altaForm">
                    <div class="form-group">
                        <label for="nombre_producto">Nombre del producto:</label>
                        <input type="text" class="form-control" id="nombre_producto" name="nombre_producto" required>
                    </div>
                    <div class="form-group">
                        <label for="descripcion_producto">Descripción del producto:</label>
                        <input type="text" class="form-control" id="descripcion_producto" name="descripcion_producto" required>
                    </div>
                    <div class="form-group">
                        <label for="id_producto">Código:</label>
                        <input type="number" class="form-control" id="id_producto" name="id_producto">
                    </div>
                    <div class="form-group">
                        <label for="stock_producto">Stock (unidades):</label>
                        <input type="number" class="form-control" id="stock_producto" name="stock_producto" required>
                    </div>
                    <div class="form-group">
                        <label for="precio_producto">Precio:</label>
                        <input type="number" class="form-control" id="precio_producto" name="precio_producto" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                    <a href="./productos.php" class="btn btn-primary" >Volver</a>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

