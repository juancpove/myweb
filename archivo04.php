<?php
// Longitud de la variable aleatoria
$length = 32;

// Establecer los caracteres permitidos en la variable
$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

// Initializar
$random_value = '';

// Ciclo que se repite dependiendo de la longitud establecida para la variable
for ($i = 0; $i < $length; $i++) {
  // Se selecciona un caracter aleatorio de la cadena de caracteres permitida
  $random_character = $characters[rand(0, strlen($characters) - 1)];
  
  // Se incluye un caracter aleatorio seleccionado entre los caracteres permitidos hasta completar la longitud
  $random_value .= $random_character;
}

// Print the random value
echo $random_value;
?>
