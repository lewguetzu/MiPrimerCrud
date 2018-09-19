<?php

include "../clases/conexion.php";
include "../clases/pais.php";


$objConexion = new conexion();
$objPais = new pais();

$conexion = $objConexion->conectar();
echo $objPais->registrar($conexion, $_POST['nombre'], $_POST['poblacion'], $_POST['moneda'],
$_POST['capital']);

echo "<br><a href='../consultar.php'><button>Ver Registros</button></a>";