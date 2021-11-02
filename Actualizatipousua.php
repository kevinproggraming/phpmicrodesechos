<?php 
include ('../Modelo/conex.php');

$idtipousua = $_POST['idtipousua']; 
$tipousua = $_POST['tipousua'];



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