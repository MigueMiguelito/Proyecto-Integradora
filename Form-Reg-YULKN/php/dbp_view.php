<?php
include("dbp_conection.php");

$query = 'SELECT * FROM repartidor' ;
$result = pg_query($query) or die('La consulta falló: ' . pg_last_error());


echo("<h2> Las épocas registradas son: </h2> <br/>");
echo "<table>\n";
while ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
    echo "\t<tr>\n";
    foreach ($line as $col_value) {
		echo "<td>$col_value</td>\n";    }
    echo "\t</tr>\n";
}
echo "</table>\n";

pg_free_result($result);

pg_close($conexion);


?>