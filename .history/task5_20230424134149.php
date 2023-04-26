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
            $i = $a;
            echo "$i ";
            $a += 1;
            outputNumbers($a, $b);
        } elseif ($a > $b) {
            $i = $a;
            echo "$i ";
            $a -= 1;
            outputNumbers($a, $b);
        } else {
            echo $b;
        }
    }
    outputNumbers(4, 9);
    ?>
</body>

</html>