<?php
// todo lo herada de models
require_once 'models/blog.php';

class BlogController {

	public function index() {
    require_once('./views/includes/cabecera.php');
    require_once('./views/paginas/blog.php');
    require_once('./views/includes/pie.php');
	}

	// publicar
	public function post() {
		session_start();
		if ($_SESSION['id_rol'] != 1) {
			header('Location: index.php?page=login');
      die();
		} else {
			require_once('./views/includes/cabecera.php');
    	require_once('./views/admin/publicar.php');
    	require_once('./views/includes/pie.php');
		}
	}

	public function getCategories() {
		$Categories = new Blog();
		return $Categories->getCategories();
	}

	public function validarImagen($portada) {
		$directorio = 'portadas/'; #Directorio en dónde guardamos la imagen
		$archivo = $directorio.basename($portada['name']);

		#pathinfo — Devuelve información acerca de la ruta de un fichero
		$tipoArchivo = strtolower(pathinfo($archivo, PATHINFO_EXTENSION));

		$validar = getimagesize($portada['tmp_name']); #Tamalo de una imagen
		if ($validar !== false) {

			#Tamaño en bytes - Dividir 1024 por kb
			#15,000 bytes = 15kb
			if ($portada['size'] > 500000) {
				$respuesta['message'] = "El archivo es muy grande";
				$respuesta['codigo'] = 400;
				return json_encode($respuesta, JSON_PRETTY_PRINT);
			}

			#Validar formato
			if($tipoArchivo != "jpg" && $tipoArchivo != "png" && $tipoArchivo != "gif" && $tipoArchivo != "jpeg") {
    		$respuesta['message'] = "El archivo no tiene un formato válido";
				$respuesta['codigo'] = 400;
				return json_encode($respuesta, JSON_PRETTY_PRINT);
			}

			if (file_exists($archivo)) {
				$respuesta['message'] = "El archivo ya existe";
				$respuesta['codigo'] = 400;
			} else {
				$respuesta['message'] = "Es una imagen de tipo ".$validar['mime'];
				$respuesta['codigo'] = 200;
			}
		} else {
			$respuesta['message'] = "No es una imagen";
			$respuesta['codigo'] = 400;
		}
		return json_encode($respuesta, JSON_PRETTY_PRINT);
	}

	// guardarPublicacion
	public function savePublication($data) {

		$directorio = 'portadas/'; #Directorio donde guardamos las imagenes
		$portada = $data['portada'];
		$archivo = $directorio.basename($portada['name']);

		date_default_timezone_set('UTC');
		$articulo = new Blog();
		$data['publicado_por'] = $_SESSION['id_usuario'];
		$data['fecha_creacion'] = date('Y-m-d');
		$data['hora_creacion'] = date('h:i:s');
		$data['slug'] = $this->createSlug($data['titulo']); //Mi primer publicacion -> mi-primer-publicacion
		$data['portada'] = $portada['name'];
		if (move_uploaded_file($portada['tmp_name'], $archivo)) {
			return $articulo->savePublication($data);
		}
	}

	// mostrarArticulos
	public function showArticles($tipo, $limite) {
		$articulos = new Blog();
		return $articulos->showArticles('', $limite);
	}

	// leerArticulo
	public function readArticle() {
		require_once('./views/includes/cabecera.php');
    require_once('./views/paginas/leerArticulo.php');
    require_once('./views/includes/pie.php');
	}

	// obtenerArticulo
	public function getArticle($slug) {
		$articulos = new Blog();
		return $articulos->getArticle($slug);
	}

	//publicarComentario
	public function postComment($data) {
		$articulo = new Blog();
		//comentario, slug
		$data['id_usuario'] = $_SESSION['id_usuario'];
		//comentario, slug, id_usuario
		$id_articulo = $this->getIdArticle($data['slug']);
		$data['id_articulo'] = $id_articulo;
		//comentario, slug, id_usuario,id_articulo
		unset($data['slug']);
		//comentario, id_usuario,id_articulo

		return $articulo->saveComment($data);

	}
 
	// obtenerComentarios
	public function getComments($slug) {
		$blog = new Blog();
		$id_articulo = $this->getIdArticle($slug);
		return $blog->getComment($id_articulo);
	}

	// resultadoBusqueda
	public function searchResult() {
		require_once('./views/includes/cabecera.php');
    require_once('./views/paginas/resultadoBusqueda.php');
    require_once('./views/includes/pie.php');
	}

	// buscarArticulos
	public function searchArticle($cadena) {
		$articulos = new Blog();
		return $articulos->searchArticles($cadena, 10);
	}

	// obtnerIdArticulo
	private function getIdArticle($slug) {
		$blog = new Blog();
		$id = $blog->getIdArticle($slug);
		foreach ($id as $r){
			return $r['id'];
		}
	}

	// crearSlug
	private function createSlug($titulo) {
		$slug = preg_replace('/[^A-Za-z0-9-]+/', '-', $titulo);
   	return $slug;
	}


}