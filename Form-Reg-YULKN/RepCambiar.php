<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Actualizar Perfil</title>
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
            <h1>Actualizar Perfil</h1>
            <br>
            <h2>Datos personales</h2>
            
            <?php
        $conexion=mysqli_connect('localhost','root','','deli_shop');         
         
        $query = 'SELECT id_repartidor,nombre,ap_paterno,ap_materno,correo_electronico,fecha_nacimiento,experiencia_laboral FROM repartidor WHERE id_repartidor=29';
                 
        $result = mysqli_query($conexion,$query);
                 
        while($ver=mysqli_fetch_array($result)){
            ?>
            <div class="group">
                <input type="text" name="nom" readonly value="<?php echo $ver['id_repartidor']?>" maxlength="50"><span class="barra"></span>
                <label for="">ID</label>
            </div>
             <div class="group">
                <input type="text" name="nom" value="<?php echo $ver['nombre']?>" required maxlength="50"><span class="barra"></span>
                <label for="">Nombre</label>
            </div>
            <div class="group">
                <input type="text" name="ap" value="<?php echo $ver['ap_materno']?>" required maxlength="50"><span class="barra"></span>
                <label for="">Apellido Paterno</label>
            </div>
            <div class="group">
                <input type="text" name="am" value="<?php echo $ver['ap_paterno']?>" required maxlength="50"><span class="barra"></span>
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
                <input type="email" name="em" value="<?php echo $ver['correo_electronico']?>" id="" required maxlength="80"><span class="barra"></span>
                <label for="">E-mail</label>
            </div>
            <div class="group">
                <input type="text" name="exp" value="<?php echo $ver['experiencia_laboral']?>" required maxlength="60"><span class="barra"></span>
                <label for="">Experiencia laboral</label>
            </div>
            <div class="group">
                <input type="date" value="<?php echo $ver['fecha_nacimiento']?>" name="fnac"><span class="barra"></span>
                <label for="">Fecha de nacimiento</label>
            </div> 
                       
                    <?php 
        }

        ?>
            
           
            <div>
                <button class="btn" id="registro" name= "registrar">Cambiar</button>
            </div>

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
				url:"php/dbp_upt.php",
				success:function(r){

					if(r==1){
                        alert("Has sido cambiado correctamente");
					}else{
						alert("Fallo al agregar :(");
					}
                    if(r==1){
                        window.location="Repindex.php";
					}else{
						alert("Fallo al agregar :(");
					}
				}
			});
		});
	});



</script>
