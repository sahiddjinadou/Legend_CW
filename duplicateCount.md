### Objectif de la fonction

Compter le nombre de caractères alphabétiques distincts et de chiffres qui apparaissent plus d'une fois dans une chaîne, sans tenir compte de la casse.

### Étapes 

1. **Convertir en minuscules:** Rendre la chaîne insensible à la casse.
2. **Initialiser un tableau de comptage:** Créer un tableau pour suivre le nombre d'occurrences de chaque caractère.
3. **Compter les doublons:** Boucler sur chaque caractère et incrémenter le compteur s'il apparaît plus d'une fois.
4. **Retourner le nombre de doublons:** Compter et retourner le nombre total de doublons.

### Fonction `duplicateCount` 

```php
function duplicateCount($text) {
    // Convertir la chaîne en minuscules pour ignorer la casse
    $text = strtolower($text);

    // Créer un tableau pour compter les occurrences de chaque caractère
    $count = [];

    // Initialiser un compteur de doublons
    $duplicates = 0;

    // Boucler sur chaque caractère dans la chaîne
    foreach (str_split($text) as $char) {
        // Incrémenter le compteur pour ce caractère
        if (isset($count[$char])) {
            $count[$char]++;
            // Compter ce caractère comme doublon si c'est la deuxième fois qu'il apparaît
            if ($count[$char] == 2) {
                $duplicates++;
            }
        } else {
            $count[$char] = 1;
        }
    }

    // Retourner le nombre total de doublons
    return $duplicates;
}
