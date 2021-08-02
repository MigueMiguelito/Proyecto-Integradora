<?php 
	
	require_once "php/dbp_conection.php";
	$obj= new conectar();
	$conexion=$obj->conexion();

	$sql="SELECT * from repartidor where correo_electronico='yulisai@gmail.com'";
	$result=mysqli_query($conexion,$sql);
	$validar=0;
	if(mysqli_num_rows($result) > 0){
		$validar=1;
	}
 ?>
 
<!DOCTYPE html>

<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>DeliShop&reg; - Iniciar sesión</title>
    <link rel="shortcut icon" type="img/x-icon" href="content/assets/logoD.png">
    <link rel="stylesheet" type="text/css" href="css/stylog.css" media="screen">
    <link rel="stylesheet" href="css/fontello.css">
    <script src="JS/functions_valid.js"></script>
    <script src="JS/jquery-3.2.1.min.js"></script>

    

</head>


<body>
    <form id="formlog">
        <p>
            <img id="Logo" src="content/assets/logoD.png" alt="DeliShop" width="60">

        </p>
        <br>
        <div class="form">
            <h1>Iniciar Sesión</h1>
            <br>

            <div class="group">
                <input type="email"  name="cus_email" required maxlength="80" autocomplete="email"><span class="barra"></span>
                <label class="icon-mail" for="">E-mail</label>
            </div>

            <div class="group">
                <input type="password"   name="cus_pass" required maxlength="32" minlength="8" autocomplete="new-password"><span class="barra"></span>
                <label class="icon-usuario-comprobar" for="">Contrase&ntilde;a</label>
            </div>
            
            <div>
                <button class="btn" id="entrar" type="submit">Entrar</button>
            </div>
           
           <?php  if(!$validar): ?>
           <p>¿No tienes una cuenta?</p> 
          
           <a href="http://localhost/form-reg-yulkn/form-rep.html" class="btn2">Registrate</a>
            <?php endif; ?>
        </div>
    </form>
    
</body>
</html>
<script type="text/javascript">
    $(document).ready(function(){
        $('#entrar').click(function(){
            vacio=validarFormVacio('formlog');

            if(vacio > 0){
                alert("Los campos correo electronico y contraseña no deben de estar vacios");
                return false;
            }

            datos=$('#formlog').serialize();
            $.ajax({
                type:"POST",
                data:datos,
                url:"php/dbp_login.php",
                success:function(r){

                    if(r==1){
                        window.location="Repindex.php";
                    }else{
                        alert('No se ha podido acceder');
                    }
                }
            });
        });
    });

</script>
