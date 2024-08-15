<?php

function arrayDiff($a, $b) {
    $tab[]=[]; // je déclare  un tableau pour récupérer le trie
    foreach ($a as  $el) { // je fais une boucle foreach pour parcourir le premier tableau entré 
            if(!in_array($el,$b)){ // si l'élément courant est contenu dans le tableau b 
                if(!in_array($el,$tab)){ // je verifie si cet element n'est pas déjà dans mon tableau filtré
                    array_push($tab,$el); // on l'ajoute à notre tableau tab avec array_push
                }  
            }
           
    }
    return $tab; //on retourne tout le tableau 
    
  }
 print_r ( arrayDiff([1,2,4,4],[2,5,0,3])); // je teste et ça marche 😁
 ### Rapport

 * Pour résoudre ce problème j'ai utilisé la fonction ``in_array`` pour verifier si un élément du premier tableau est dans le second
 * Si ce n'est pas le cas, je verifie si cet element n'est pas déjà dans mon tableau filtré sinon: j'utilise la fonction array_push  pour ajouter l'élément à mon tableau,
 * Puis je retourne ce tableau et je test puis ça marche
 
  
