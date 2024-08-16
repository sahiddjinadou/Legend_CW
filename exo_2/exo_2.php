<?php

function arrayDiff($a, $b) {
    // Créer un tableau vide pour stocker le résultat
    $result = [];

    // Parcourir chaque élément de la liste a
    foreach ($a as $value) {
        // Vérifier si l'élément n'est pas dans la liste b
        if (!in_array($value, $b)) {
            // Si ce n'est pas dans b, on l'ajoute au résultat
            $result[] = $value;
        }
    }

    // Retourner le tableau résultat
    return $result;
}

// Exemple d'utilisation
print_r(arrayDiff([1, 2, 2, 2, 3], [2])); // Affichera [1, 3]
