<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Repartidor - DeliShop&reg;</title>
</head>
<link rel="stylesheet" href="css/styrep.css" />
<link rel="stylesheet" href="css/fontello.css" />
<link rel="shortcut icon" type="img/x-icon" href="content/assets/logoD.png">

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
                            <a href="#" class="nav_link">Informaci&oacute;n</a>
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
                    <li class="list_item">
                        <div class="list_button">
                            <img src="content/assets/exit.svg" class="list_img">
                            <a href="Index.html" class="nav_link">Salir</a>
                        </div>
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
            <h2>Tu información</h2>
            <hr>
            <div class="main">
                <table>
                    <?php
        $conexion=mysqli_connect('localhost','root','','deli_shop');         
         
        $query = 'SELECT id_repartidor,nombre,ap_paterno,ap_materno,correo_electronico,fecha_nacimiento,sexo,edad,experiencia_laboral FROM repartidor WHERE id_repartidor=29';
                 
        $result = mysqli_query($conexion,$query);
                 
        while($ver=mysqli_fetch_array($result)){
            ?>
                    <tr>
                        <th scope="row">ID</th>
                        <td><?php echo $ver['id_repartidor']?></td>
                    </tr>
                    <tr>
                        <th>Nombre</th>
                        <td><?php echo $ver['nombre']?></td>
                    </tr>
                    <tr>
                        <th>Apellido Paterno</th>
                        <td><?php echo $ver['ap_paterno']?></td>
                    </tr>
                    <tr>
                        <th>Apellido Materno</th>
                        <td><?php echo $ver['ap_materno']?></td>
                    </tr>
                    <tr>
                        <th>E-mail</th>
                        <td><?php echo $ver['correo_electronico']?></td>
                    </tr>
                    <tr>
                        <th>Fecha de nacimiento</th>
                        <td><?php echo $ver['fecha_nacimiento']?></td>
                    </tr>
                    <tr>
                        <th>Sexo</th>
                        <td><?php echo $ver['sexo']?></td>
                    </tr>
                    <tr>
                        <th>Edad</th>
                        <td><?php echo $ver['edad']?></td>
                    </tr>
                    <tr>
                        <th>Experiencia Laboral</th>
                        <td><?php echo $ver['experiencia_laboral']?></td>
                    </tr>

                    <?php 
        }

        ?>
                </table>
                <button onclick="location.href='http://localhost/form-reg-yulkn/Repcambiar.php'" class="btn btn-danger btn-sm">Editar Perfil</button>
            </div>

        </div>

    </section>
    <section class="car">
      <div class="info">
       <div class="us">
                <img src="content/assets/car.svg" alt="" width="120">
            </div>
            <h2>Informacion vehicular</h2>
            
            <hr>
            <div class="main">
                                <table>
                    <?php
        $conexion=mysqli_connect('localhost','root','','deli_shop');         
         
        $query = 'SELECT * FROM vehiculos WHERE id_repartidor=29';
                 
        $result = mysqli_query($conexion,$query);
                 
        while($ver=mysqli_fetch_array($result)){
            ?>
                   
                    <tr>
                        <th scope="row">Tipo de licencia</th>
                        <td><?php echo $ver['tipo_licencia']?></td>
                    </tr>
                    <tr>
                        <th>Vehiculo</th>
                        <td><?php echo $ver['vehiculo']?></td>
                    </tr>
                    <tr>
                        <th>Modelo del vehiculo</th>
                        <td><?php echo $ver['modelo']?></td>
                    </tr>
                    <tr>
                        <th>Placas de vehiculo</th>
                        <td><?php echo $ver['placas']?></td>
                    </tr>

                    <?php }?>
                </table>
                
                
                <p>
                <button onclick="location.href='http://localhost/form-reg-yulkn/Repcar.php'">Editar Datos</button>
                
                <button onclick="location.href='http://localhost/form-reg-yulkn/RepRVehi.php'" class="btn">Agregar Datos</button>
                
            </div>
        </div>
        
    </section>
    

    <footer>
        <div class="contenedor-footer">
            <div class="content-fo">
                <h4>DeliShop&reg;</h4>
                <p>Derechos reservados 2021</p>
            </div>
            <div class="content-fo">
                <h4>Correo electronico</h4>
                <p>Delishopmx@gmail.com</p>
            </div>
            <div class="content-fo">
                <h4>Telefono</h4>
                <p>1234567890</p>
            </div>
        </div>
        <h2 class="titulo-final">&copy; DeliShop | UTTEC</h2>

    </footer>
</body>

</html>
