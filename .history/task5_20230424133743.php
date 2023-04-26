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
        $start = $a;
        if ($a <= $b && $start < $b) {
            $i = $a;
            echo "$i ";
            $a += 1;
            outputNumbers($a, $b);
        }
        if ($a >= $b && $start > $b) {
            $i = $a;
            echo "$i ";
            $a -= 1;
            outputNumbers($a, $b);
        } else {
            echo $b;
        }
    }
    outputNumbers(2, 8);
    ?>
</body>

</html>