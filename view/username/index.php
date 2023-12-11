<?php
    require_once("../head/head.php");
    require_once("../../controller/usernameController.php");
    $obj = new usernameController();
    $rows = $obj->index();
?>
<div class="mb-3">
    <a href="./create.php" class="btn btn-primary">Agregar nuevo usuario</a>
</div>
<table class="table">
    <thead>
        <tr>
            <th scope="col">CEDULA</th>
            <th scope="col">NOMBRE</th>
            <th scope="col">PRIMER APELLIDO</th>
            <th scope="col">SEGUNDO APELLIDO</th>
            <th scope="col">CORREO</th>
            <th scope="col">CONTRASEÑA</th>
            <th scope="col">TIPO DE USUARIO</th>
            <th scope="col">ACCIONES</th>
        </tr>
    </thead>
    <tbody>
        <?php if($rows): ?>
            <?php foreach($rows as $row): ?>
                <tr>
                    <th><?= $row[0] ?></th>
                    <th><?= $row[1] ?></th>
                    <th><?= $row[2] ?></th>
                    <th><?= $row[3] ?></th>
                    <th><?= $row[4] ?></th>
                    <th><?= $row[5] ?></th>
                    <th><?= $row[6] == 1 ? 'Interno' : 'Externo' ?></th>
                    <th>
                        <a href="show.php?cedula=<?= $row[0]?>" class="btn btn-primary">Ver</a>
                        <a href="edit.php?cedula=<?= $row[0]?>" class="btn btn-success">Modificar</a>
                        <!-- Button trigger modal -->
                        <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#cedula<?=$row[0]?>">Eliminar</a>

                        <!-- Modal -->
                        <div class="modal fade" id="cedula<?=$row[0]?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                    <a href="delete.php?cedula=<?= $row[0]?>" class="btn btn-danger">Eliminar</a>
                                    <!-- <button type="button" >Eliminar</button> -->
                                </div>
                                </div>
                            </div>
                        </div>
                    </th>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="3" class="text-center">No hay registros actualmente</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>
<?php
    require_once("../head/footer.php");
?>