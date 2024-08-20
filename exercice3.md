# **Rapport**

Le but de l'exercice est de mettre en place une fonction qui prend en paramètres un string et renvoie le nombre de doublons que comporte ce string

# **Commentaires**
`````php
function duplicateCount($param): int
{
  // conversion du paramètre en minuscule pour pourvoir faire les comparaisons 
  $text =strtolower($param);
  // initialisation d'une variable count à 0
  $count = 0;
  // parcours de la chaîne de caractères avec une boucle for
  //  commençant à partir de 0
  for ($i = 0; $i < strlen($text); $i++){
    // stockage de chaque caractère du string dans une variable $char 
    $char = $text[$i];
    // second parcours du string en partant de l'index suivant l'index du premier parcours
    for ($j = $i + 1; $j < strlen($text); $j++){
      // vérifier que chaque caractère est un caractère alphanumérique
      if(ctype_alnum($char) && ctype_alnum($text[$j])){
        // si l'élément à une position donnée d'un caractère de la chaîne 
      //  est égale à au même élément ,
      if(isset($char) && isset($text[$j]) && $char === $text[$j]){
        //  incrémentation de la variable $count       
        $count++;
        }else{
          $count = 1;          
      }
    }
    }
  }
  // retour du nombre total de doublons de la chaîne de caractères
  return $count;
}

/**
 * exemples d'utilisation
 */
// echo duplicateCount("abcde"); //0
// echo duplicateCount("aabbcde"); //2
// echo duplicateCount("aabBcde");// 2
// echo duplicateCount("indivisibilité"); // 1
// echo duplicateCount("aA11"); // 2
// echo duplicateCount("ABBA"); // 2


````