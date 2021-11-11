<?php
//http://localhost/plb/Proyecto_Integradora_SFJE/index.php
$conexion=mysqli_connect('us-cdbr-east-04.cleardb.com','b4ff24aaa4bb61','a63d9274','heroku_4025336ab2aaf31');

	$name=$_POST['name'];
	$comment=$_POST['comment'];

	$sql="INSERT into comentarios (name,comment)
			values ('$name','$comment')";
	echo mysqli_query($conexion,$sql);
?>