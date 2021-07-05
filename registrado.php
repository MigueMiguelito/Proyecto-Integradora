<html>
    <head>
    <title> REGISTRADO</title>
    <meta charset="utf-8">
        <link rel="shortcut icon" type="image/x-icon" href="delishop.ico">
        <link rel="stylesheet" href="estilosregistrado.css">
    </head>
<body>
<div class="caja1">
    <center><h1>¡BIENVENIDO A DELI SHOP!</h1></center>
    <?php
    $nombre=$_POST['nombre'];
    $sex=$_POST['sex'];
    $fecha=$_POST['fecha'];
    $edad=$_POST['edad'];
    $correo=$_POST['correo'];
    $contraseña=$_POST['contraseña'];
    
    echo ("<center><h2>¡HOLA! $nombre, ya puedes inicar sesión en Deli Shop. </center></h2>")
    ?>
    <meta charset="utf-8">
    <center><p><h2>Esperamos tengas una buena experiencia con nosotros.<a href="principal.html"><p>IR AL INICIO DELI SHOP</p></a></h2></p>
    </div>
    </body>
</html>