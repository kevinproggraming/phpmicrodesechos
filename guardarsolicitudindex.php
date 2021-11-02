<?php 
include ('../Modelo/conex.php');
   /* El  usuario debiò haber presionado el botòn guardar que lo trae hasta acà--> */
   if(isset($_POST['solicitud'])) {

   	 /* Creamos  unas nuevas variables con el signo $, donde almacenaremos lo que trae en los formularios en name ="idusuario", por ejemplo */
	$direccion = $_POST['direccionsolicitud'];
    $telefono = $_POST['telefonosolicitud'];
	$ciudad = $_POST['ciudadsolicitud'];
	

	 /* Creamos la sentencia para insertar datos en la tabla  usuario, las primeras variables corresponden a las que aparecen en la estructura de la BD y despues de Values corresponde a las que creamos anteriormente */
	$ins= "INSERT INTO solicitud(Direccion, Telefono, Cod_ciudad) VALUES ('$direccion','$telefono','$ciudad')";
    
	if(mysqli_query($conexion,$ins)==TRUE) {
        echo "<script>
                alert('Su solicitud fue guardada');
				location.href='../Vista/servicios.php';
					</script>";
			}else{
				"<script>
				alert('Su solicitud no pudo ser guardada');
				location.href='../Vista/servicios.php';
					</script>";
			}
  }

  mysqli_close($conexion);
 ?>