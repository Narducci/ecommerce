<?php 

$id = (isset($_GET["id"]))?$_GET["id"]:3;

$conn = mysqli_connect("localhost", "root", "root", "dbphp7");

$sql = "SELET * FROM tb_usuarios WHERE idusuario = $id";

$exec = mysqli_query($conn, $sql);

while ($resultado = mysqli_fetch_object($exec)) {

	echo $resultado->deslogin . "<br>";
} 

echo "não achei nada..."

 ?>