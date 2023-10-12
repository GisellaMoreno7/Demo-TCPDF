<?php
include_once "../../Utiles/funciones.php";

$datos=data_submitted();
print_r($datos);
exit;
 echo $datos["nombre"];
 echo $datos["apellido"];
 echo $datos["edad"];
 echo $datos["correo"];
 echo $datos["sobreMi"];
 echo $datos["estudios"];
 echo $datos["exp"];

?>