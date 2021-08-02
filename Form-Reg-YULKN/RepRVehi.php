<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Repartidor - Registro</title>
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
            <h1>Registra tu vehiculo</h1>
            <br>
            <h2>Datos Vehiculares</h2>
            <?php
        $conexion=mysqli_connect('localhost','root','','deli_shop');         
         
        $query = 'SELECT id_repartidor FROM repartidor WHERE id_repartidor=30';
                 
        $result = mysqli_query($conexion,$query);
                 
        while($ver=mysqli_fetch_array($result)){
            ?>
            <div class="group">
                <input type="text" name="id" required value="<?php echo $ver['id_repartidor']?>" maxlength="50"><span class="barra"></span>
                <label for="">ID</label>
            </div>
            <?php
        }
            ?>
            <div class="group">
                <input type="text" name="car" required maxlength="50"><span class="barra"></span>
                <label for="">Vehiculo</label>
            </div>
            <div class="group">
                <input type="text" name="mod"  required maxlength="50"><span class="barra"></span>
                <label for="">Modelo del Vehiculo</label>
            </div>
            <div class="group">
                <input type="text" name="pla" required maxlength="50"><span class="barra"></span>
                <label for="">Placas del Vehiculo</label>
            </div>
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
                <button class="btn" id="registro" name= "registrar">Registrar</button>
                <button class="btn" onclick="location.href='http://localhost/form-reg-yulkn/Repindex.php'" >Cancelar</button>
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
				url:"php/dbp_reg_car.php",
				success:function(r){

					if(r==1){
                        alert("Ha sido registrado correctamente");
					}else{
						alert("Fallo al agregar :(");
					}
				}
			});
		});
	});



</script>