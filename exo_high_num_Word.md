<?php 


    
    

/**
 * Fonction pour calculer le score d'un mot basé sur la position des lettres dans l'alphabet.
 *
 * @param string $word Le mot dont le score doit être calculé.
 * @return int Le score du mot.
 */
function calculateWordScore($word) {
    $score = 0;
    // Calculer le score de chaque lettre
    for ($i = 0; $i < strlen($word); $i++) {
        // 'a' correspond à 1, 'b' à 2, etc.
        $score += ord($word[$i]) - ord('a') + 1;
    }
    return $score;
}

function high($sentence) {
    // Séparer la chaîne en mots
    $words = explode(' ', $sentence);
    $highestScore = 0;
    $highestScoringWord = '';

    // Parcourir chaque mot pour calculer son score
    foreach ($words as $word) {
        $score = calculateWordScore($word);
        // Si le score actuel est plus élevé que le score le plus élevé, mettre à jour
        if ($score > $highestScore) {
            $highestScore = $score;
            $highestScoringWord = $word;  // Mettre à jour le mot avec le score le plus élevé
        }
    }

    return $highestScoringWord;
}

// Exemple d'utilisation
$sentence = "Salut les reufs je m'amuse pas avec l'argent";
echo "Le mot avec le score le plus élevé est : " . high($sentence);
?>

### RAPPORT


Fonction calculateWordScore :

Cette fonction calcule le score d'un mot en additionnant les valeurs des lettres selon leur position dans l'alphabet.
Chaque lettre a une valeur correspondante : 'a' = 1, 'b' = 2, etc.
On utilise ord() pour obtenir le code ASCII de la lettre, puis on soustrait le code ASCII de 'a' et ajoute 1 pour obtenir la position dans l'alphabet.
Fonction highestScoringWord :

Cette fonction prend une chaîne de mots, la sépare en un tableau de mots en utilisant explode().
Elle initialise les variables pour garder une trace du score le plus élevé et du mot associé.
Elle parcourt chaque mot, calcule son score à l'aide de calculateWordScore(), et met à jour les variables de score et de mot si le score actuel est plus élevé que le score précédent.
Enfin, elle renvoie le mot avec le score le plus élevé.
Utilisation de la Fonction :

On définit une chaîne de mots et on appelle highestScoringWord() pour obtenir le mot avec le score le plus élevé.
On affiche le résultat.