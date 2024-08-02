## Objectif

Écrire une fonction PHP qui vérifie si un tableau de 5 chaînes de caractères contient exactement trois occurrences d'une valeur et deux occurrences d'une autre.

## Étapes

1. Compter les occurrences: Utiliser `array_count_values` pour compter les occurrences de chaque valeur dans le tableau.
2. Vérifier les conditions: Vérifier si les valeurs comptées contiennent exactement trois occurrences d'une valeur et deux occurrences d'une autre en utilisant `in_array`.
3. Retourner le résultat: Retourner `true` si les conditions sont remplies, sinon retourner `false`.

## Fonction PHP

```php
function verifTab($tab) {
    // Compter les occurrences de chaque valeur dans le tableau
    $counts = array_count_values($tab);
    
     Vérifier si le tableau contient exactement trois occurrences d'une valeur et deux d'une autre
    if (in_array(3, $counts) && in_array(2, $counts)) {
        Retourner true si les conditions sont remplies
        return true;
    }
    // Retourner false si les conditions ne sont pas remplies
    return false;
}
```
