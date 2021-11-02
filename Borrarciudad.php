<?php
include ('../Modelo/conex.php');
header( 'Content-Type: text/html; charset=UTF-8'); 
session_start(); 
error_reporting(0); 

$id = $_REQUEST['id'];

			$del = $conexion -> query("DELETE FROM ciudad WHERE Cod_ciudad = '$id' ");
				if ($del) {
					echo "<script>
					location.href='../Vista/App/Admin/Ciudad.php#Confirma';
					</script>";
				}else{
					echo "<script>
					alert('El registro no pudo ser eliminado');
					location.href='../Vista/App/Admin/Ciudad.php';
					</script>";

				}


		
 ?>