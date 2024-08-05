## Vérification des occurrences dans un tableau


**Solution**

````PHP

<?php
function checkOccurrences($arr) {
    // Initialisation du tableau associatif pour compter les occurrences
    $count = [];

    // Parcours du tableau
    foreach ($arr as $value) {
        if (!isset($count[$value])) {
            $count[$value] = 1;
        } else {
            $count[$value]++;
        }
    }

    // Vérifie s'il y a trois occurrences d'une même valeur
    $hasThreeOccurrences = in_array(3, $count);

    // Vérifie s'il y a deux occurrences d'une autre valeur
    $hasTwoOccurrences = in_array(2, $count);

    // Retourne true si les conditions sont satisfaites, sinon false
    return $hasThreeOccurrences && $hasTwoOccurrences;
}

// Exemples
$example1 = ["a", "a", "a", "b", "b"];
$example2 = ["a", "b", "c", "b", "c"];
$example3 = ["a", "a", "a", "a", "a"];

var_dump(checkOccurrences($example1)); // true
var_dump(checkOccurrences($example2)); // false
var_dump(checkOccurrences($example3)); // false
?>
````

**Explication**
j'ai utilisé une fonction checkOccurrences qui prend un tableau en entrée.
 j'initialise un tableau associatif $count pour compter les occurrences de chaque valeur.
En parcourant le tableau, je met à jour le compteur pour chaque valeur.
je vérifie ensuite s’il y a trois occurrences d’une même valeur ($hasThreeOccurrences) et deux occurrences d’une autre valeur ($hasTwoOccurrences).
Si les deux conditions sont satisfaites, la fonction renvoie true, sinon elle renvoie false.