<?php
    require_once("../head/head.php");
    require_once("../../controller/usernameController.php");
    $obj = new usernameController();
    $date = $obj->show($_GET['cedula']);
?>
<h2 class="text-center">Detalles del registro</h2>
<div class="pb-3">
    <a href="index.php" class="btn btn-primary">Regresar</a>
    <a href="edit.php?cedula=<?= $date[0]?>" class="btn btn-success">Actualizar</a>
    
    <!-- Button trigger modal -->
    <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Eliminar</a>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">¿Desea eliminar el registro?</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            Una vez eliminado no se podra recuperar el registro
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-success" data-bs-dismiss="modal">Cerrar</button>
            <a href="delete.php?cedula=<?= $date[0]?>" class="btn btn-danger">Eliminar</a>
            <!-- <button type="button" >Eliminar</button> -->
        </div>
        </div>
    </div>
    </div>
</div>

<table class="table container-fluid">
    <thead>
        <tr>
            <th scope="col">CEDULA</th>
            <th scope="col">NOMBRE</th>
            <th scope="col">PRIMER APELLIDO</th>
            <th scope="col">SEGUNDO APELLIDO</th>
            <th scope="col">CORREO</th>
            <th scope="col">CONTRASEÑA</th>
            <th scope="col">TIPO DE USUARIO</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td scope="col"><?= $date["CEDULA"]?></td>
            <td scope="col"><?= $date["NOMBRE"]?></td>
            <td scope="col"><?= $date["PRIMER_APELLIDO"]?></td>
            <td scope="col"><?= $date["SEGUNDO_APELLIDO"]?></td>
            <td scope="col"><?= $date["CORREO"]?></td>
            <td scope="col"><?= $date["CONTRASENA"]?></td>
            <td scope="col"><?= $date["TIPO_USUARIO"] == 1 ? 'Interno' : 'Externo' ?></td>
        </tr>
    </tbody>
</table>
<?php
    require_once("../head/footer.php");
?>