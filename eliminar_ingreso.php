<?php
$var = $_POST["datos"];

$conexion=mysqli_connect("localhost","root","wayvilla","db_gallisur");

foreach ($var as $key => $value) {
  $conexion -> query("delete from ingreso_a_planta where id = ".$value);
}
$ms = "";
if(count($var) > 1){
  $ms = "Se han eliminado '".count($var)."' registros!!";
}else{
  $ms = "Se ha eliminado '".count($var)."' registro!!";
}
echo $ms;
?>
