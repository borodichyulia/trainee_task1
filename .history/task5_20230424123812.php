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

        if ($a < $b) {
            $arrOutput = [];
            $i = $a;
            array_push($arrOutput, $i);
            $a += 1;
            $arrResult = array_push($arrResult, $arrOutput);
            outputNumbers($a, $b);
            print_r($arrResult);
            echo "<br>";
        }
    }
    outputNumbers(2, 5);

    ?>
</body>

</html>