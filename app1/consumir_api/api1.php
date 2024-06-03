<?php

// json_decode($contenido, true): Esta función se utiliza para decodificar una cadena JSON y convertirla en una estructura de datos legible por PHP

//El segundo argumento, true, se utiliza para que los datos decodificados se devuelvan como un array asociativo

//file_get_contents("Contenido"): Esta función en PHP se utiliza para leer el contenido de un archivo o una URL y devuelve su contenido como una cadena

//convertimos en un array los datos de la api que estan en formato json y lo guardamos en una variable.
$datos = json_decode(file_get_contents("https://luisalumnos-714e4-default-rtdb.firebaseio.com/Alumnos/345.json"), true);
//en este caso se guarda los datos de un solo key....

print_r ($datos); //imprime todo el array

//echo $datos["nombre"];  //imprime el doto específico
