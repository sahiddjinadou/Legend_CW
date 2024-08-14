### Objectif de la fonction

L'objectif de la fonction `arrayDiff` est de retirer tous les éléments du tableau `$a` qui sont présents dans le tableau `$b` et de retourner le tableau résultant. Dans cette version simplifiée, la réindexation est réalisée implicitement par `array_values`, ce qui garantit un tableau propre avec des indices continus.

### Étapes brèves

1. **Soustraire les éléments:** Utiliser `array_diff` pour supprimer les éléments de `$b` présents dans `$a`.
2. **Réindexer les clés et retourner le résultat:** Réindexer les clés et retourner le tableau résultant en une seule étape avec `array_values`.

### Fonction `arrayDiff` commentée

```php
function arrayDiff($a, $b) {
    // Soustraire les éléments de $b de $a et reindexer le résultat 
    return array_values(array_diff($a, $b));
}
