```php
function arrayDiff($a, $b)
{
// Déclaration d'une fonction arrayDiff qui prend en paramètre deux tableaux;
//cette fonction fait la différence entre les tableaux et si une valeur est présente dans le second tableau, toutes
//ses occurrences doivent être supprimées de l'autre.
return array_values(array_diff($a, $b)); // et elle retourne toutes les valeurs du tableau à la fin
}

//Résumé des fonctions utilisées :
//array_values(): Retourne toutes les valeurs d'un tableau,
//array_diff(): Calcul la différence différence entre des tableaux.
```