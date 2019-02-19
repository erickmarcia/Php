<?php

require_once './lib/DB.php';

class BaseModel extends DB {
    public $db;

	public $string;


    public function  __construct(){
		$this->db = new DB();
		$this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    }

	// Esta función necesita el nombre de la tabla, y los datos 
	// que se guardaran
	public function insert($table, $data) {
		try {
			$keys = array_keys($data);
	    $sql = "INSERT INTO $table (".implode(", ", $keys).") \n";
	    $sql .= "VALUES ( :".implode(", :",$keys).")";
	    $q = $this->db->prepare($sql);
	    return $q->execute($data);
		} catch (PDOException $e) {
			$_SESSION['message'] = $e->getMessage();
		} catch (Exception $e) {
			$_SESSION['message'] = $e->getMessage();
		}
    }
    	
	// Consultar Registro
	public function queryRegistro($query) {
		try {
			$consulta = $this->db->query($query);
			if ($consulta->rowCount() == 1) {
				return $consulta;
			} else {
				return false;
			}
		} catch (PDOException $e){
			echo "Error: ".$e->getMessage();
		}
	}

	public function getAll($query) {
		try {
			return $this->db->query($query);
		} catch (PDOException $e){
			echo "Error: ".$e->getMessage();
		}
	}

}
