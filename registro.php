<?php

//http://localhost/plb/Proyecto_Integradora_SFJE/index.php
$conexion= new mysqli('us-cdbr-east-04.cleardb.com','b4ff24aaa4bb61','a63d9274','heroku_4025336ab2aaf31');

	$name=$_POST['name'];
	$comment=$_POST['comment'];

// Verificamos la conexión con el servidor MySQL
if ($conexion->connect_error) {
    die("la conexión ha fallado: " . $conexion->connect_error);
}

// sql Crea la tabla usando Lenguaje PHP
$sql = "CREATE TABLE IF NOT EXISTS comentarios (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(150) NOT NULL,
comment VARCHAR(150) NOT NULL
)";

// Se verifica si la tabla ha sido creado
if ($conexion->query($sql) === TRUE) {
    echo "la tabla comentarios ha sido creado";
} else {
    echo "Hubo un error al crear la tabla comentarios: " . $conn->error;
}

	$sql="INSERT into comentarios (name,comment)
			values ('$name','$comment')";
	echo mysqli_query($conexion,$sql);
?>