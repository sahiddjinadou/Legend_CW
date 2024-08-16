# Legend_CW
Nous allons atteindre le niveau Legends  code war

## PHP

### Exercice 1
Étant donné un tableau contenant exactement 5 chaînes "a", "b"ou "c"( chars en Java, characters en Fortran), vérifiez si le tableau contient trois et deux des mêmes valeurs.

```php
Exemples
["a", "a", "a", "b", "b"] ==> true  // 3x "a" and 2x "b"
["a", "b", "c", "b", "c"] ==> false // 1x "a", 2x "b" and 2x "c"
["a", "a", "a", "a", "a"] ==> false // 5x "a"
```
------------------------------------------------------------------------------

### Exercice 2
Votre objectif dans ce kata est d'implémenter une fonction de différence, qui soustrait une liste d'une autre et renvoie le résultat.

Il doit supprimer toutes les valeurs de la liste a, qui sont présentes dans la liste ben conservant leur ordre.

```php
arrayDiff([1,2],[1]) == [2]
```
Si une valeur est présente dans b, toutes ses occurrences doivent être supprimées de l'autre :

```php
arrayDiff([1,2,2,2,3],[2]) == [1,3]
```
#### solution
````php
function arrayDiff($a, $b) {
  // your code here
}
```


