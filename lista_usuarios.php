<?php

define("CONTROLADOR", TRUE);

require_once 'modelo/usuario.php';

$usuario = usuario::cargarUsuarios();

require_once 'vista/lista_usuarios.php';



?>