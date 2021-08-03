<?php
session_start();
require_once "dbp_conection.php";
require_once "repartidor/repartidor.php";

$obj = new repartidor();



$datos=array($_POST['cus_email'],$_POST['cus_pass']);

echo $obj->loginUser($datos);
?>