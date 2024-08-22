
<!-- Écrivez une fonction qui prend une chaîne d'un ou plusieurs mots et renvoie la même chaîne, mais avec tous les mots qui ont cinq lettres ou plus inversés (tout comme le nom de ce Kata). Les chaînes transmises seront constituées uniquement de lettres et d'espaces. Les espaces ne seront inclus que lorsque plusieurs mots sont présents.

Exemples :

"Hey fellow warriors"  --> "Hey wollef sroirraw" 
"This is a test        --> "This is a test" 
"This is another test" --> "This is rehtona test"
function spinWords(string $str): string {
  // TODO Have fun :)
}
``` -->

<!-- solution -->
 <!-- pour résoudre ce problème ,  nous allons récupérer le mot  et le convertir   tableau de  c
  ensuite récuoérer les donnés dans un tableau . Si la longueur du mot est supérieur à 5  , on renverse ce dernier et l'ajpute à un tableau .
  puis  reconvertir la tableau en un chaine de caratère.
  -->
 
 
 function spinWords($text) {

$words = explode(' ', $text);

$table= [];

foreach ($word as $words) {

if (strlen($word) >= 5) {
  $word = strrev($word);
}

$table[] = $word;
}


return implode( $table); }