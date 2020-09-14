<?php

if(!defined('CONTROLADOR'))
	exit;

require_once 'conexion.php';

//esta es la clase usuario
class usuario{

//declaro los atributos de la clase usuario
private $id;//este atributo es autoincrementable en la BD, entonces no tiene funcion set en los metodos
private $nombre1;
private $nombre2;
private $ape1;
private $ape2;
private $cuenta;
private $clave;



//declaro una constante con el valor de "usuario"
const TABLA = "usuario";



//estas son las funciones get
public function getid(){

	return $this->id;
}

//

public function getnombre1(){

return $this->nombre1;

}
//

public function getnombre2(){

	return $this->nombre2;
}
//

public function getape1(){

	return $this->ape1;
}
//

public function getape2(){

	return $this->ape2;
}
//

public function getcuenta(){

	return $this->cuenta;
}

public function getclave(){

	return $this->clave;
}
//


//acá empiezan las funciones set de la clase
public function setnombre1($nombre1){

	$this->nombre1 = $nombre1;
}
//

public function setnombre2($nombre2){

	$this->nombre2 = $nombre2;
}
//

public function setape1($ape1){

	$this->ape1 = $ape1;
}
//

public function setape2($ape2){

	$this->ape2 = $ape2;
}
//


public function setcuenta($cuenta){

	$this->cuenta = $cuenta;
}

//
public function setclave($clave){

	$this->clave = $clave;
}



//este es el metodo constructor, recibiendo como parámetros todos los atributos de la clase
public function __construct($nombre1, $nombre2, $ape1, $ape2, $cuenta, $clave, $id = null){

	$this->id = $id;
	$this->nombre1 = $nombre1;
	$this->nombre2 = $nombre2;
	$this->ape1 = $ape1;
	$this->ape2 = $ape2;
	$this->cuenta = $cuenta;
	$this->clave = $clave;

}


//esta es el metodo guardarUsuario
public function guardarUsuario(){

	$conexion = new conexion();//instancio la clase conexion, que es nuestra conexion a la BD

	if ($this->id) {//para modficar

	
	$consulta = $conexion->prepare('UPDATE '.self::TABLA.' SET nombre1_usuario=:nombre1, nombre2_usuario=:nombre2, apellido1_usuario=:ape1, apellido2_usuario=:ape2, cuenta_usuario=:cuenta, clave_usuario=:clave WHERE id_usuario=:id');

	$consulta->bindparam(':id', $this->id);
	$consulta->bindparam(':nombre1', $this->nombre1);
	$consulta->bindparam(':nombre2', $this->nombre2);
	$consulta->bindparam(':ape1', $this->ape1);
	$consulta->bindparam(':ape2', $this->ape2);
	$consulta->bindparam(':cuenta', $this->cuenta);
	$consulta->bindparam(':clave', $this->clave);

	$consulta->execute();



	}
	else{//para insertar


	//query para insertar, en la variable consulta como en modificar
		$consulta = $conexion->prepare('INSERT INTO '.self::TABLA.'(nombre1_usuario, nombre2_usuario, apellido1_usuario, apellido2_usuario, cuenta_usuario, clave_usuario) VALUES(:nombre1, :nombre2, :ape1, :ape2, :cuenta, :clave)');

		//los parametros para el query, sin el id porque el id no se modifica
		$consulta->bindparam(':nombre1', $this->nombre1);
		$consulta->bindparam(':nombre2', $this->nombre2);
		$consulta->bindparam(':ape1', $this->ape1);
		$consulta->bindparam(':ape2', $this->ape2);
		$consulta->bindparam(':cuenta', $this->cuenta);

		
		$consulta->bindparam(':clave', $this->clave);

		$consulta->execute();
		$this->id = $conexion->lastInsertId();


$conexion = null;

}




}//fin del metodo guardarUsuario



public function validarIngreso(){


$conexion = new conexion();

$consulta = $conexion->prepare('SELECT * FROM usuario WHERE cuenta_usuario = :cuenta AND clave_usuario = :clave');

$consulta->bindparam(':cuenta', $this->cuenta);
$consulta->bindparam(':clave', $this->clave);

$consulta->execute();


if ($consulta->rowCount()>0) {
	

	while ($fila = $consulta->fetchObject()) {
		
		$_SESSION['cuenta_usuario'] = $fila->cuenta_usuario;
		$_SESSION['clave_usuario'] = $fila->clave_usuario;

		return TRUE;

	}

}
else{
		return FALSE;
	}



}//fin del metodo validarIngreso


//metodo para cargar los usuarios
public function cargarUsuarios(){

	$conexion = new conexion();
	$consulta = $conexion->prepare('SELECT id_usuario, nombre1_usuario, nombre2_usuario, apellido1_usuario, apellido2_usuario, cuenta_usuario, clave_usuario FROM '.self::TABLA.' ORDER BY id_usuario');

	$consulta->execute();

	$registros = $consulta->fetchAll();
	return $registros;


}//


//funcion para buscar usuario
public function buscarUsuario($id){

	$conexion = new conexion();

	$consulta = $conexion->prepare('SELECT nombre1_usuario, nombre2_usuario, apellido1_usuario, apellido2_usuario, cuenta_usuario, clave_usuario FROM '.self::TABLA.' WHERE id_usuario= :id');

	$consulta->bindparam(':id', $id);

	$consulta->execute();

	$registros = $consulta->fetchAll();


if ($registros) {
	return $registros;
}
else{
	return FALSE;
}


	
}//


//funcion para eliminar usuario
public function eliminarUsuario($id){

	$conexion = new conexion();

	$consulta = $conexion->prepare('SELECT nombre1_usuario, nombre2_usuario, apellido1_usuario, apellido2_usuario, cuenta_usuario, clave_usuario FROM '.self::TABLA.' WHERE id_usuario= :id');

	$consulta->bindparam(':id', $id);

	$consulta->execute();

	$registros = $consulta->fetchAll();

	$consulta = $conexion->prepare('DELETE FROM '.self::TABLA.' WHERE id_usuario = :id');
	$consulta->bindparam(':id', $id);
	$consulta->execute();
}//



//funcion para modificar los datos del usuario
public function actualizarUsuario($id){

	
	


}







}









?>