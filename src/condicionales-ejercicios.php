<?php

/* Hola Dev! bienvenido a los ejercicios con Condicionales (estructuras selectivas) de PHP.
    Solo aseguráte de seguir las instrucciones paso a paso.
    Éstos ejercicios te ayudarán a practicar y a reafirmar lo aprendido
    en el curso
*/

// ==== IF, ELSE, ELSEIF ====
// 1.- Define un arreglo con tus llamado: $peliculasFavoritas
// Rellena $peliculasFavoritas con 5 de tus películas favoritas.
$peliculasFavoritas = ['Gladiador', 'El señor de los anillos', 'El padrino', 'El rey león', 'El club de la pelea'];

// 2.- Crea un if que verifique si la película 'Gladiador' está en el arreglo: $peliculasFavoritas
if (in_array('Gladiador', $peliculasFavoritas)) {
    echo 'Gladiador está en mis películas favoritas <br>';
}

// 3.- Continua con elseif para verificar cualquier película que no esté dentro de $peliculasFavoritas
// 4.- Agrega else para mostrar un mensaje: 'No se encuentra esa película en mis películas favoritas'
if (in_array('Gladiador', $peliculasFavoritas)) {
    echo 'Gladiador está en mis películas favoritas <br>';
} else {
    echo 'Gladiador no está en mis películas favoritas <br>';
}

// 5.- Siéntete libre de experimentar.


// ==== SWITCH ====
// Simula el funcionamiento de un menú de una página web
// Las opciones del menú son: inicio, nosotros, servicios, contacto
// 1.- Define una variable llamada: $opcion y asigna el valor 'inicio'
// 2.- Crea un switch que evalue la variable: $opcion
// (El switch tiene 4 case, uno para cada opción del menú)
// 3.- Para cada case-break agrega un mensaje:
// 'inicio' - 'bienvenido a mi nueva página web'
// 'nosotros' - 'nosotros....'
// y así sucesivamente para cada opción.
$opcion = 'inicio';

switch ($opcion) {
    case 'inicio':
        echo 'Bienvenido a mi nueva página web <br>';
        break;
    case 'nosotros':
        echo 'Nosotros... <br>';
        break;
    case 'servicios':
        echo 'Servicios... <br>';
        break;
    case 'contacto':
        echo 'Contacto... <br>';
        break;
    default:
        echo 'Opción no válida <br>';
}
