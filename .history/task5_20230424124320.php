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
    // function outputNumbers($a, $b)
    // {

    //     if ($a < $b) {
    //         $i = $a;
    //         array_push(array ($arrOutput), $i);
    //         $a += 1;
    //         outputNumbers($a, $b);
    //         print_r($arrResult);
    //         echo "<br>";
    //     }
    // }
    // outputNumbers(2, 5);
    $arr = [1, 2, 3, 4, 5, 6];
    $d = array_slice($arr, 0, count($arr));
    echo "$d";
    ?>
</body>

</html>