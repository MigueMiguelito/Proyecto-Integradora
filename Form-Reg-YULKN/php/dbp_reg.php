<?php
require_once "dbp_conection.php";
require_once "repartidor/repartidor.php";



$naci = new DateTime($_POST["fnac"]);
$ftod = new DateTime();
$edad = $ftod->diff($naci);
$edad_fin=$edad->y;

$obj = new repartidor();

$datos=array(
$_POST["nom"],
$_POST["ap"],
$_POST["am"], 
$_POST["em"],
$_POST["pass"],
$_POST["fnac"],
$_POST["genero"],
$_POST["exp"],
$edad_fin);

echo $obj->regDeliver($datos);

?>