<?php
// Opciones del menú
$opciones = array(
    '1. Arrays',
    '2. Option 2',
    '3. Option 3',
    '4. Quit'
);

// Bucle principal del menú

while (true) {
    foreach ($opciones as $opcion) {
        echo $opcion . PHP_EOL;
    }

    // Obtener la opción seleccionada 'Ingrese la opción deseada: ');
    $opcionSeleccionada = trim(fgets(STDIN));

    //Convierte el valor en un numero y valida que no este vacio.
    $numeroSeleccionado = intval($opcionSeleccionada);
    if (is_numeric($numeroSeleccionado) && !empty($numeroSeleccionado)) {
        echo "La entrada es un número válido." . PHP_EOL;

        // Estructura switch para ejecutar el código correspondiente a la opción seleccionada
        switch ($numeroSeleccionado) {
            case 1:
                require('result-exercises/arrays.php');
                PHP_EOL;
                break;
            case 2:
                echo 'Ha seleccionado la opción 2' . PHP_EOL;
                break;
            case 3:
                echo 'Ha seleccionado la opción 3' . PHP_EOL;
                break;
            case 4:
                echo 'Saliendo...' . PHP_EOL;
                exit;
            default:
                echo 'La opcion no esta en el rango de numeros validos.' . PHP_EOL;
                break;
        }
    } else {
        echo "La entrada no es un número válido." . PHP_EOL;
    }
}
