# Explication de la solution : Inverser les mots de 5 lettres ou plus

## Objectif
L'objectif est d'écrire une fonction qui prend une chaîne contenant un ou plusieurs mots et qui retourne cette chaîne avec tous les mots ayant cinq lettres ou plus inversés. Les autres mots restent inchangés. Les chaînes seront composées uniquement de lettres et d'espaces.

## Étapes de la solution

1. **Diviser la chaîne en mots :**
    - La chaîne d'entrée est d'abord divisée en un tableau de mots individuels à l'aide de la fonction `explode(" ", $str)` qui utilise les espaces comme séparateurs.

2. **Inverser les mots de 5 lettres ou plus :**
    - On parcourt chaque mot du tableau à l'aide d'une boucle `foreach`.
    - Si le mot contient cinq lettres ou plus (`strlen($word) >= 5`), il est inversé avec la fonction `strrev($word)`.
    - Sinon, le mot est laissé tel quel.

3. **Recomposer la chaîne finale :**
    - Les mots, après traitement, sont réassemblés en une seule chaîne à l'aide de `implode(" ", $words)` pour former la chaîne de sortie.

4. **Renvoyer la chaîne modifiée :**
    - La chaîne finale est renvoyée avec les modifications demandées.

## Exemple d'application

- Pour la chaîne `"Hey fellow warriors"`, les mots `"fellow"` et `"warriors"` ont cinq lettres ou plus, ils sont donc inversés, donnant `"Hey wollef sroirraw"`.
- Pour la chaîne `"This is a test"`, aucun mot ne fait cinq lettres ou plus, donc la chaîne reste inchangée.
- Pour la chaîne `"This is another test"`, seul `"another"` a plus de cinq lettres et est donc inversé, donnant `"This is rehtona test"`.


