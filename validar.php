<?php
$cedula = $_POST['cedula'];
$contrasena = $_POST['contrasena'];
session_start();
$_SESSION['cedula'] = $cedula;

include('db.php');

// Consulta preparada para evitar la inyección SQL
$consulta = "CALL Login (?, ?)";
if ($stmt = mysqli_prepare($conexion, $consulta)) {
    // Vincular parámetros
    mysqli_stmt_bind_param($stmt, "ss", $cedula, $contrasena);
    
    // Ejecutar la consulta
    mysqli_stmt_execute($stmt);
    
    // Obtener resultados
    mysqli_stmt_store_result($stmt);
    $filas = mysqli_stmt_num_rows($stmt);
    
    if ($filas) {
        header("location:../accesslinker/view/username/index.php");
        exit();
    } else {
        include("index.php");
        ?>
        <h1 class="bad">ERROR EN LA AUTENTIFICACION</h1>
        <?php
    }
    
    // Liberar resultados y cerrar la consulta
    mysqli_stmt_free_result($stmt);
    mysqli_stmt_close($stmt);
}

mysqli_close($conexion);
?>