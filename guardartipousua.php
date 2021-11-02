<?php 
include ('../Modelo/conex.php');
   /* El  usuario debiò haber presionado el botòn guardar que lo trae hasta acà--> */
   if(isset($_POST['BtnGuardar'])) {

   	 /* Creamos  unas nuevas variables con el signo $, donde almacenaremos lo que trae en los formularios en name ="idusuario", por ejemplo */
        $idtipousua = $_POST['idtipousua']; 
        $tipousua = $_POST['tipousua'];
	

	 /* Creamos la sentencia para insertar datos en la tabla  usuario, las primeras variables corresponden a las que aparecen en la estructura de la BD y despues de Values corresponde a las que creamos anteriormente */
	$ins= "INSERT INTO transporte(idtipousuario, tipo_usuario) VALUES ('$idtipousua','$tipousua')";
	
	if(mysqli_query($conexion,$ins)==TRUE) {
		echo "<script>
				location.href='../Vista/App/Admin/TipoUsuario.php';
					</script>";
			}else{
				"<script>
				alert('El registro no pudo ser guardado');
				location.href='../Vista/App/Admin/TipoUsuario.php';
					</script>";
			
  }

  mysqli_close($conexion);
 ?>