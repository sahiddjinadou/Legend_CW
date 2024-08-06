# Rapport 
* Le but de l'exercice est de mettre en place une fonction prenant en paramètres un tableau de 5 éléments et retourne true si un élément du tableau se répète trois fois et un autre élément du tableau se répète deux fois 

# Fonctions et commentaires

`````php
    /**
     * fonction permettant de vérifier si le tableau contient trois et deux éléments de même valeur
     * @param mixed $arr
     * @return boolean | string
     */
    function verify($arr): bool | string 
    {
        // vérification du nombre d'éléments du tableau
        // si ce dernier est différent de 5 éléments
        if(count($arr) !== 5){
            // retourne un message 
            return "Le tableau ne doit contenir qu'exactement cinq éléments";
        } else {
            // sinon,
            // comptage du nombre d'occurences du tableau passé en paramètres
        $occurences = array_count_values($arr);
        // initialisation de deux variables booléennes
        // triple répétition à false 
     $three_repeat  = false;
     // et double répétition à false
        $two_repeat = false;
        // parcours du tableau des occurences avec une boucle foreach
        foreach ($occurences as $value) {
            // si un élément se répète 3 fois
            if ($value == 3) {
                // la valeur de la variable de triple répétition passe à true
                $three_repeat = true;
            }
            // si un élément se répète 2 fois , la variable de t
            if ($value == 2) {
                // la variable de double répétition passe à true
                $two_repeat = true;
            }
        }
        // si l'on a une triple répétition et une double répétiton 
            if($three_repeat && $two_repeat ){
                // renvoie de true
                return true ;
            } else {
                // sinon renvoi de false
                return false;
            }
    }
    };
    // exemple d'utilisation 
    echo (verify(["bo","ca", "ca", "ca","bo"])) ."<br>"; // doit renvoyer true
    echo (verify(["a", "a", "a", "b", "b"])); // doit renvoyer true
    echo (verify(["a", "b", "c", "b", "c"])); // doit renvoyer false
    echo (verify(["a", "a", "a", "a", "a"])); // doit renvoyer false
