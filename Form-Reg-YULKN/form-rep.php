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
    <title>DeliShop&reg; - Registro</title>
    <link rel="stylesheet" href="css/styformR.css">
    <link rel="shortcut icon" type="img/x-icon" href="content/assets/logoD.png">
    <script src="JS/functions_valid.js"></script>
    <script src="JS/jquery-3.2.1.min.js"></script>
</head>

<body>
    <!-- enctype="multipart/form-data" -->
    <form id="formreg" >
        <p>
            <img id="Logo" src="content/assets/logoD.png" alt="DeliShop" width="60">

        </p>
        <br>
        <div class="form">
            <h1>Registrate</h1>
            <br>
            <h2>Datos personales</h2>
            <div class="group">
                <input type="text" name="nom" required maxlength="50"><span class="barra"></span>
                <label for="">Nombre</label>
            </div>
            <div class="group">
                <input type="text" name="ap"  required maxlength="50"><span class="barra"></span>
                <label for="">Apellido Paterno</label>
            </div>
            <div class="group">
                <input type="text" name="am" required maxlength="50"><span class="barra"></span>
                <label for="">Apellido Materno</label>
            </div>
            <div class="group-select">
                <p class="eti">Sexo</p>
                <select name="genero" id="sex">
                    <option value="null"></option>
                    <option value="M">Masculino</option>
                    <option value="F">Femenino</option>
                </select>
            </div>
            <div class="group">
                <input type="email" name="em" id="" required maxlength="80"><span class="barra"></span>
                <label for="">E-mail</label>
            </div>
            <div class="group">
                <input type="text" name="exp" required maxlength="60"><span class="barra"></span>
                <label for="">Experiencia laboral</label>
            </div>
            <div class="group">
                <input type="date" name="fnac"><span class="barra"></span>
                <label for="">Fecha de nacimiento</label>
            </div> 
            <div class="group">
                <input type="password" name="pass" id="pass" required maxlength="32" minlength="8"><span class="barra"></span>
                <label for="">Contrase&ntilde;a</label>
            </div>
            <div class="group">
                <input type="password" name="nomps" id="nomps" required maxlength="32" minlength="8"><span class="barra"></span>
                <label for="">Confirma tu contrase&ntilde;a</label>
            </div>
            <!-- <div class="group-select">
                <p class="eti">Imagen de perfil</p>
                <input type="file" class="perfil_img" name="imgage" id="" required><span class="barra"></span>
            </div> -->
            <div>
                <button class="btn" id="registro" name= "registrar">Registrarme</button>
            </div>
            <?php
            //if(!$validar):
            ?> 
            <p>¿Ya tienes una cuenta?</p> <a href="http://localhost/form-reg-yulkn/login.php" class="log">Inicia Sesión</a>
<?php
//endif;
?>
        </div>
    </form>
</body>
</html>
<script type="text/javascript">
	$(document).ready(function(){
		$('#registro').click(function(){

			vacios=validarFormVacio('formreg');

			if(vacios > 0){
				alert("Debes llenar todos los campos!!");
				return false;
			}

			datos=$('#formreg').serialize();
			$.ajax({
				type:"POST",
				data:datos,
				url:"php/dbp_reg.php",
				success:function(r){

					if(r==1){
                        alert("Has sido registrado correctamente");
					}else{
						alert("Fallo al agregar :(");
					}
                    if(r==1){
                        window.location="Login.php";
					}else{
						alert("Fallo al redireccionar :(");
					}
				}
			});
		});
	});



</script>
