<?php require_once("../head/head.php"); ?>

<form action="store.php" method="POST" autocomplete="off">
    <div class="mb-3">
        <label for="cedula" class="form-label">CEDULA</label>
        <input type="text" name="cedula" required class="form-control" id="cedula" aria-describedby="emailHelp" autocomplete="off">
    </div>
    <div class="mb-3">
        <label for="nombre" class="form-label">NOMBRE</label>
        <input type="text" name="nombre" required class="form-control" id="nombre" aria-describedby="emailHelp" autocomplete="off">
    </div>
    <div class="row">
        <div class="col-md-6 mb-3">
            <label for="primerApellido" class="form-label">PRIMER APELLIDO</label>
            <input type="text" name="primerApellido" required class="form-control" id="primerApellido" aria-describedby="emailHelp" autocomplete="off">
        </div>
        <div class="col-md-6 mb-3">
            <label for="segundoApellido" class="form-label">SEGUNDO APELLIDO</label>
            <input type="text" name="segundoApellido" class="form-control" id="segundoApellido" aria-describedby="emailHelp" autocomplete="off">
        </div>
    </div>
    <div class="mb-3">
        <label for="correo" class="form-label">CORREO</label>
        <input type="email" name="correo" required class="form-control" id="correo" aria-describedby="emailHelp" autocomplete="off">
    </div>
    <div class="mb-3">
        <label for="contrasena" class="form-label">CONTRASEÑA</label>
        <input type="password" name="contrasena" required class="form-control" id="contrasena" aria-describedby="emailHelp" autocomplete="off">
    </div>
    <div class="mb-3">
        <label for="tipoUsuario" class="form-label">TIPO DE USUARIO</label>
        <select name="tipoUsuario" class="form-select" id="tipoUsuario">
            <option value="1">Interno</option>
            <option value="0">Externo</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Guardar</button>
    <a class="btn btn-danger" href="index.php">Cancelar</a>
    <br>
    <br>
</form>

<?php require_once("../head/footer.php"); ?>
