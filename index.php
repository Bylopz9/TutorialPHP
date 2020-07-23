<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

print("Hola mundo <br>"); /* Des esta manera se visualiza informacion en el archivo */
print("Como estan <br>");

/* Tambien se puede mandar informacion con el comando echo */
echo "Hola mndo 2 <br>";

/* Creacion de variables en PHP */

$Nombre = "Manuel";
$Apellido = "Lopez";

echo "Soy $Nombre". " $Apellido <br>";  
/* Con PHP podemos llamar funciones de otros archivos con las sentencias include y require  */
include ("funciones.php");


nombrecompleto();
nombrecompleto();
nombrecompleto();
nombrecompleto();
nombrecompleto();


?>



</body>
</html>