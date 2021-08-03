<?php
require_once "dbp_conection.php";
require_once "repartidor/repartidor.php";

$obj = new repartidor();

$datos=array(
$_POST["id"],
$_POST["car"],
$_POST["mod"],
$_POST["pla"],
$_POST["licencia"]);

echo $obj->regCar($datos);

?>