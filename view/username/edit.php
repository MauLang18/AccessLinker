<?php
    require_once("../head/head.php");
    require_once("../../controller/usernameController.php");
    $obj = new usernameController();
    $user = $obj->show($_GET['cedula']);
?>
  <form action="update.php" method="post" autocomplete="off">
    <h2>Modificando Registro</h2>
    <div class="mb-3 row">
        <label for="staticEmail" class="col-sm-2 col-form-label">Id</label>
        <div class="col-sm-10">
        <input type="text" name="cedula" readonly class="form-control-plaintext" id="staticEmail" value="<?= $user[0]?>">
        </div>
    </div>
    <div class="mb-3">
        <label for="nombre" class="form-label">NOMBRE</label>
        <input type="text" name="nombre" required class="form-control" id="nombre" aria-describedby="emailHelp" autocomplete="off" value="<?= $user[1]?>">
    </div>
    <div class="row">
        <div class="col-md-6 mb-3">
            <label for="primerApellido" class="form-label">PRIMER APELLIDO</label>
            <input type="text" name="primerApellido" required class="form-control" id="primerApellido" aria-describedby="emailHelp" autocomplete="off" value="<?= $user[2]?>">
        </div>
        <div class="col-md-6 mb-3">
            <label for="segundoApellido" class="form-label">SEGUNDO APELLIDO</label>
            <input type="text" name="segundoApellido" class="form-control" id="segundoApellido" aria-describedby="emailHelp" autocomplete="off" value="<?= $user[3]?>">
        </div>
    </div>
    <div class="mb-3">
        <label for="correo" class="form-label">CORREO</label>
        <input type="email" name="correo" required class="form-control" id="correo" aria-describedby="emailHelp" autocomplete="off" value="<?= $user[4]?>">
    </div>
    <div class="mb-3">
        <label for="contrasena" class="form-label">CONTRASEÑA</label>
        <input type="text" name="contrasena" required class="form-control" id="contrasena" aria-describedby="emailHelp" autocomplete="off" value="<?= $user[5]?>">
    </div>
    <div class="mb-3">
        <label for="tipoUsuario" class="form-label">TIPO DE USUARIO</label>
        <select name="tipoUsuario" class="form-select" id="tipoUsuario">
            <option value="1" <?php echo ($user[6] == 1) ? 'selected' : ''; ?>>Interno</option>
            <option value="0" <?php echo ($user[6] == 0) ? 'selected' : ''; ?>>Externo</option>
        </select>
    </div>
    <div>
        <input type="submit" class="btn btn-success" value="Actualizar">
        <a class="btn btn-danger" href="show.php?id=<?= $user[0]?>">Cancelar</a>
    </div>
    <br>
    <br>
  </form>
<?php
    require_once("../head/footer.php");
?>