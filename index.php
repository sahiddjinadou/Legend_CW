<?php
function verified($array)
{
    // Compter les occurrences de chaque valeur distincte dans le tableau
    $compteur = array_count_values($array);
    // Obtenir les valeurs des comptes
    $nombres = array_values($compteur);
    // Trier les valeurs des comptes pour une comparaison plus facile
    sort($nombres);
    // Vérifier si le tableau trié des valeurs des comptes est [2, 3]
    return $nombres == [2, 3];
}

// Test cases
var_dump(verified(["a", "a", "a", "b", "b"]));
var_dump(verified(["a", "b", "c", "b", "c"]));
var_dump(verified(["a", "a", "a", "a", "a"]));


function arrayDiff($a, $b) {
    // Convertir $b en un tableau associatif pour une recherche rapide
    $b_values = array_flip($b);
    
    // Filtrer les elements de $a pour exclure ceux qui sont dans $b
    return array_filter($a, function($value) use ($b_values) {
        return !isset($b_values[$value]);
    });
}

print_r(arrayDiff([1, 2], [1]));        // Output: [2]
print_r(arrayDiff([1, 2, 2, 2, 3], [2])); // Output: [1, 3]

