<?php 
include ('../Modelo/conex.php');

$tipodoc = $_POST['tipodoc']; 
$desctipdoc = $_POST['desctipdoc'];



$eje = $conexion -> query("UPDATE tipodocumento SET TipoDocumento='$tipodoc',Desc_tipodocumento='$desctipdoc' WHERE TipoDocumento = '$tipodoc'");



if ($eje) {
	echo "<script>
	alert('El registro ha sido Modificado');
	location.href='../Vista/App/Admin/TipoDoc.php';
	</script>";
}else{
	echo "<script>
	alert('El registro no pudo ser Modificado');
	location.href='../Vista/App/Admin/TipoDoc.php';
	</script>";
}

?>