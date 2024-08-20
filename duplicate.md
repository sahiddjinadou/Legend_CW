##Exercice 3 Duplicate 
1-Convertir la chaine en minuscule pour recuperer tout les caracteres en minuscule pour faciliter le tri
2-Boucler sur chaque caractere de la chaine et le recuperer dans un compteur prealablement initialisé
3- Retourner le nombre total de doublons trouver.
```` php
function duplicateCount($text) {
    // Convertir la chaîne en minuscules pour ignorer la casse
    $text = strtolower($text);

    // Créer un tableau pour compter les occurrences de chaque caractère
    $count = [];

    // Initialiser un compteur de doublons
    $dupCount = 0;

    // Boucler sur chaque caractère dans la chaîne
    foreach (str_split($text) as $char) {
        // Incrémenter le compteur pour ce caractère
        if (isset($count[$char])) {
            $count[$char]++;
            // Compter ce caractère comme doublon si c'est la deuxième fois qu'il apparaît
            if ($count[$char] == 2) {
                $dupCount++;
            }
        } else {
            $count[$char] = 1;
        }
    }

    // Retourner le nombre total de doublons
    return $dupCount;
}

````
