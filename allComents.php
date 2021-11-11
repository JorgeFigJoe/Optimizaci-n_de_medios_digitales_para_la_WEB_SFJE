<?php
    $conexion=mysqli_connect('us-cdbr-east-04.cleardb.com','b4ff24aaa4bb61','a63d9274','heroku_4025336ab2aaf31');
   //$conexion = mysqli_connect('localhost','root','','testimonios');
    $myArray = array();

    $sql = "SELECT * FROM comentarios";
    $resultado = mysqli_query($conexion, $sql);
  
    while($row = $resultado->fetch_array(MYSQLI_ASSOC)) {
        $myArray[] = $row;
}
echo json_encode($myArray);    
?>