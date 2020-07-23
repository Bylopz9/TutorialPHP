<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .color{
        color: #F00;
        border: 2px solid black;
        font-weight: bolder;
    }
    </style>
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
/* En php podemos colocar dentro de los echo las etiquetas de html
y para declarar las comillas de las clases de la siguinete manera */

/* CON UNA COMILLA SIMPLE */
echo "<p class='color'>Gola mundo</p>";
/* CON DIAGONAL INVERSA */
echo "<p class=\" color \">Gola mundo</p>";
echo "<hr>";
$compara1 = "casa";
$compara2 = "CASA";

$resultado=strcmp($compara1,$compara2); /* Esta funcion compara dos variables tomando en cuenta mayusculas 
y minusculas si son diferentes arroja un 1 */

echo "<P class=\" color\"> Las variables son: $resultado</P>";

/* la funcion strcasecmp compara dos variables pero en este caso no toma en cuenta si las variables 
tiene mayusculas */
$resultado1=strcasecmp($compara1,$compara2);


echo "<P class=\" color\"> Las variables son: $resultado1</P>";

/* CONSTANTES */

define("AUTOR","Manuel",true);

echo "<P class=\" color\"> El autor es: " . AUTOR . "</P>";

/* Las constantes no se pueden redefinir */

/*  */
?>
<hr>
<form name="Cualculadora" action="" method="post">
<div class="contenedor">
<label for="num1"></label>
<input type="text" name="num1" id="num1">
<label for="num2"></label>
<input type="text" name="num2" id="num2">
<label for="oper"></label>
<select name="oper" id="oper">
<option >suma</option>
<option >resta</option>
<option >multiplicacion</option>
<option >dividir</option>
<option >modulo</option>
</select>
</div>

<div>
<input type="submit" name="boton" id="boton" value="Enviar" onclick="prueba">
</div>

</form>
<br>
<?php

if (isset($_POST["boton"])){

    $nume1=$_POST["num1"];
    $nume2=$_POST["num2"];
    $operacion=$_POST["oper"];

    if(!strcmp("suma",$operacion)){
        
        echo"<h1 class=\"color\"> El resultado es: " . ($nume1 + $nume2) . "</h1>";
    }
  
    if(!strcmp("resta",$operacion)){
        
        echo"<h1 class=\"color\"> El resultado es: " . ($nume1 - $nume2) . "</h1>";
    }

    if(!strcmp("multiplicacion",$operacion)){
        
        echo"<h1 class=\"color\"> El resultado es: " . ($nume1 * $nume2) . "</h1>";
    }
    if(!strcmp("dividir",$operacion)){
        
        echo"<h1 class=\"color\"> El resultado es: " . ($nume1 / $nume2) . "</h1>";
    }
    if(!strcmp("modulo",$operacion)){
        
        echo"<h1 class=\"color\"> El resultado es: " . ($nume1 % $nume2) . "</h1>";
    }
    
}


?>


</body>
</html>