<?php

    include "clases/conexion.php";
    include "clases/pais.php";

    $objConexion = new conexion();
    $objPais = new pais();

    $conexion = $objConexion->conectar();
    $datosPais = $objPais->consultarId($conexion, $_GET['id']);
    
    $nombre;
    $poblacion;
    $moneda;
    $capital;
    $id;

    while($pais = mysqli_fetch_array($datosPais)){
        $nombre = $pais['nombre'];
        $poblacion = $pais['poblacion'];
        $moneda = $pais['moneda'];
        $capital = $pais['capital'];
        $id = $pais['id_pais'];

    }


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
    <form action="controlador/editar.php" method="POST">

        <input type="hidden" name="id" value=<?php echo "$id"?>>
        <label for="">Nombre </label><input type="Text" value="<?php echo $nombre; ?>" name="nombre" id="nombre"><br>
        <label for=""></label>Poblacion </label><input type="Bigint" value="<?php echo $poblacion; ?>" name="poblacion" id="poblacion"><br>
        <label for=""></label>Moneda </label><input type="Text" value="<?php echo $moneda; ?>" name="moneda" id="moneda"><br>
        <label for=""></label>Capital</label><input type="Text" value="<?php echo $capital; ?>" name="capital" id="capital"><br>

        <input type="Submit" name="Editar" value="Editar">
        <br><a href='../index.html'><button>Volver al Menu</button></a>
</form>
</body>
</html>