<?php
include ('../Modelo/conex.php');
header( 'Content-Type: text/html; charset=UTF-8'); 
session_start(); 
error_reporting(0); 

$id = $_REQUEST['id'];

			$del = $conexion -> query("DELETE FROM `transporte`
			 = '$id' ");
			if ($del) {
				echo "<script>
                alert('El registro no pudo ser eliminado');
                location.href='../Vista/App/Admin/Otros.php';
                </script>";
			}else{
				
                echo "<script>
                alert('El registro se ha eliminado correctamente');
                location.href='../Vista/App/Admin/Otros.php';
                </script>";

			}



		
 ?>