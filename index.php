<!DOCTYPE html>
<html lang="es">
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
/* require ("funciones.php"); */
nombrecompleto();
nombrecompleto();
nombrecompleto();
nombrecompleto();
nombrecompleto();

/* Podemos utilizar las variables dentro de las funciones sin embargo para hacer esto se debe
llamar con la instruccion global */

function llamanombre(){
    global $Nombre;
    global $Apellido;

    $nombre = "Soy $Nombre" . " y mo apellido es: $Apellido <br>"; 
    echo $nombre;
}

llamanombre();

/* Variables estaticas */
/* las variables estaticas son aquellas que se utilizan y guardan su valor para poder
 reultilzar el valor que ya tiene la variable*/
/* En este ejemplo hacemos que la funcion incremente en 1 la variable conta
y al llamar la función varias veces esta siga incrementando el valor */
function contador(){
    static $conta=0;
    $conta++;

    echo $conta . "<br>";
}

contador();
contador();
contador();
contador();
contador();
contador();
/* En este ejemplo se visualiza que sin declarar las variables estatic el contador no se da y
siempre arrojara el valor una y otra vez en 1 */

function contadorerro(){
    $conta=0;
    $conta++;

    echo $conta . "<br>";
}

contadorerro();
contadorerro();
contadorerro();
contadorerro();

?>

</body>
</html>