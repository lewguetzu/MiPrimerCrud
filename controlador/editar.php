<?php

include "../clases/conexion.php";
include "../clases/pais.php";

$objConexion = new conexion();
$objPais = new pais();

$Conexion = $objConexion->conectar();
echo $objPais->editar($Conexion, $_POST['id'], $_POST['nombre'], $_POST['poblacion'], 
$_POST['moneda'], $_POST['capital']);

echo "<br><a href='../index.html'><button>Volver Al menu</button></a>";