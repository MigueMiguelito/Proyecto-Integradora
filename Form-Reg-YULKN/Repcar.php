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
            <h1>Actualiza tus datos vehiculares</h1>
            <br>
            <h2>Datos vehiculares</h2>
            <?php
        $conexion=mysqli_connect('localhost','root','','deli_shop');         
         
        $query = 'SELECT id_repartidor,vehiculo, modelo, placas FROM vehiculos WHERE id_repartidor=29';
                 
        $result = mysqli_query($conexion,$query);
                 
        while($ver=mysqli_fetch_array($result)){
            ?>
              <div class="group">
                <input type="text" name="id" value="<?php echo $ver['id_repartidor']?>" readonly required maxlength="50"><span class="barra"></span>
                <label for="">ID</label>
            </div>
            <div class="group">
                <input type="text" name="car" value="<?php echo $ver['vehiculo']?>" required maxlength="50"><span class="barra"></span>
                <label for="">Vehiculo</label>
            </div>
            <div class="group">
                <input type="text" name="mod" value="<?php echo $ver['modelo']?>" required maxlength="50"><span class="barra"></span>
                <label for="">Modelo del Vehiculo</label>
            </div>
            <div class="group">
                <input type="text" name="pla" value="<?php echo $ver['placas']?>" required maxlength="50"><span class="barra"></span>
                <label for="">Placas del Vehiculo</label>
            </div>
                       

                    <?php 
        }

        ?>
            
            
            <div class="group-select">
                <p class="eti">Tipo de licencia</p>
                <select name="licencia" id="sex">
                    <option value="null"></option>
                    <?php
                    require_once "php/dbp_conection.php";
                    $c=new conectar();
                    $conexion=$c->conexion();
                    
                     $sql = 'SELECT tipo_licencia FROM licencias';
                    $result = mysqli_query($conexion,$sql);
                    
                    while($var=mysqli_fetch_array($result)){
                        echo '<option value="'.$var[tipo_licencia].'">'.$var[tipo_licencia].' </option>';
                    }
                    ?>
                </select>
            </div>
            <div>
                <button class="btn" id="registro" name= "registrar">Cambiar</button>
            </div>

        </div>
        <div>
<a class="btn" href="http://localhost/form-reg-yulkn/Repindex.php">Cancelar</a>
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
				url:"php/dbp_upt_car.php",
				success:function(r){

					if(r==1){
                        alert("Actualizados correctamente");
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