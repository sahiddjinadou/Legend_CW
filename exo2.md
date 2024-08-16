/**
 Fonction qui soustrait une liste d'une autre et renvoie le résultat.
 Elle supprime toutes les valeurs de la liste $a qui sont présentes dans la liste $b,
 en conservant leur ordre.
     @param array $a  -La liste à partir de laquelle on souhaite supprimer les éléments
     @param array $b  -La liste des éléments à supprimer
     @return array    -La liste $a avec les éléments de $b supprimés
**/


function arrayDiff($a, $b) {
  /** On utilise array_filter pour créer un nouveau tableau contenant
  uniquement les éléments de $a qui passent le test défini par la fonction de callback **/
 
return array_filter($a, function($x) use ($b) {

    /** La fonction de callback vérifie si l'élément $x est présent dans le tableau $b
     en utilisant la fonction in_array(). Si ce n'est pas le cas, l'élément est conservé
     dans le nouveau tableau.**/

    return !in_array($x, $b);
  });
}
