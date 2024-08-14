# Rapport

Le but de l'exercice est de mettre en place une fonction qui prend en paramètres deux tableaux et retourne un tableau qui est la différence des deux tableaux 

# Commentaires

````php
    <?php
    /**
     * fonction arrayDiff qui retourne la différence de deux tableaux
    */
    function arrayDiff($a, $b)
    {
        // utilisation de la méthode array_diff qui comme son nom l'indique permet de faire la différence de deux tableaux et stockage du resultat dans une variable
      $result =  array_diff($a, $b);
      // retour de la variable result
      return $result;
    }
    // Exemples d'utilisation
print_r(arrayDiff([0, 5, 10, 3, 3, 2], [2,4])); // devrait afficher [1,3];

var_dump(arrayDiff([1,2,2,2,3],[2])) // devrait afficher [1,3]
    ?>