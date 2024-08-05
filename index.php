<?php
function verified($array)
{
/*Array _count_value Compte les occurrences de chaque valeur distincte dans un tableau
source: php.net*/
    $compteur = array_count_values($array);
    // Retourne un tableau de valeurs indexé.
    $nombres = array_values($compteur);
  
    // La fonction sort permet de trie mon tableau source: php.net
    sort($nombres);
    return $nombres;
}
