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
    function outputNumbers($a, $b)
    {


        $d = range($a, $b);
        print_r($d);
        // if ($a < $b) {
        //     $arrOutput=[];
        //     $i = $a;
        //     array_push($arrOutput, $i);
        //     $a += 1;
        //     $arrResult=array_slice($arr, 0, count($arr));
        //     outputNumbers($a, $b);
        //     print_r($arrResult);
        //     echo "<br>";
        // }
    }
    outputNumbers(2, 8);
    // $arr = [1, 2, 3, 4, 5, 6];
    // $d = array_slice($arr, 0, count($arr));
    // print_r($d);
    ?>
</body>

</html>