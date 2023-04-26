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
    function findPath($A, $B)
    {
        $array = [
            [0, 1, 0, 0, 1, 1, 1, 0, 0, 1],
            [1, 0, 1, 1, 1, 0, 1, 1, 0, 0],
            [0, 1, 1, 1, 0, 1, 0, 0, 1, 1],
            [1, 0, 1, 1, 1, 0, 1, 1, 1, 0],
            [0, 0, 1, 1, 1, 0, 1, 0, 0, 1],
            [1, 0, 1, 1, 0, 0, 1, 0, 1, 0],
            [1, 1, 1, 0, 1, 0, 0, 1, 0, 1],
            [0, 1, 1, 1, 0, 1, 0, 1, 0, 0],
            [0, 1, 1, 0, 1, 0, 1, 0, 1, 1],
            [1, 0, 0, 0, 1, 0, 1, 1, 1, 1]
        ];

        $x1 = $A[0];
        $y1 = $A[1];
        $x2 = $B[0];
        $y2 = $B[1];

        if ($x1 > $x2) {
            for ($i = $x1; $i >= $x2; $i--) {
                $p = $array[$i][$y1];
                echo " $p [$i $y1]";
                echo "<br>";
            }
        } else {
            for ($i = $x1; $i <= $x2; $i++) {
                echo "$i $y1";
                echo "<br>";
            }
        }
    }

    findPath([3, 2], [0, 9]);
    ?>
</body>

</html>