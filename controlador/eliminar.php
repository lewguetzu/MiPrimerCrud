<?php

include '../clases/conexion.php';
include '../clases/pais.php';

$objConexion = new conexion();
$objPais = new pais();

$conexion = $objConexion->conectar();
echo $objPais->eliminar($conexion, $_GET['id']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <br><a href='../index.html'><button>Volver al Menu</button></a>
</body>
</html>

