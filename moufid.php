<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    /**
     * fonction permettant de vérifier si le tableau contient trois et deux éléments de même valeur
     * @param mixed $arr
     * @return boolean | string
     */
    function verify($arr)
    {
        if(count($arr) !== 5){
            return "Le tableau n'est pas au complet";
        } else {
        $occurences = array_count_values($arr);
     $three_repeat  = false;
        $two_repeat = false;
        foreach ($occurences as $value) {
            if ($value == 3) {
                $three_repeat = true;
            }
            if ($value == 2) {
                $two_repeat = true;
            }
        }
            if($three_repeat && $two_repeat ){
                echo "true"  ;
            } else {
                echo "false";
            }
    }
    };
    echo (verify(["bo","ca", "ca", "ca","bo"]));

    ?>
</body>

</html>