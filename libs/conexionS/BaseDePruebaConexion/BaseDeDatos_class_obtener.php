<?php

class BaseDeDatos
{
 protected static $instancia;
 private $host;
 private $usuario;
 private $contrasena;
 private $bd;
 private $mysqli;
 
private $campos=null;
private $donde=null;


  public function __construct($host = null, $usuario = null, $contrasena = null, $bd = null)
    {
    	$this->host = $host;
 		$this->usuario = $usuario;
        $this->contrasena = $contrasena;
        $this->bd = $bd;

        $this->conexion();
        self::$instancia = $this;

    }

public function conexion()
    {
        if (empty($this->host)) {
            throw new Exception('Defina un host primero');
        }

        $this->mysqli = new mysqli($this->host, $this->usuario, $this->contrasena, $this->bd);

        if ($this->mysqli->connect_error) {
            throw new Exception('Error en conexion ' . $this->_mysqli->connect_errno . ': ' . $this->_mysqli->connect_error);
        }
    }

    
    public function mysqli()
    {
        if (!$this->mysqli) {
            $this->conexion();
        }
        return $this->mysqli;
    }

    public static function getInstancia()
    {
        return self::$instancia;
    }


public function definir_donde($campo, $contenido, $operador="="){
	if($this->donde==""){
		$this->donde=$campo.$operador.$contenido;
	}else{
		$this->donde=$this->donde." AND".$campo.$operador.$contenido;
	}

}

public function definir_campos($campo){
	if($this->campos==""){
		$this->campos=$campo;
	}else{
		$this->campos=$this->campos.", ".$campo;
	}

}



public function obtener($tabla, $limite=null){
	$sentencia="SELECT ".($this->campos!=null?$this->campos:'*').' FROM '.$tabla.($this->donde!=null?' WHERE '.$this->donde:'').';';

		return $this->mysqli->query($sentencia);
}
}
