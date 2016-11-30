<?php

extract($_REQUEST);

include 'conn.php';

$sql = "update usuarios set nombre='$nombre' where id=$id";
mysqli_query($conn, $sql);

echo json_encode(array(
	'id' => $id,
	'nombre' => $nombre
));
?>