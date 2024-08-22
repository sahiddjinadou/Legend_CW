```php

function spinWords(string $str): string {
 $mots = explode('', $str); //retourne un tableau de chaînes de caractères, chacune d'elle étant une sous-chaîne du paramètre string extraite en utilisant le séparateur separator.

 foreach($mots as $mot) {
    // Un foreach pour parcourir le tableau 
    if(strlen($mots>=5)){// si la taille de la chaîne est supérieur ou égale à 5

        $mot = strrev($mot); //on procèdera à l'inverse de la chaîne
    }
    return implode('', $mots); //Enfin on retournera l'ensemble des éléments du  tableau en une chaîne
 }
}
```
