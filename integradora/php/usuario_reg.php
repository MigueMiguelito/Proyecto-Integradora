
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css/estilos_menu.css">
    </head>
    <body class="fondo">
      <img class="izquierda" src="imagenes/backgr.jpg">
      <img class="logos" src="imagenes/logoprueba.png"> 

      <section class="seccion_uno">
        <h2 class="h2u">Registra un nuevo platillo</h2>
        <form class="formulario_dos" action="registro_menu.html" method="POST">
          <label class="nombre" >Nombre del platillo:</label>
            <input type="text" class="imenu" name="nom"><br>
          <label class="costos">Costo:</label>
            <input type="number" class="imenu" name="cost"><br>
          <label class="description" >Descripción:</label>
            <input type="text" class="imenu" name="desc"><br>
          <label class="emenu">Ingredientes:</label>
            <input type="text" class="imenu" name="ing"><br>
          <label class="filea">Imagen del platillo</label>
            <input type="file" class="inimage" name="imagen"> 
            <input type="submit" value="enviar"> 

        </form>
        <?php $ima=$_POST['imagen']; echo "<img href=$ima>"; ?>
      </section>
    </body>
</html>