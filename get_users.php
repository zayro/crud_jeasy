<?php

include 'conn.php';

$rs = mysqli_query($conn, 'select * from usuarios');

if(!$rs){
	echo "erro al ejecutar la consulta";
	}

$result = array();

while($row = mysqli_fetch_object($rs)){
	
	array_push($result, $row);
}

echo json_encode($result);

?>