
# Explication Détailée

## 1. Initialiser les Variables de Compte

```php
$countA = 0;
$countB = 0;
$countC = 0;
```

- Nous créons trois variables pour compter combien de fois "a", "b", et "c" apparaissent.

## 2. Parcourir le Tableau

```php
foreach ($array as $element) {
    if ($element == "a") {
        $countA++;
    } elseif ($element == "b") {
        $countB++;
    } elseif ($element == "c") {
        $countC++;
    }
}
```

- Nous utilisons `foreach` pour parcourir chaque élément du tableau.
- Si l'élément est `"a"`, nous incrémentons `$countA`.
- Si l'élément est `"b"`, nous incrémentons `$countB`.
- Si l'élément est `"c"`, nous incrémentons `$countC`.

## 3. Vérifier les Comptes

```php
if (($countA == 3 && $countB == 2) || ($countA == 3 && $countC == 2) || 
    ($countB == 3 && $countA == 2) || ($countB == 3 && $countC == 2) || 
    ($countC == 3 && $countA == 2) || ($countC == 3 && $countB == 2)) {
    return true;
}
```

- Nous vérifions toutes les combinaisons possibles où une chaîne pourrait apparaître 3 fois et une autre 2 fois.
- Si une de ces conditions est vraie, nous retournons `true`.
- Sinon, nous retournons `false`.
//