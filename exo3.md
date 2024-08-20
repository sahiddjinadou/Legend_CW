```php
function duplicateCount($text)
{
    $character = strtolower($text); // Renvoie une chaîne en minuscules
// Après avoir transformé notre chaîne en minuscule,
// on passera à la conversion de cette dernière en tableau
    $minuscule = str_split($character); //Convertit une chaîne de caractères en tableau

    $compt = array_count_values($minuscule); //Compte les occurrences de chaque valeur distincte dans un tableau

    $filtrDuplicate = array_filter($compt, fn($n) => $n > 1); //Filtre les éléments d'un tableau grâce à une fonction de rappel


    return count($filtrDuplicate); //retourne le nombre de caractères. 
}
```

