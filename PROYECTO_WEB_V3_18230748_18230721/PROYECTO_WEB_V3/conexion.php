<?php
try{
    $conexion=mysqli_connect("localhost:3304","root","Luispozos12","bd_sipuve");
}catch(Exception $e){
    echo "ERROR".$e->getMessage();
}
?>