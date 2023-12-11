<?php
class usernameModel
{
    private $PDO;

    public function __construct()
    {
        require_once("../../config/db.php");
        $con = new db();
        $this->PDO = $con->conexion();
    }

    public function insertar($cedula, $nombre, $primerApellido, $segundoApellido, $correo, $contrasena, $tipoUsuario)
    {
        try {
            $statement = $this->PDO->prepare("CALL AgregarUsuario(?,?,?,?,?,?,?)");
            $statement->bindParam(1, $cedula, \PDO::PARAM_STR);
            $statement->bindParam(2, $nombre, \PDO::PARAM_STR);
            $statement->bindParam(3, $primerApellido, \PDO::PARAM_STR);
            $statement->bindParam(4, $segundoApellido, \PDO::PARAM_STR);
            $statement->bindParam(5, $correo, \PDO::PARAM_STR);
            $statement->bindParam(6, $contrasena, \PDO::PARAM_STR);
            $statement->bindParam(7, $tipoUsuario, \PDO::PARAM_INT);

            $success = $statement->execute();
            return ($success) ? $cedula : false;
        } catch (\PDOException $e) {
            // Manejo de errores en caso de fallo en la ejecución de la consulta
            echo "Error al insertar usuario: " . $e->getMessage();
            return false;
        }
    }

    public function mostrarById($cedula)
    {
        try {
            $statement = $this->PDO->prepare("CALL MostrarUsuarioById(?)");
            $statement->bindParam(1, $cedula, \PDO::PARAM_STR);

            $success = $statement->execute();
            return ($success) ? $statement->fetch() : false;
        } catch (\PDOException $e) {
            // Manejo de errores en caso de fallo en la ejecución de la consulta
            echo "Error al mostrar el usuario: " . $e->getMessage();
            return false;
        }
    }

    public function mostrar()
    {
        try {
            $statement = $this->PDO->prepare("CALL MostrarUsuarios()");

            $success = $statement->execute();
            return ($success) ? $statement->fetchAll() : false;
        } catch (\PDOException $e) {
            // Manejo de errores en caso de fallo en la ejecución de la consulta
            echo "Error al mostrar los usuarios: " . $e->getMessage();
            return false;
        }
    }

    public function modificar($cedula, $nombre, $primerApellido, $segundoApellido, $correo, $contrasena, $tipoUsuario)
    {
        try {
            $statement = $this->PDO->prepare("CALL ModificarUsuario(?,?,?,?,?,?,?)");
            $statement->bindParam(1, $cedula, \PDO::PARAM_STR);
            $statement->bindParam(2, $nombre, \PDO::PARAM_STR);
            $statement->bindParam(3, $primerApellido, \PDO::PARAM_STR);
            $statement->bindParam(4, $segundoApellido, \PDO::PARAM_STR);
            $statement->bindParam(5, $correo, \PDO::PARAM_STR);
            $statement->bindParam(6, $contrasena, \PDO::PARAM_STR);
            $statement->bindParam(7, $tipoUsuario, \PDO::PARAM_INT);

            $success = $statement->execute();
            return ($success) ? $cedula: false;
        } catch (\PDOException $e) {
            // Manejo de errores en caso de fallo en la ejecución de la consulta
            echo "Error al modificar usuario: " . $e->getMessage();
            return false;
        }
    }

    public function eliminar($cedula)
    {
        try {
            $statement = $this->PDO->prepare("CALL EliminarUsuario(?)");
            $statement->bindParam(1, $cedula, \PDO::PARAM_STR);

            $success = $statement->execute();
            return ($success) ? true : false;
        } catch (\PDOException $e) {
            // Manejo de errores en caso de fallo en la ejecución de la consulta
            echo "Error al eliminar usuario: " . $e->getMessage();
            return false;
        }
    }

    public function login($cedula, $contrasena)
    {
        try {
            $statement = $this->PDO->prepare("CALL Login(?,?)");
            $statement->bindParam(1, $cedula, \PDO::PARAM_STR);
            $statement->bindParam(2, $contrasena, \PDO::PARAM_STR);


            $success = $statement->execute();
            return ($success) ? $statement->fetch() : false;
        } catch (\PDOException $e) {
            // Manejo de errores en caso de fallo en la ejecución de la consulta
            echo "Error al ingresar: " . $e->getMessage();
            return false;
        }
    }
}
?>