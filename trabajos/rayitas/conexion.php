<?php 
$direccion="localhost";
$usuario="erika_trabajos";
$clave="vespucio13";
$nombre_bd="erika_trabajos";

$conn = new mysqli($direccion, $usuario, $clave, $nombre_bd);

/*if ($conn->connect_error) {
    die('Error de Conexión (' . $conn->connect_errno . ') '
   	. $conn->connect_error);
} else {
	echo 'Éxito...' . $conn->host_info . "\n";
	}*/
	
function fechita($fecha,$t=1){
	$meses=array(enero,febrero,marzo,abril,mayo,junio,julio,agosto,septiembre,octubre,noviembre,diciembre);
	list($fecha,$hora)=explode(" ",$fecha);
	list($ano,$mes,$dia)=explode("-",$fecha);
	if($t==1){
		return "$dia/".$meses[$mes-1]."/$ano";
	} else {
		return "$dia/$mes/$ano";
	}
}

if(!isset($_SESSION))session_start();
?>