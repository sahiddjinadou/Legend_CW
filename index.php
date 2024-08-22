<?php
function verified($array) {
    // Compter les occurrences de chaque valeur distincte dans le tableau
    $compteur = array_count_values($array);
    // Obtenir les valeurs des comptes
    $nombres = array_values($compteur);
    // Trier les valeurs des comptes pour une comparaison plus facile
    sort($nombres);
    // Vérifier si le tableau trié des valeurs des comptes est [2, 3]
    return $nombres == [2, 3];
}

// Test cases
var_dump(verified(["a", "a", "a", "b", "b"])); 
var_dump(verified(["a", "b", "c", "b", "c"])); 
var_dump(verified(["a", "a", "a", "a", "a"]));



//Exercice 2

function arrayDiff($a,$b)
{
 return array_diff($a,$b);
}
var_dump(arrayDiff([1,2,3,4],[3]));

//la methode  array_diff, prend deux valeurs en paramètre et recherche l'existence 
// l'existence de la seconde valeur à l'interieur du premier ,tout en suprrimant la seconde valeur 
//avec son occurrence ;aussi simple que ça !
function duplicateCount($text) {
$char = str_split(strtoupper($text)); //cette methode convertit le texte en majuscule et le divise en un tableau ;
$counts = array_count_values($characters); //le nombre d'occurrences de chaque caractère esst renvoyé dans un tableau;
    
$duplicates = array_filter($counts, fn($count) => $count > 1); //fîltre les caractères qui apparaissent à chaque fois
return count($duplicates); //On retourne ici le nombre de caractères dupliqués;
}



Exercice 4

<?php

function spinWords($str) {
    // Séparer la chaîne en mots
    $words = explode(' ', $str);
    
    // Parcourir chaque mot en utilisant une boucle for
    for ($i = 0; $i < count($words); $i++) {
        // Vérifier si le mot a cinq lettres ou plus
        if (strlen($words[$i]) >= 5) {
            // Inverser le mot
            $words[$i] = strrev($words[$i]);
        }
    }
    
    // Rejoindre les mots en une seule chaîne avec des espaces
    return implode(' ', $words);
}

// Exemples d'utilisation
echo reverseLongWords("Hey fellow warriors") . "\n";  // "Hey wollef sroirraw"
echo reverseLongWords("This is a test") . "\n";       // "This is a test"
echo reverseLongWords("This is another test") . "\n"; // "This is rehtona test"

?>


?>




