<?php 

require_once 'modelo/conexion.php';

require_once 'controlador/plantilla.controlador.php';
require_once 'controlador/categorias.controlador.php';


require_once 'modelo/categorias.modelo.php';


$plantilla = new ControladorPlantilla();
$plantilla -> ctrPlantilla();