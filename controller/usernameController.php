<?php
    class usernameController{
        private $model;
        public function __construct()
        {
            require_once("../../model/usernameModel.php");
            $this->model = new usernameModel();
        }

        public function guardar($cedula, $nombre, $primerApellido, $segundoApellido, $correo, $contrasena, $tipoUsuario){
            $cedula = $this->model->insertar($cedula, $nombre, $primerApellido, $segundoApellido, $correo, $contrasena, $tipoUsuario);
            return ($cedula!=false) ? header("Location:show.php?cedula=".$cedula) : header("Location:create.php");
        }

        public function show($cedula){
            $userData = $this->model->mostrarById($cedula);
            if ($userData !== false) {
                return $userData;
            } else {
                header("Location: index.php");
            exit; // Asegúrate de terminar la ejecución después de la redirección
            }
        }

        public function index(){
            $rows = $this->model->mostrar();
            return ($rows !== false && !empty($rows)) ? $rows : false;
        }

        public function update($cedula, $nombre, $primerApellido, $segundoApellido, $correo, $contrasena, $tipoUsuario){
            return ($this->model->modificar($cedula, $nombre, $primerApellido, $segundoApellido, $correo, $contrasena, $tipoUsuario) != false) ? header("Location:show.php?cedula=".$cedula) : header("Location:index.php");
        }

        public function delete($cedula){
            return ($this->model->eliminar($cedula)) ? header("Location:index.php") : header("Location:show.php?cedula=".$cedula) ;
        }
    }
?>