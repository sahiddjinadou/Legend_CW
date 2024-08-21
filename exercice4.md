## *I.* **Rapport**
    Le but de l'exercice est de mettre en place une fonction qui prend une chaîne d'un ou plusieurs mots et renvoie la même chaîne, mais avec tous les mots qui ont cinq lettres ou plus inversés !

 *Etapes à suivre* !
* Parcourir le string
* Sélectionner les mots qui ont 5 caractères ou plus
* Inverser ces mots
* Retourner ces mots à leur position de départ
* Afficher le string avec les mots de 5 caractères ou plus , inversés 

## *II.* **Commentaires**
````java
function duplicateCount($text){
    // transformation du string en un tableau
    $words = explode(" ", $text);
    // déclaration d'une variable étant un string vide
    $result = "";
    // parcours du tableau de chaînes de caractères
    foreach ($words as $word) {
        // si la longueur du mot est supérieure ou égale à 5
        if(strlen($word) >= 5){
            // renversement du mot et ajout d'un espace blanc
            $result .= strrev($word) . " ";
            // sinon
        }else {
            // affichage du string et ajout d'un espace blanc
            $result .= $word . " ";
        }
    }
    // retour du resultat avec suppression des espaces blancs de fin de chaîne
    return rtrim($result, "");
}
````
## *III.* **Exemples d'utilisation**
````java
// exemples d'utilisation
  echo(duplicateCount("Hello à toutes et tous ")); // devrait afficher olleH à setuot et tous
  echo(duplicateCount("Hey fellow warriors")); // devrait afficher  Hey wollef sroirraw
  echo(duplicateCount("This is a test")); // devrait afficher This is a tes
  echo(duplicateCount("This is another test")); // devrait afficher This is rehtona test
  ````
