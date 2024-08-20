function duplicateCount(text) {
  // Convertit la chaîne en minuscules pour une comparaison insensible à la casse
  const lowerCaseText = text.toLowerCase();

  // Crée un objet pour compter les occurrences de chaque caractère
  const charCount = {};

  // Parcourt chaque caractère de la chaîne
  for (const char of lowerCaseText) {
    charCount[char] = (charCount[char] || 0) + 1;
  }

  // Compte le nombre de caractères qui apparaissent plus d'une fois
  return Object.values(charCount).filter(count => count > 1).length;
}