<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/stypedido.css" />
    <link rel="stylesheet" href="css/fontello.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <title>Pedidos</title>
</head>
<body>
<header id="main-header">
        <div class="content">
            <a class="logo-header" href="form-rep.html">
                <img src="content/assets/logoD.png" alt="DeliShop" class="ima">
            </a>
    
            <input type="checkbox" id="menu-m">
            <label class="icon-menu-alt-right" for="menu-m"></label>
    
    
            <nav class="nav">
                <ul class="list">
                    <li class="list_item">
                        <div class="list_button">
                            <img src="content/assets/user-icon.svg" class="list_img">
                            <a href="" class="nav_link">Usuario:</a>
                        </div>
                    </li>
    
                    <li class="list_item">
                        <div class="list_button">
                            <img src="content/assets/dash.svg" class="list_img">
                            <a href="" class="nav_link">Inicio</a>
                        </div>
                    </li>
    
                    <li class="list_item list_item--click">
                        <div class="list_button list_button--click">
                            <img src="content/assets/user_info.svg" class="list_img">
                            <a href="http://localhost/form-reg-yulkn/RepIndex.php" class="nav_link">Informaci&oacute;n</a>
                            <img src="content/assets/arrow.svg" class="list_arrow">
                        </div>
    
                        <ul class="list_show">
                            <li class="list_inside">
                                <a href="http://localhost/form-reg-yulkn/RepIndex.php" class="nav_link nav_link--inside">Perfil</a>
                            </li>
    
                            <li class="list_inside">
                                <a href="http://localhost/form-reg-yulkn/gananciasrep.php" class="nav_link nav_link--inside">Ganancias</a>
                            </li>
                        </ul>
    
                    </li>
    
                    <li class="list_item list_item--click">
                        <div class="list_button list_button--click">
                            <img src="content/assets/pedido.svg" class="list_img">
                            <a href="#" class="nav_link">Pedido</a>
                            <img src="content/assets/arrow.svg" class="list_arrow">
                        </div>
    
                        <ul class="list_show">
                            <li class="list_inside">
                                <a href="http://localhost/form-reg-yulkn/pedidos.php" class="nav_link nav_link--inside">Ver pedidos</a>
                            </li>
    
                            <li class="list_inside">
                                <a href="http://localhost/form-reg-yulkn/transferencias.html" class="nav_link nav_link--inside">Transferir pedido</a>
                            </li>
                        </ul>
    
                    </li>
    
                </ul>
            </nav>
    
            <script src="main.js"></script>
        </div>
    </header>
    <div class="head">
        <section class="textos-header">
            <h1>!Bienvenido Repartidor¡</h1>
            <p>Te presentamos tu pagina de perfil, aquí podras hacer distintas acciones; desde aceptar todos los Pedidos que se te han asignado, hasta tus informes de ganancias. Podras editar tu información cuando lo desees!!
            </p>
        </section>
        <div class="wave" style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none"
            style="height: 100%; width: 100%;">
            <path d="M0.00,49.98 C149.99,150.00 349.20,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z"
                style="stroke: none; fill: #fff;"></path>
        </svg></div>
    </div>

    <section class="data">

        <div class="info">
           <div class="us">
                <img src="content/assets/user.svg" alt="" width="120">
            </div>
         
        <script>$(document).ready(function() {
  var nrows = 0; var nres = 0;
     $("table tr").each(function() {
         nrows++;
     })
     $("#nrows").html(nrows);
     $(".pedidos").each(function() {
         nres++;
     })
     $("#nres").html(nres);
 });</script> 
           <h2>Tienes:<div id="nres"></div> pedidos</h2>
            <hr>
            <div class="main">
                <table id="tablePed">
                <tr class="encabezado">
                        <th scope="row">ID</th>
                        <th>Nombre</th>
                        <th>Menú</th>
                        <th>Establecimiento</th>
                        <th>Fecha de ingreso</th>
                        <th>Fecha de egreso</th>
                        <th>Calle</th>
                        <th>No. Exterior</th>
                        <th>No. interior</th>
                        <th>Colonia</th>
                        <th>Municipio</th>
                        <th>Estado</th>
                        <th>Pais</th>
                        <th>Referencia</th>
                        <th>Cantidad</th>
                        <th>Monto</th>
                        
                    </tr>
                    <?php
        $conexion=mysqli_connect('localhost','root','','deli_shop');         
         
        $query = 'SELECT id_pedido, id_cliente, id_menu, id_establecimiento, fecha_ingreso, 
        fecha_egreso, calle, num_exterior, num_interior, colonia, 
        municipio, entidad_federativa, pais, referencia, cantidad_platillo, 
        monto_total  FROM pedido WHERE id_repartidor=29';
                 
        $result = mysqli_query($conexion,$query);
                 
        while($ver=mysqli_fetch_array($result)){
            ?>
                    
                    <tr class="pedidos">
                        <td><?php echo $ver['id_pedido']?></td>
                        <td><?php echo $ver['id_cliente']?></td>
                        <td><?php echo $ver['id_menu']?></td>
                        <td><?php echo $ver['id_establecimiento']?></td>
                        <td><?php echo $ver['fecha_ingreso']?></td>
                        <td><?php echo $ver['fecha_egreso']?></td>
                        <td><?php echo $ver['calle']?></td>
                        <td><?php echo $ver['num_exterior']?></td>
                        <td><?php echo $ver['num_interior']?></td>
                        <td><?php echo $ver['colonia']?></td>
                        <td><?php echo $ver['municipio']?></td>
                        <td><?php echo $ver['entidad_federativa']?></td>
                        <td><?php echo $ver['pais']?></td>
                        <td><?php echo $ver['referencia']?></td>
                        <td><?php echo $ver['cantidad_platillo']?></td>
                        <td><?php echo $ver['monto_total']?></td>
                        
                    </tr>

                    <?php 
        }
        ?>
                </table>
               
            </div>

        </div>

    </section>

</body>
</html>