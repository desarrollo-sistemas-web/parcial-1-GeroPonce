<?php

//Ejercicio 3: Crea una función que tome un número entero como parámetro y devuelva
// true si el número es par y false si es impar.
//Complejidad: MEDIA (2 puntos)

function esPar($num) {
    $resto = ($num%2);
    If ($resto == 0){
        return true;
    }
    else {
        return false;
    }
}
