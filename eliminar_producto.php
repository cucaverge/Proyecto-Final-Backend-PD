<?php 
    if(isset($_GET["id"]) && is_numeric($_GET["id"])) {
        $idProducto = $_GET["id"];
        
        $conexion = mysqli_connect("localhost:3306", "root", "", "proyecto_integrador");

        $query = "DELETE FROM productos WHERE id_producto = ?";
        
        $stmt = mysqli_prepare($conexion, $query);

        mysqli_stmt_bind_param($stmt, "i", $idProducto);

        $resultado = mysqli_stmt_execute($stmt);

        if($resultado === true){
            echo "<p>Se eliminó el producto correctamente!</p>";
            echo "<a href='./productos.php'>Volver</a>";
        } else {
            echo "<p>Hubo un error, vuelva a intentarlo nuevamente!</p>";
            echo "<a href='./productos.php'>Volver</a>";
        }

        mysqli_stmt_close($stmt);
        mysqli_close($conexion);
    } else {
        echo "ID no válido";
    }
?>