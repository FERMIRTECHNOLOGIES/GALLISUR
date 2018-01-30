<?php

require_once("conexion.php");
$datos = new Conexion();

$datos->consulta("SELECT * FROM tbl_login where user='".$_POST['valor']."'");
$row=$datos->extraer_datos();

if($_POST['valor2']==$row['contra']){
  $respuesta["confirmacion"]="true";
      echo json_encode($respuesta);
}else{
$respuesta["confirmacion"]="false";
 echo json_encode($respuesta);
}

?>
