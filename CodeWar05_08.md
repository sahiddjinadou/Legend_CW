## Objectif
# vérifiez si le tableau contient trois et deux des mêmes valeurs.

## Etape
# compter les occurences de chaque élément dans le tableau
# vérifier si l'objectif est atteint et retourner un boolean 

## Fonction
````php
function containsThreeAndTwo($array) {
    // Initialiser un tableau et compter les occurrences de chaque élément
    $arrCount = array();
    $arrCount = array_count_values($array);
    //Verifier si le tableau contient trois et deux des mêmes valeurs.
   if (in_array(3, $arrCount) && in_array(2, $arrCount)) {
    //Retourne true si la condition est vérifiée 
    return true;
   }else {
   //Retourne false dans le cas contraire
   return false;
   }
      return $arrCount;
}
````
?>
