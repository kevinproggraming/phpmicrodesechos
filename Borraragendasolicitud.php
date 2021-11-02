<?php
include ('../Modelo/conex.php');
header( 'Content-Type: text/html; charset=UTF-8'); 
session_start(); 
error_reporting(0); 

$id = $_REQUEST['id'];

			$del = $conexion -> query("DELETE FROM agendasolicitud WHERE Cod_agendasolicitud = '$id' ");
				if ($del) {
					echo "<script>
					location.href='../Vista/App/Admin/Agendasolicitud.php#Confirma';
					</script>";
				}else{
					echo "<script>
					alert('El registro no pudo ser eliminado');
					location.href='../Vista/App/Admin/Agendasolicitud.php';
					</script>";

				}


		
 ?>