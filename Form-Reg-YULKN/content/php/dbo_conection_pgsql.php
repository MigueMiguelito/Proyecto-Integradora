<?php
$conection=pg_connect("host=localhost port:5433 dbname=negoc user=postgres password=root") or die("No se pudo conectar con la bd: ".pg_last_error());
?>