function duplicateCount($text) {
   
    //je convertit le texte en minuscules et le divise en un tableau de caractères
  
$characters = str_split(strtolower($text));

    // je compte le nombre d'occurrences de chaque caractère
   
$counts = array_count_values($characters);

    // je fîltre les caractères qui apparaissent plus d'une fois
    
$duplicates = array_filter($counts, fn($count) => $count > 1);

    // je retourne le nombre de caractères dupliqués
   
return count($duplicates);
}
