<?php
function spinWords(string $str): string {
    // Diviser la chaîne en un tableau de mots en utilisant l'espace comme séparateur.
    $words = explode(" ", $str);
    
    // Parcourir chaque mot et inverser ceux qui ont 5 lettres ou plus.
    foreach ($words as &$word) {
        if (strlen($word) >= 5) {
            // Inverser le mot si sa longueur est supérieure ou égale à 5.
            $word = strrev($word);
        }
    }
    
    // Rejoindre les mots modifiés en une chaîne unique séparée par des espaces.
    return implode(" ", $words);
}

// Exemple d'utilisation
echo spinWords("Hey fellow warriors"); // "Hey wollef sroirraw"
echo spinWords("This is a test");      // "This is a test"
echo spinWords("This is another test");// "This is rehtona test"

