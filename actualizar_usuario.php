<?php 


define('CONTROLADOR', TRUE);



require_once 'modelo/usuario.php';




$id = (isset($_REQUEST['id'])) ? $_REQUEST['id']: null;


if ($id) {
	$usuario = new usuario(null, null, null, null, null, null, null);
	$usuario->buscarUsuario($id);
	
}
else{

$usuario = new usuario(null, null, null, null, null, null, null);

}

		
		




if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	

$nombre1 = (isset($_POST['nom1'])) ? $_POST['nom1'] : null;//variable primernombre (ahora nombre1) que es igual a si existe el input de la vista con el id "nom1" y esta vacio
$usuario->setnombre1($nombre1);//en el metodo setnombre1 de la clase usuario se le ingresa la variable $primernombre

$nombre2 = (isset($_POST['nom2'])) ? $_POST['nom2'] : null;
$usuario->setnombre2($nombre2);

$ape1 = (isset($_POST['ape1'])) ? $_POST['ape1'] : null;
$usuario->setape1($ape1);

$ape2 = (isset($_POST['ape2'])) ? $_POST['ape2'] : null;
$usuario->setape2($ape2);

$cuenta = (isset($_POST['cuenta'])) ? $_POST['cuenta'] : null;
$usuario->setcuenta($cuenta);

$clave = (isset($_POST['clave'])) ? $_POST['clave'] : null;
$usuario->setclave($clave);


$usuario->guardarUsuario();
header('Location:lista_usuarios.php');


}
else{
	include 'vista/actualizar_usuario.php';
}



	






















?>