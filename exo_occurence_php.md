<?php
function duplicateCount($text) {
    // Convertir la chaîne en minuscules pour ignorer la casse
    $text = strtolower($text);

    // Tableau pour stocker les occurrences de chaque caractère
    $charCount = [];

    // Parcourir chaque caractère de la chaîne
    foreach (str_split($text) as $char) {
        // Si le caractère est déjà dans le tableau, on incrémente son compteur
        if (isset($charCount[$char])) {
            $charCount[$char]++;
        } else {
            // Sinon, on l'ajoute au tableau avec une valeur initiale de 1
            $charCount[$char] = 1;
        }
    }

    // Compteur pour le nombre de caractères qui apparaissent plus d'une fois
    $duplicateCount = 0;

    // Parcourir les valeurs du tableau de compte
    foreach ($charCount as $count) {
        // Si le caractère apparaît plus d'une fois, on incrémente le compteur de doublons
        if ($count > 1) {
            $duplicateCount++;
        }
    }

    //  Je retourne le nombre de doublons
    return $duplicateCount;
}

echo duplicateCount("abcde") . "\n"; // 0
echo duplicateCount("Indivisibilités") . "\n"; // 2
echo duplicateCount("aA11") . "\n"; // 2

?>
