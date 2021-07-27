<html>
    <head>
    <title> REGISTRADO</title>
    <meta charset="utf-8">
        <link rel="shortcut icon" type="image/x-icon" href="delishop.ico">
        <link rel="stylesheet" href="estilosregistrado.css">
    </head>
<body class="rg">
<div class="caja1">
    <p><img id="logo" src="delishop.ico" width="90" alt="DeliShop"></p>
    <h1><center>¡BIENVENIDO A DELI SHOP!</center</h1>
    <?php
    $nombre=$_POST['nombre'];
    $sexo=$_POST['sexo'];
    $fecha=$_POST['fecha'];
    $correo=$_POST['correo'];
    $contraseña=$_POST['clave1'];
    $contraseña2=$_POST['clave2'];
    
    echo ("<h2><center>¡HOLA! $nombre, ya puedes inicar sesión en Deli Shop. </center></h2>")
    ?>
    <meta charset="utf-8">
    <form action="principal.html" method="post">
    <button class="boton" name="inicio" type="submit">Llevame al inicio</button>
</form>
</div>
    </body>
</html>