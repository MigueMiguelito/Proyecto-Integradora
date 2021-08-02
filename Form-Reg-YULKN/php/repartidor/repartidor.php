<?php
class repartidor{
    public function regDeliver($datos){
        $c=new conectar();
        $conexion=$c->conexion();

        $insert="INSERT INTO repartidor( nombre, 
			ap_paterno, 
			ap_materno, 
			correo_electronico, 
			password,
			fecha_nacimiento, 
			sexo, 
			tipo_licencia, 
			vehiculo, 
			experiencia_laboral, 
			edad) 
			VALUES ('$datos[0]',
			'$datos[1]',
			'$datos[2]',
			'$datos[3]',
			MD5('$datos[4]'),
			'$datos[5]',
			'$datos[6]',
			'$datos[7]',
			'$datos[8]',
			'$datos[9]',
			$datos[10])";

        return mysqli_query($conexion,$insert);
    }
     public function uptDeliver($datos){
        $c=new conectar();
        $conexion=$c->conexion();

        $insert="UPDATE repartidor SET nombre='$datos[0]', 
                                       ap_paterno='$datos[1]', 
                                       ap_materno='$datos[2]',
                                       sexo='$datos[3]', 
                                       correo_electronico='$datos[4]',
                                       experiencia_laboral='$datos[5]',
                                       fecha_nacimiento='$datos[6]',
                                       edad='$datos[7]' 
                                       WHERE id_repartidor=29";

        return mysqli_query($conexion,$insert);
    }
    
     public function uptCDeliver($datos){
        $c=new conectar();
        $conexion=$c->conexion();

        $insert="UPDATE vehiculos SET vehiculo='$datos[0]', 
                                       modelo='$datos[1]', 
                                       placas='$datos[2]',
                                       tipo_licencia='$datos[3]'
                                       WHERE id_repartidor=29";

        return mysqli_query($conexion,$insert);
    }
    public function loginUser($datos){
        $c=new conectar();
        $conexion=$c->conexion();
        $password=md5($datos[1]);
        
        $_SESSION['repartidor']=$datos[0];
        $_SESSION['idrep']=self::repID($datos);
        
        $select="SELECT * FROM repartidor WHERE correo_electronico='$datos[0]' AND password='$password'";
        
        $result=mysqli_query($conexion,$select);
        
        if(mysqli_num_rows($result) > 0){
            return 1;
        }else{
            return 0;
        }
    }
    
    
    public function repID($datos){
       $c=new conectar();
        $conexion=$c->conexion();
    
        $password=md5($datos[1]);
        
         $sel="SELECT id_repartidor FROM repartidor WHERE correo_electronico='$datos[0]' AND password='$password'";
        $result=mysqli_query($conexion,$sel);
        
        return mysqli_fetch_row($result)[0];
    }
    
    public function regCar($datos){
        $c=new conectar();
        $conexion=$c->conexion();

        $insert="INSERT INTO vehiculos(id_repartidor,vehiculo, 
			modelo, 
			placas, 
			tipo_licencia) 
			VALUES ($datos[0],
			'$datos[1]',
			'$datos[2]',
			'$datos[3]',
            '$datos[4]')";

        return mysqli_query($conexion,$insert);
    }
    
    

}

?>