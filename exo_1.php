<?php
function verifyArray($array)
{
    // Initialiser les variables de compte pour chaque chaîne 
    $countA = 0;
    $countB = 0;
    $countC = 0;

    // Parcourir le tableau et mettre à jour les comptes

    foreach ($array as $element) {
        if ($element == "a") {
            $countA++;
        } elseif ($element == "b") {
            $countB++;
        } elseif ($element == "c") {
            $countC++;
        }
    }

    // Je verifie les conditions: une chaîne 3fois, une autre 2 fois

    if (($countA == 3 && $countB == 2)
        || ($countA == 3 && $countC == 2)
        || ($countB == 3 && $countA == 2)
        || ($countB == 3 && $countC == 2)
        || ($countC == 3 && $countA == 2)
        || ($countC == 3 && $countB == 2)
    ) {
        return true;
    }
    return false;
}



// Exemples d'utilisation
var_dump(verifyArray(["a", "a", "a", "b", "b"])); // true
var_dump(verifyArray(["a", "b", "c", "b", "c"])); // false
var_dump(verifyArray(["a", "a", "a", "a", "a"])); // false

