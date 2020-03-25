<?php
$usuario = "";
$passwd = "";
$database = "";
$conexion = mysql_connect("localhost",$usuario,$passwd);
mysql_select_db($database);

$nombre = $_POST['nombre'] ? "'".$_POST['nombre']."'" : "NULL";
$apellidos = $_POST['apellidos'] ? "'".$_POST['apellidos']."'" : "NULL";
$email = $_POST['email'] ? "'".$_POST['email']."'" : "NULL";
$telefono = $_POST['telefono'] ? "'".$_POST['telefono']."'" : "NULL";

$insert = "INSERT INTO personal (nombre,apellidos,telefono,email) VALUES ($nombre,$apellidos,$telefono,$email)";
$rs = mysql_query($insert);

if($rs)
print 'Exito';
else
print 'Error';

?>