<?php
require_once 'BaseModel.php';

class Blog extends BaseModel {

	public function __construct() {
		parent::__construct();
	}

    // Obtener Categorias
	public function getCategories() {
        // $db = new ModeloBase();
        $db = new BaseModel();
		$query = "SELECT * FROM categorias ORDER BY categoria";
		$resultado = $db->getAll($query);
		return $resultado;
	}

    // Salvar Publicacion
	public function savePublication($data) {
		$db = new BaseModel();
		try {
			$insert = $db->insert('articulos', $data);
			if ($insert == true) {
				$_SESSION['message'] = 'Artículo publicado';
			}
		} catch (PDOException $e) {
			$_SESSION['message'] = $e->getMessage();
		}
	}

    // Mmostrar Articulos
	public function showArticles($tipo, $limite) {
		$db = new BaseModel();
		$query = "SELECT articulos.*, usuarios.username, categorias.categoria FROM articulos
							LEFT JOIN usuarios ON usuarios.id = articulos.publicado_por
							LEFT JOIN categorias ON categorias.id = articulos.id_categoria";
		if ($tipo == 'r') {
			$query.=" WHERE tipo = 'r' ";
		} else if ($tipo == 'p'){
			$query.=" WHERE tipo = 'p' ";
		}

		$query .= " ORDER BY fecha_creacion LIMIT ".$limite;

		$resultado = $db->getAll($query);
		return $resultado;
	}

    // Buscar Articulos
	public function searchArticles($cadena, $limite) {
		$db = new BaseModel();
		$query = "SELECT articulos.*, usuarios.username, categorias.categoria FROM articulos
							LEFT JOIN usuarios ON usuarios.id = articulos.publicado_por
							LEFT JOIN categorias ON categorias.id = articulos.id_categoria
							WHERE titulo LIKE '%".$cadena."%'";

		$resultado = $this->getAll($query);
		return $resultado;
	}
    // obtenerArticulo
	public function getArticle($slug) {
		$db = new BaseModel();
		$query = "SELECT articulos.*, usuarios.username, categorias.categoria FROM articulos
							LEFT JOIN usuarios ON usuarios.id = articulos.publicado_por
							LEFT JOIN categorias ON categorias.id = articulos.id_categoria
							WHERE slug = '".$slug."'";
		$resultado = $db->getAll($query);
		return $resultado;
	}

    // obtenerIdArticulo
	public function getIdArticle($slug) {
		$db = new BaseModel();
		$query = "SELECT id FROM articulos WHERE slug = '".$slug."'";
		$resultado = $db->getAll($query);
		return $resultado;
	}

    //  guardarComentario
	public function saveComment($data) {
		$db = new BaseModel();
		try {
			$insert = $db->insert('comentarios', $data);
		} catch (PDOException $e) {
			echo $e->getMessage();
		}
	}

    // obtenerComentarios
	public function getComment($id_articulo) {
		$db = new BaseModel();
		$query = "SELECT * FROM comentarios
				  LEFT JOIN usuarios ON usuarios.id = comentarios.id_usuario
				  WHERE id_articulo = '".$id_articulo."'";
		$resultado = $db->getAll($query);
		return $resultado;
	}

}
