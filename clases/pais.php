<?php

class pais{

    public function registrar($conexion, $nombre, $poblacion, $moneda, $capital){
        
        echo $query = " INSERT INTO pais (nombre, poblacion, moneda, capital)
        VALUES ('$nombre', '$poblacion', '$moneda', '$capital') ";
        $consulta = mysqli_query($conexion, $query);
        
        if($consulta){
            $respuesta = "Pais registrado";
        }else{
            $respuesta = " Problemas al registar";
        }
            return $respuesta;
    }

    public function consultar($conexion){
        $query = "SELECT * FROM pais";
        $consulta = mysqli_query($conexion, $query);
        return $consulta;
    }

    public function consultarId($conexion, $id){
        $query = "SELECT * FROM pais WHERE id_pais = $id";
        $consulta = mysqli_query($conexion, $query);
        return $consulta;

    }

    public function editar($conexion, $id, $nombre, $poblacion, $moneda, $capital){
        $query = "UPDATE pais SET nombre = '$nombre', poblacion = $poblacion, moneda = '$moneda',
        capital = '$capital' WHERE id_pais = $id";
        
        $consulta = mysqli_query($conexion, $query);
        if($consulta){
            $respuesta = "Pais actualizado";
        }else{
            $respuesta = "Pais al actualizar";
        }
        return $respuesta;
    }

    public function eliminar($conexion, $id){
        $query = "DELETE FROM pais WHERE id_pais = $id";
        $consulta = mysqli_query($conexion, $query);
       
        if($consulta){
            $respuesta = "Pais eliminado";
        }else{
            $respuesta = "Problemas al eliminar";
        }
        return $respuesta;

        
    }

}