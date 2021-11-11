<?php
//http://localhost/plb/Proyecto_Integradora_SFJE/index.php
$conexion=mysqli_connect('localhost','root','','testimonios');

	$name=$_POST['name'];
	$comment=$_POST['comment'];

	$sql="INSERT into comentarios (name,comment)
			values ('$name','$comment')";
	echo mysqli_query($conexion,$sql);
?>