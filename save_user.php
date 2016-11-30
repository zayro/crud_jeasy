<?php

include 'conn.php';

extract($_REQUEST);

$sql = "insert into usuarios (nombre) values ('$nombre')";
mysqli_query($conn, $sql);

echo json_encode(array(
	'id' => mysqli_insert_id($conn),
	'nombre' => $nombre
));

?>