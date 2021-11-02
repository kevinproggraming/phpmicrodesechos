<?php 
include ('../Modelo/conex.php');

$codagenda = $_POST['codagendsolicitud']; 
$dia = $_POST['Tipo documento'];
$hora = $_POST['Nombre'];
$agenda = $_POST['Apellido'];
$agenda = $_POST['Telefono'];
$agenda = $_POST['Ciudad'];
$agenda = $_POST['Correo'];
$agenda = $_POST['Fecha'];
$agenda = $_POST['Hora'];
$agenda = $_POST['agendsolicitud'];




$eje = $conexion -> query("UPDATE agenda SET Cod_agenda='$codagenda', Dia='$dia' , hora='$hora', agenda='$agenda' WHERE Cod_agenda = '$codagenda'");

if ($eje) {
	echo "<script>
	alert('El registro ha sido Modificado');
	location.href='../Vista/App/Admin/Agendasolicitud.php';
	</script>";
}else{
	echo "<script>
	alert('El registro no pudo ser Modificado');
	location.href='../Vista/App/Admin/Agendasolicitud.php';
	</script>";
}


?>