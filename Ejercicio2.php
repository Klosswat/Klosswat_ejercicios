<!DOCTYPE html>
<html>
<head>
    <title>Ejemplo de PHP con el SWITCH</title>
</head>
<body>
    <body bgcolor="#4A235A">
       <font color="#00000" size="14"> Cristian Daniel Alvarez Jauregui 2116970 4L1
         <br> 
<?php 
    $posicion="arriba"; 
    switch($posicion)
   { 
        case"arriba" : //Bloque 1 
           echo" La variable contiene"; 
           echo" el valor arriba"; 
           break; 
        case "abajo" ://Bloque 2 
           echo"La variable contiene"; 
           echo" el valor abajo"; 
           break;
        default://Bloque3 
           echo" La variable contiene otro valor"; 
           echo"distinto de arriba y abajo"; 
    } 
   ?> 
</body>
</html>