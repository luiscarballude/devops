<?php

//Ejercicio 1:

//Instrucciones: Construir un programa que lea una cadena y que muestre el siguiente menú:

//Mostrar sus dos primeras letras.
//Mostrar sus tres primeras letras.
//Mostrar sus dos últimas letras.
//Mostrar su última letra.

$cadena="esta es una cadena de texto";

Echo substr($cadena, 0, 2);
Echo substr($cadena, 0, 3);
Echo substr($cadena, -2);
Echo substr($cadena, -1);
