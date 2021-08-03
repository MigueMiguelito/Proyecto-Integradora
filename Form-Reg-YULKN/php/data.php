<?php
header('Content-Type: application/json');

require_once('php/dbp_conection.php');

$sqlQuery = "SELECT id_ganancia, Lunes, Martes, Miercoles, Jueves,Viernes FROM gananciasrep ORDER BY id_ganancia";

$result = mysqli_query($conn,$sqlQuery);

$data = array();
foreach ($result as $row) {
        $data[] = $row;
}

mysqli_close($conn);

echo json_encode($data);
?>