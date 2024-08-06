<?php
function verified($array) {
    // Compter les occurrences de chaque valeur distincte dans le tableau
    $compteur = array_count_values($array);
        // Trier les valeurs des comptes pour une comparaison plus facile
        $nombres = array_values($compteur);

    // Vérifier si le tableau trié des valeurs des comptes est [2, 3]
    return $nombres == [2, 3];

}
    // Test cases
var_dump(verified(["a", "a", "a", "b", "b"])); 
 
