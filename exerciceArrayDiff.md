Explication de la solution 
1- Je crée une fonction ou je passe deux paramètres 
2- j'utilise la méthode array_diff de php pour pourvoir faire la comparaison 
```` php


function arraydiff($a,$b){
print_r (array_diff($a,$b));
}
arraydiff([1,23],[1,24]);