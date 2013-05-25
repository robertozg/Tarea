<!DOCTYPE html>
<html>
<title>Tarea ISW</title>
<meta charset="utf-8" />
<link rel="stylesheet" href="estilo.css" type="text/css"/>

<?php
header("Refresh:5; url=login.html");
?> 
    <body>

<?php 

$password=$_POST['password'];
$email=$_POST['email'];
$nombre=$_POST['nombre'];

$con = mysql_connect('localhost', 'root', '') or die ('Problema con la base de datos');
mysql_select_db('isw_tarea',$con) or die ('Problemas al seleccionar la base de datos');?> 
<p> <?php mysql_query("INSERT INTO usuarios (email,password,nombre) VALUES ('$email', '$password','$nombre')", $con) or die ('Registro invalido : '.mysql_error().', Seras redireccionado al login'); ?> </p>
<?php mysql_close($con);  ?>

<p>  <?php  echo 'Usuario registrado con éxito, serás redireccionado al login';  ?> </p>

        </body>  
</html>