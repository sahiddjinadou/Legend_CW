### Objectif de la fonction

L'objectif est de prendre une chaîne de texte, puis de retourner la même chaîne, mais en inversant uniquement les mots qui contiennent cinq lettres ou plus.

### Étapes 

1. **Diviser la chaîne en mots:** Séparer la chaîne en un tableau de mots.
2. **Inverser les mots de 5 lettres ou plus:** Parcourir chaque mot et l'inverser s'il contient cinq lettres ou plus.
3. **Recomposer la chaîne:** Rejoindre les mots modifiés en une seule chaîne.
4. **Retourner la chaîne finale.**

### Fonction 

```php
function spinWords(string $str): string {
    // Diviser la chaîne en mots
    $words = explode(' ', $str);

    // Parcourir chaque mot
    foreach ($words as &$word) {
        // Inverser les mots de 5 lettres ou plus
        if (strlen($word) >= 5) {
            $word = strrev($word);
        }
    }

    // Rejoindre les mots pour former la chaîne finale
    return implode(' ', $words);
}

