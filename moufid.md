# Le but de l'exercice est demettre en place une fonction permettant de vérifier si un tableau contient 3 exemplaires d'un même élément et deux exemplaires d'un même autre élément

`````php
<?php
function verify($arr){
    for($i = 0; $i <count($arr); $i++){
        if (str_repeat($arr[$i]) === 3 && str_repeat($arr[$i]) === 2 && $arr[$i] !== $arr[$i]){
           return true
        } else {
            return false
        }
    }
}
 echo(verify(["a", "a","b","a", "b"]));

 ?>