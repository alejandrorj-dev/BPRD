<?php 


define('CONTROLADOR', TRUE);

require_once 'modelo/usuario.php';


$usuario = new usuario(null, null, null, null, null, null);

//si el formulario dió post
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	
	$cuenta = (isset($_POST['cuenta'])) ? $_POST['cuenta'] : null;
	$usuario->setcuenta($cuenta);

	$clave =(isset($_POST['clave'])) ? $_POST['clave'] : null;
	$usuario->setclave($clave);

	$usuario->validarIngreso();
	header('vista/usuario_login1.php');



//si los datos fueron correctos (usando el metodo validarIngreso de la clase usuario)
if ($usuario->validarIngreso() == 'TRUE') {
	
	header('Location:Inicio.php');


}
else/*si los datos no fueron correctos*/{
	echo "Error en los datos ingresados, compruebe que haya digitado bien";
	
}





}

else/*si no dió post*/{
	include 'vista/usuario_login1.php';
}




?>