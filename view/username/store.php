<?php
    require_once("../../controller/usernameController.php");
    $obj = new usernameController();
    $obj->guardar($_POST['cedula'],$_POST['nombre'],$_POST['primerApellido'],$_POST['segundoApellido'],$_POST['correo'],$_POST['contrasena'],$_POST['tipoUsuario']);
?>