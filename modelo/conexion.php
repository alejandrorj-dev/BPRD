<?php

//esta es la clase conexion para conectarse a la BD en PHP, extendido con la clase de fabrica de PHP que es PDO
class Conexion extends PDO {

   //atributos de la clase 
   private $motor = 'mysql';
   private $servidor = 'localhost';
   private $bdatos = 'bprd1';
   private $user = 'root';
   private $contrasena = '';


   //metodo constructor de la clase
   public function __construct() {
      //Sobreescribo el método constructor de la clase PDO.
      try{
         //metodo propio de PDO
         parent::__construct($this->motor.':host='.$this->servidor.';dbname='.$this->bdatos, $this->user, $this->contrasena);



      }catch(PDOException $e){
         echo 'Ha surgido un error y no se puede conectar a la base de datos. Detalle: ' . $e->getMessage();
         exit;
      }
 

 
   } //fin del metodo
 

 



 } //fin de la clase







?>