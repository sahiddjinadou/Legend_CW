function duplicateCount(string $text): int
{
    // Convertit la chaîne en minuscules
    $lowercaseText = strtolower($text);

    // Compte les occurrences de chaque caractère
    $charCount = array_count_values(str_split($lowercaseText));

    // Compte les caractères qui apparaissent plus d'une fois
    return count(array_filter($charCount, fn($count) => $count > 1));
}

echo duplicateCount("aabBcde"); // Affiche 2
echo duplicateCount("indivisibilité"); // Affiche 1