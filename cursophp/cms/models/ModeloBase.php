<?php

require_once './libs/DB.php';

class ModeloBase extends DB {
	public $db;

	public function __construct() {
		$this->db = new DB();
	}

	public function insertar($tabla, $datos) {
    $llaves = array_keys($datos);
    $sql = "INSERT INTO $tabla (".implode(", ", $llaves).") \n";
    $sql .= "VALUES ( :".implode(", :",$llaves).")";
    $q = $this->db->prepare($sql);
    return $q->execute($datos);
	}

}
