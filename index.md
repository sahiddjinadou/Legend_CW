```php
function verifyArr($arr)
{
    // Déclaration d'une fonction verifyArr qui prend en paramètre un tableau;
    $compt = array_count_values($arr); // on compte les occurrences des valeurs dans le tableau.
    // Au fait, array_count_values: compte les occurrences de chaque valeur distincte dans un tableau.

    //array_values — Retourne toutes les valeurs d'un tableau
    $value = array_values($compt); //Récupération des valeurs et on procède
    //au tri de ces dernières.
    sort($value); //sort: Trie un tableau en ordre croissant.

    return $value === [2, 3]; // on return enfin les valeurs qu'on compare à [2,3].
}
```
 


