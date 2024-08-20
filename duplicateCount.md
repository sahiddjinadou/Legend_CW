
## Duplicate Count

```php
function duplicateCount($str) {
    $str = strtolower($str); //convertir en minusculeF
    $counter = 0;
    $array = [];
    foreach (str_split($str) as $char) {
        if (isset($array[$char])) {
            $array[$char]++;
            if ($array[$char] == 2) {
                $counter++;
            }
        } else {
            $array[$char] = 1;
        }
    }
    return $counter;
}