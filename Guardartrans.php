
<?php 
include ('../Modelo/Conex.php');
   /* El  usuario debiò haber presionado el botòn guardar que lo trae hasta acà--> */
   if(isset($_POST['BotonGuardar'])) {


   	 /* Creamos  unas nuevas variables con el signo $, donde almacenaremos lo que trae en los formularios en name ="idusuario", por ejemplo */
	$idusuario = $_POST['id'];
	$codigo = $_POST['codigo'];
	$Descripcion= $_POST['descripcion'];
	$Matricula= $_POST['matricula'];
	$Tamaño = $_POST['tamaño'];
	$Nombre = $_POST['Nombre'];
	$Apellido = $_POST['Apellido'];
	$TipoUsua = $_POST['tipousuario'];
	$Cuidad  = $_POST['ciudad'];
	$Sexo = $_POST['genero'];
	$Telefono = $_POST['celular'];
	$Correo = $_POST['correo'];

	 /* Creamos la sentencia para insertar datos en la tabla  usuario, las primeras variables corresponden a las que aparecen en la estructura de la BD y despues de Values corresponde a las que creamos anteriormente */
	$ins= "INSERT INTO `transporte`(`idUsuario`, `codTransporte`, `descTransporte`, `matricula`, `tamaño`, `NombreUsuario`, `ApellidoUsuario`, `idTipoUsuario`, `codCiudad`, `Genero`, `CelUsua`, `CorreoUsua`) VALUES ('$idusuario','$Matricula','$Descripcion','$Matricula','$Tamaño','$Nombre','$Apellido','$TipoUsua','$Cuidad','$Sexo','$Telefono','$Correo')";
	
	if(mysqli_query($conexion,$ins)==TRUE) {
		echo "<script>
		        alert('El registro ha sido guardado');
				location.href='../Vista/App/Admin/Otros.php';
					</script>";
			}else{
				"<script>
				alert('El registro no pudo ser guardado');
				location.href='../Vista/App/Admin/Otros.php';
					</script>";
			}
  }

  mysqli_close($conexion);
 ?>
