<?php

class conexion {

    private $servidor ;
    private $usuario ;
    private $pass ;
    private $base_datos ;
    private $descriptor ;
    private $resultado ;

    public function __construct() {

        $this->servidor = "localhost";
        $this->usuario = "root";
        $this->pass = "123";
        $this->base_datos = "db_gallisur";
        $this->conectar_base_datos();
    }


    public function conectar_base_datos() {

        $this->descriptor = mysqli_connect($this->servidor, $this->usuario, $this->pass, $this->base_datos);

    }

    public function consulta($consulta) {

        $this->resultado = mysqli_query($this->descriptor, $consulta);
        return $this->resultado;

    }

    public function extraer_datos() {

        $row = mysqli_fetch_assoc($this->resultado);
        return $row;

		}

}

?>
