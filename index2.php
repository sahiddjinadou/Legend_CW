<!-- résolution
 pour ce faire ,on recupère les deux tableau , ensuite on parcours le tableau en vérifiant si l'élément à l'index i de a et égale à celle àl'index y.
 si a[i]=b[y]alors ,  renvoyer un tableau videou 0 avec unn message "les éléments" sont égaux.
 sinon , créé un nouveau tableau et push la valeur diférente trouvé  , ou on utilise la méthode array_diff pour ressortir la différence..-->

 
<!-- utilisation de la méthode array_diff -->

 <?php
 echo"différence";
 function arrayDiff($a, $b) {
    $result=[];
  if (count($a) == count($b)) {
    return 0;
    echo"aucune différence";
  }else{
    $result = array_diff($a, $b);
    return $result;
  }
  
}

$array1 = array("a" => "green", "red", "blue", "red" ,"23","5");
$array2 = array("b" => "green", "yellow", "red");
$array3= arrayDiff($array1, $array2);

print_r($array3);
 ?>