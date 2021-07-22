<?php
include("dbo_conection_pgsql.php");

if(isset($_POST["registrar"]))
{
    $name=$_POST["nom"];
    $surna=$_POST["ap"];
    $lastna=$_POST["am"];
    $email=$_POST["em"];
    $pass=$_POST["pass"];
 $insert="INSERT INTO repartidor(id_repartidor,nombre,ap_paterno,ap_materno,correo_electronico,password) 
 VALUES(26,'$nombre', '$surna','$lastna','$email',MD5('$pass'))";
 $res=pg_query($conection,$insert);

 if($res){
    echo "<h3> Los datos almacendados son: </h3>";
    echo "Nombre de la época: $nombre <br>";
    echo "Inicio de la época: $ap <br>";
    echo "Fin de la época: $am <br>";
 }
else{
    echo "No se pudo registrar el formulario";
}

pg_close($conection);
}


?>