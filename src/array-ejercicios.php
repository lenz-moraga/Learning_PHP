<?php

/* Hola Devs! bienvenidos a los ejercicios con Arreglos de PHP.
    Solo aseguráte de seguir las instrucciones paso a paso.
    Éstos ejercicios te ayudarán a practicar y a reafirmar lo aprendido
    en el curso
*/

// 1.- Define un arreglo llamado $lenguajes 
// con los siguientes valores: 'Php', 'Python', 'C', 'Java', 'Go'
$lenguajes = ['Php', 'Python', 'C', 'Java', 'Go'];

// 2.- Utiliza la función print_r() para mostrar en el navegador
// el valor 'C' contenido en el arreglo: $lenguajes
print_r($lenguajes); echo '<br>';

// (Comenta el print_r anterior)
// 3.- Agrega el valor 'Javascript' al final del arreglo: $lenguajes
// TIP: hazlo empleando la función predefinida en php para agregar valores.
// En otra línea imprime el array completo para comprobar que el nuevo valor se agregó
array_push($lenguajes, 'Javascript');
print_r($lenguajes); echo '<br>';

// (Comenta el print_r anterior) (no comentes la línea donde agregas el valor: 'Javascript')
// 4.- Ordena el arreglo $lenguajes de menor a mayor (a,b,c...)
// e imprime en pantalla el resultado con print_r
// el resultado debería ser:  [0] => C [1] => Go [2] => Java [3] => Javascript [4] => Php [5] => Python
sort($lenguajes);
print_r($lenguajes); echo '<br>';

// (Comenta el print_r anterior) (El arreglo debe seguir ordenado)
// 5.- Define un array: $programador el cual será tratado como un mapa
// 5.1 - La primer clave del array, debe ser 'nombre' y el valor: Tu nombre
// 5.2 - La segunda clave: 'lenguajes' y el valor: $lenguajes
// 5.3 - accede a la clave 'lenguajes' e haz que se muestre el valor: 'Php' en el navegador
// mediante print_r
$programador = [
    'nombre' => 'Jorge',
    'lenguajes' => $lenguajes
];
print_r($programador['lenguajes'][4]);


/*****  
 *  Si ya terminaste todos los ejercicios, déjame felicitarte: FELICIDADES!
 * 
 *  Si todavía no terminas y tienes alguna duda en particular, puedes comentarla
 *  en el post donde están los ejercicios y evaluaciones, e intentaré ayudarte.
 *  Si eres parte del CLUB DE DEVS, ten por seguro que me daré un tiempo para resolver tu duda
 *  o puedes mandarme un mensaje directo por Patreon.
 *****/
