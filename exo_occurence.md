function checkArray($arr) {
    // Compter les occurrences de chaque valeur dans le tableau
    $counts = array_count_values($arr);
    
    // Vérifier s'il y a exactement une valeur avec 3 occurrences et une valeur avec 2 occurrences
    return in_array(3, $counts) && in_array(2, $counts);
}

// Exemples
var_dump(checkArray(["a", "a", "a", "b", "b"])); // true
var_dump(checkArray(["a", "b", "c", "b", "c"])); // false
var_dump(checkArray(["a", "a", "a", "a", "a"])); // false


### RAPPORT
Définir la fonction checkArray.
Compter les occurrences de chaque valeur dans le tableau en utilisant array_count_values.
Vérifier si le tableau des occurrences contient exactement une valeur avec trois occurrences et une valeur avec deux occurrences en utilisant in_array.
Retourner true ou false en fonction du résultat des vérifications.
Tester la fonction avec plusieurs exemples pour vérifier son bon fonctionnement.
