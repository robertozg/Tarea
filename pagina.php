<!DOCTYPE html>
<html>
    <head>
<title>Tarea ISW</title>

<meta charset="utf-8"/>
<link rel="stylesheet" href="estilo.css" type="text/css"/>
</head>
<body>
    
    <h1> Página</h1>
<?php

$email=$_POST['email'];

$con =  mysql_connect('localhost', 'root', '') or die ('Problema con la base de datos');
mysql_select_db('isw_tarea',$con) or die ('Problemas al seleccionar la base de datos');
$result = mysql_query ("select * from usuarios where email= '$email'",$con) or die('problema en la consulta');  
$row = mysql_fetch_array($result);
mysql_close($con); ?>

<p> <?php if ($_POST['password'] == $row['password']) 
   echo "Bienvenido(a) ".$row['nombre']; 
else
{
    header("Refresh:5; url=login.html"); 
    echo "usuario o password incorrecta,serás redireccionado al login";    
}
?> </p>

</body>  
</html>