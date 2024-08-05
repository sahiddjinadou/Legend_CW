<?php
function verified($array)
{
    // compte les occurrences de chaque valeur distincte dans un tableau
    // et Retourne un tableau contenant les valeurs du tableau array
    $compte = array_count_values($array);
    // Retourne toutes les valeurs d'un tableau
    $value = array_values($compte);
    // la fonction sort permet de trie mon tableau
    sort($value);
    return $value;
}

