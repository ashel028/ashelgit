<?php
// Obtener los datos de la API
$datos = json_decode(file_get_contents("https://luisalumnos-714e4-default-rtdb.firebaseio.com/Alumnos.json"), true);

// Verificar si se obtienen los datos correctamente
if ($datos !== false) {
    // Iterar sobre los datos con foreach
    foreach ($datos as $alumno) {
        // Imprimir los datos del alumno

        echo "Nombre: " . $alumno['nombre'] . "<br>";
        echo "Apellido: " . $alumno['Apellido'] . "<br>";
        echo "---------------------<br>";
    }
} else {
    echo "Error al obtener los datos de la API.";
}
?>
