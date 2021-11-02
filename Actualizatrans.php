<?php 
include ('../Modelo/conex.php');
	$idusuario = $_POST['idUsuario'];
	$codigo = $_POST['codTransporte'];	
	$Descripcion = $_POST['descTransporte'];
	$Matricula = $_POST['matricula'];
	$Tamaño = $_POST['tamaño'];
	$Nombre = $_POST['NombreUsuario'];
	$Apellido = $_POST['ApellidoUsuario'];
	$TipoUsua = $_POST['idTipoUsuario'];
	$Cuidad  = $_POST['codCiudad'];
	$Genero = $_POST['Genero'];
	$Telefono = $_POST['CelUsua'];
	$Correo = $_POST['CorreoUsua'];



$eje = $conexion -> query("UPDATE `transporte` SET `idUsuario`='$idusuario',`codTransporte`='$codigo',`descTransporte`='$Descripcion',`matricula`='$Matricula',`tamaño`='$Tamaño',`NombreUsuario`='$Nombre',`ApellidoUsuario`='$Apellido',`idTipoUsuario`='$TipoUsua',`codCiudad`='$Cuidad',`Genero`='$Genero',`CelUsua`='$Telefono',`CorreoUsua`='$Correo'");



if ($eje) {
	echo "<script>
	alert('El registro nu puede ser  Modificado');
	location.href='../Vista/App/Admin/Otros.php';
	</script>";
}else{
	echo "<script>
	alert('El registro ha sido Modificado');
	location.href='../Vista/App/Admin/Otros.php';
	</script>";
}


?>