function spinWords(string $str): string {

  // je divise la chaîne d'entrée en un tableau de mots

  $words = explode(' ', $str);

  // j'initialise un tableau pour stocker les mots modifiés

  $result = [];

  // je parcourt chaque mot du tableau

  foreach ($words as $word) {
    // Si la longueur du mot est supérieure ou égale à 5, inverser le mot

    if (strlen($word) >= 5) {
      $word = strrev($word);
    }

    // j'ajoute le mot (modifié ou non) au tableau de résultats

    $result[] = $word;
  }

  // je convertit le tableau de mots modifiés en une chaîne de caractères

  return implode(' ', $result);
}
