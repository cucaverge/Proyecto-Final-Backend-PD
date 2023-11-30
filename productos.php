<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Lista de productos</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="./css/productos/style.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

<script>
function eliminarProducto(id) {
  if (confirm("¿Está seguro que desea eliminar el producto?") == true) {
    window.location.href = "./eliminar_producto.php?id="+id;
  }
}
</script>
</head>
<body>
<div class="container-lg">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2>Listado de <b>Productos</b></h2></div>
                    <div class="col-sm-4">
                        <a href="./agregar_producto.php" class="btn btn-info add-new"><i class="fa fa-plus"></i> Agregar Producto</a>
                        <a href="./index.php" class="btn btn-info add-new mr-3"></i> Volver al home</a>
                    </div>
                </div>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Imagen</th>
                        <th>Código</th>
                        <th>Stock</th>
                        <th>Precio</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $conexion = mysqli_connect("localhost:3306", "root", "", "proyecto_integrador");

                        $query = "SELECT * FROM productos";

                        $resultado = mysqli_query($conexion, $query);

                        while($unaFila = mysqli_fetch_assoc($resultado)){
                            echo "<tr>";
                                echo "<td>".$unaFila["nombre_producto"]."</td>";
                                echo "<td>".$unaFila["descripcion_producto"]."</td>";
                                echo "<td>".$unaFila["imagen_producto"]."</td>";
                                echo "<td>".$unaFila["id_producto"]."</td>";
                                echo "<td>".$unaFila["stock_producto"]."</td>";
                                echo "<td>".$unaFila["precio_producto"]."</td>";
                                echo "<td> 
                                            <a href='./editar_producto.php?id=".$unaFila["id_producto"]."' class='edit' title='Edit' data-toggle='tooltip'><i class='material-icons'>&#xE254;</i></a>
                                            <!--<a href='./eliminar_producto.php?id=".$unaFila["id_producto"]."' class='delete' title='Delete' data-toggle='tooltip'><i class='material-icons'>&#xE872;</i></a>-->
                                            <a href='javascript:void(0);' onclick='eliminarProducto(".$unaFila["id_producto"].")' class='delete' title='Delete' data-toggle='tooltip'><i class='material-icons'>&#xE872;</i></a>
                                      </td>";
                            echo "</tr>";
                        }

                        mysqli_close($conexion);
                    ?> 
                </tbody>
            </table>
        </div>
    </div>
</div>     
</body>
</html>