<?php 
include ('../Modelo/conex.php');

$codciudad = $_POST['codciudad']; 
$ciudad = $_POST['ciudad'];



$eje = $conexion -> query("UPDATE ciudad SET Cod_ciudad='$codciudad',Nombreciudad='$ciudad' WHERE Cod_ciudad = '$codciudad'");
							


if ($eje) {
	echo "<script>
	alert('El registro ha sido Modificado');
	location.href='../Vista/App/Admin/Ciudad.php';
	</script>";
}else{
	echo "<script>
	alert('El registro no pudo ser Modificado');
	location.href='../Vista/App/Admin/Ciudad.php';
	</script>";
}


?>