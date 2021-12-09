<?php
    
    function tieneExistencia($id, $cantidad){
        include("conexion.php");
        $query="SELECT EXISTENCIA FROM PRODUCTO WHERE ID_PRODUCTO='".$id."';";
        $res=mysqli_query($conexion, $query);
        $existencia=0;
        if ($sen=mysqli_fetch_array($res)) {
            $existencia=$sen[0];
        }
        return $existencia >= $cantidad;
    }
?>