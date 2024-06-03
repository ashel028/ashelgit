<?php
// URL de la base de datos Firebase
$firebaseUrl = 'https://app1-ea7fa-default-rtdb.firebaseio.com/Alumnos.json';

// Datos de los alumnos en formato JSON requerido
$alumnos = [
    "123" => [
        "nombre" => "juan",
        "Apellido" => "perez",
        "foto" => ""
    ],
    "124" => [
        "nombre" => "thiago",
        "Apellido" => "canteros",
        "foto" => ""
    ],
    "125" => [
        "nombre" => "agustina",
        "Apellido" => "balsa",
        "foto" => ""
    ],
    "126" => [
        "nombre" => "oscar",
        "Apellido" => "fernandez",
        "foto" => ""
    ],
];

// Inicializar cURL
$ch = curl_init();

// Configurar cURL
curl_setopt($ch, CURLOPT_URL, $firebaseUrl);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);

// Convertir el array de datos a JSON
$jsonData = json_encode($alumnos);

// Establecer los datos a enviar
curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);

// Ejecutar la solicitud
$response = curl_exec($ch);

// Verificar si hubo algún error
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
} else {
    // Mostrar la respuesta
    echo 'Respuesta de Firebase: ' . $response;
}

// Cerrar cURL
curl_close($ch);
?>
