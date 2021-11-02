<?php 
include ('../Modelo/conex.php');

$codagenda = $_POST['codagenda']; 
$dia = $_POST['dia'];
$hora = $_POST['hora'];
$agenda = $_POST['agenda'];




$eje = $conexion -> query("UPDATE agenda SET Cod_agenda='$codagenda', Dia='$dia' , hora='$hora', agenda='$agenda' WHERE Cod_agenda = '$codagenda'");

if ($eje) {
	echo "<script>
	alert('El registro ha sido Modificado');
	location.href='../Vista/App/Admin/Agenda.php';
	</script>";
}else{
	echo "<script>
	alert('El registro no pudo ser Modificado');
	location.href='../Vista/App/Admin/Agenda.php';
	</script>";
}


?>