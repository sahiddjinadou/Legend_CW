<?php

function duplicateCount($text) {
    // Convertir le texte en minuscule pour être insensible à la casse
    $text = strtolower($text);
    
    // Créer un tableau pour compter les occurrences de chaque caractère
    $charCount = array_count_values(str_split($text));
    
    // Compter le nombre de caractères qui apparaissent plus d'une fois
    $duplicateCount = 0;
    foreach ($charCount as $char => $count) {
        if ($count > 1) {
            $duplicateCount++;
        }
    }
    
    return $duplicateCount;
}

// Exemples d'utilisation
echo duplicateCount("abcde"); // 0
echo duplicateCount("aabbcde"); // 2
echo duplicateCount("aabBcde"); // 2
echo duplicateCount("indivisibilité"); // 1
echo duplicateCount("Indivisibilités"); // 2
echo duplicateCount("aA11"); // 2
echo duplicateCount("ABBA"); // 2

?>
