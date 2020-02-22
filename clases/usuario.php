<?php


abstract class Usuario{
    //  ---------  ATRIBUTOS  ---------
    protected $usuario;
    protected $contrasenia;
    protected $email;
    protected $nombre;
    protected $apellido;
    protected $dni;
    protected $administrador;

    //  ---------  METODOS  ---------

    // Gettes
    public function getUsuario() {
        return $this->usuario;
    }

    public function getContrasenia() {
        return $this->contrasenia;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getApellido() {
        return $this->apellido;
    }

    public function getDni() {
        return $this->dni;
    }

    public function getAdministrador() {
        return $this->administrador;
    }

    //Setters
    public function setUsuario($usuario) {
        $this->usuario = $usuario;
    }

    public function setContrasenia($contrasenia) {
        $this->contrasenia = $contrasenia;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setApellido($apellido) {
        $this->apellido = $apellido;
    }

    public function setDni($dni) {
        $this->dni = $dni;
    }

    public function setAdministrador($bool) {
        $this->administrador = $bool;
    }

}


?>