<?php

$conn = mysqli_connect("127.0.0.1:3306","zayro","zayro2014","crud_jeasy") or die("Error " . mysqli_error($conn)); 

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}

?>