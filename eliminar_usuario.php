<?php


 define('CONTROLADOR', TRUE);


require_once 'modelo/usuario.php';


$id = (isset($_REQUEST['id'])) ? $_REQUEST['id']:null;


if ($id) {

$usuario =new usuario(null, null, null, null, null, null, null);
	


$usuario->eliminarUsuario($id);


	header("Location:lista_usuarios.php");
}

else{

	echo "ERROR AL ELIMINAR AL USUARIO";
}





?>