<?php
function distincte($tableau)
{
    // array_count_values compte  le nombre de fois que les occurrences de chaque valeur distincte dans un tableau sont répétés


    $compteur = array_count_values($tableau); 
    // on récupere le nouveau tableau puis onn trie , en suiter on vérifie la condition
   $nombre = array_values($compteur );
  ($nombre); 
    return $nombre === [2, 3]; }
$tab=["a", "a", "a", "b", "b"];
 var_dump(distincte($tab));
?>