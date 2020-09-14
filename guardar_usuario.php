<?php

//define una constante que se llama CONTROLADOR que es igual a true
define('CONTROLADOR', TRUE);

//incluyo a la clase usuario que está en modelo
require_once 'modelo/usuario.php';

$usuario = new usuario(null, null, null, null, null, null);

//si se ejecuta el post del formulario
if($_SERVER['REQUEST_METHOD'] == 'POST'){
	
$nombre1 = (isset($_POST['nom1'])) ? $_POST['nom1'] : null;//variable primernombre (ahora nombre1) que es igual a si existe el input de la vista con el id "nom1" y esta vacio
$usuario->setnombre1($nombre1);//en el metodo setnombre1 de la clase usuario se le ingresa la variable $primernombre

$nombre2 = (isset($_POST['nom2'])) ? $_POST['nom2'] : null;
$usuario->setnombre2($nombre2);

$ape1 = (isset($_POST['ape1'])) ? $_POST['ape1'] : null;
$usuario->setape1($ape1);

$ape2 = (isset($_POST['ape2'])) ? $_POST['ape2'] : null;
$usuario->setape2($ape2);

$cuenta = (isset($_POST['cuenta'])) ? $_POST['cuenta'] : null;;
$usuario->setcuenta($cuenta);

$clave = (isset($_POST['clave'])) ? $_POST['clave'] : null;
$usuario->setclave($clave);

$usuario->guardarUsuario();
header('Location:lista_usuarios.php');

}
else{
	include 'vista/guardar_usuario.php';
}










?>