
<?php
function duplicateCount($text) {
    // Convertir le texte en minuscules pour ignorer la casse
    $text = strtolower($text);
    
    // Créer un tableau pour stocker la fréquence de chaque caractère
    $charCount = [];
    
    // Compter la fréquence de chaque caractère
    for ($i = 0; $i < strlen($text); $i++) {
        $char = $text[$i];
        if (isset($charCount[$char])) {
            $charCount[$char]++;
        } else {
            $charCount[$char] = 1;
        }
    }
    
    // Compter le nombre de caractères qui apparaissent plus d'une fois
    $duplicateCount = 0;
    foreach ($charCount as $count) {
        if ($count > 1) {
            $duplicateCount++;
        }
    }
    
    return $duplicateCount;
}

// Tests
echo duplicateCount("abcde") . "\n"; // 0
echo duplicateCount("aabbcde") . "\n"; // 2
echo duplicateCount("aabBcde") . "\n"; // 2
echo duplicateCount("indivisibilité") . "\n"; // 1
echo duplicateCount("Indivisibilités") . "\n"; // 2
echo duplicateCount("aA11") . "\n"; // 2
echo duplicateCount("ABBA") . "\n"; // 2
