<?php
    require_once("../../controller/usernameController.php");
    $obj = new usernameController();
    $obj->delete($_GET['cedula']);
?>