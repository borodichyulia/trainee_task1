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
    function outputNumbers($arg1, $arg2)
    {
        if ($arg1 < $arg2) {
            $i = $arg1;
            echo "$i ";
            $arg1 += 1;
            outputNumbers($arg1, $arg2);
        } elseif ($arg1 > $arg2) {
            $i = $arg1;
            echo "$i ";
            $arg1 -= 1;
            outputNumbers($arg1, $arg2);
        } else {
            echo $arg2;
        }
    }
    outputNumbers(9, 4);
    ?>
</body>

</html>