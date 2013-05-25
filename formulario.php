<!DOCTYPE html>
<html>
<title>Tarea ISW</title>
<meta charset="utf-8" />
<link rel="stylesheet" href="estilo.css" type="text/css"/>
    
    <body>
    
     <div class="contenedor">
     <div class="formulario">

       <h1> Registro </h1>
 
       <form method="post">
       <table>
       <tr> <td> <label for ="email"> Email: </label> </td> <td> <input type = "email"  id="email" name="email" placeholder = "Ingresar email" autofocus required autocomplete="off"/> </td></tr> 
       <tr> <td> <label for ="password"> Password: </label> </td> <td> <input type = "password" id = "password" name="password" required/> </td> </tr>
       <tr> <td> <label for ="nombre"> Nombre: </label> </td> <td> <input type = "nombre" id = "nombre" name="nombre" placeholder = "Ingresar nombre" required autocomplete="off"/></td> </tr>
        </table>
     <p> <button type="submit"  formaction="registro.php">Registrar</button>
        <input type="reset" value="Limpiar"/> </p>
       
       </form>
       
    </div>
    </div>    
   </body>  
</html>