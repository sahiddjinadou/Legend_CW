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
```php
function arrayDiff($a, $b) {
  // your code here
}
```
### Exercice 3

Compter le nombre de doublons
Écrivez une fonction qui renverra le nombre de caractères alphabétiques distincts, insensibles à la casse, et de chiffres numériques qui apparaissent plusieurs fois dans la chaîne d'entrée. On peut supposer que la chaîne d'entrée contient uniquement des lettres (majuscules et minuscules) et des chiffres numériques.

Exemple
"abcde" -> 0 # no characters repeats more than once
"aabbcde" -> 2 `# 'a' and 'b'`
"aabBcde" -> 2 ` # 'a' occurs twice and 'b' twice (`b` and `B`)`
"indivisibilité" -> 1 ` # 'i' occurs six times`
"Indivisibilités" -> 2 `# 'i' occurs seven times and 's' occurs twice`
"aA11" -> 2 `# 'a' and '1'`
"ABBA" -> 2  `# 'A' and 'B' each occur twice`

```php
function duplicateCount($text) {
  // ...code
}
```

Écrivez une fonction qui prend une chaîne d'un ou plusieurs mots et renvoie la même chaîne, mais avec tous les mots qui ont cinq lettres ou plus inversés (tout comme le nom de ce Kata). Les chaînes transmises seront constituées uniquement de lettres et d'espaces. Les espaces ne seront inclus que lorsque plusieurs mots sont présents.

Exemples :
```
"Hey fellow warriors"  --> "Hey wollef sroirraw" 
"This is a test        --> "This is a test" 
"This is another test" --> "This is rehtona test"
```

````php
function spinWords(string $str): string {
  // TODO Have fun :)
}
```
