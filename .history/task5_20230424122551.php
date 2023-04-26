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
        $arrOutput = [];
        if ($a < $b) {
            $i = $a;
            array_push($arrOutput, $i);
            $a += 1;
            outputNumbers($a, $b);
            print_r($arrOutput);
            echo "<br>";
        }
    }
    outputNumbers(2, 9);

    ?>
</body>

</html>