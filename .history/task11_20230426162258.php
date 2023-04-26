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
            [0, 1, 0, 1, 1, 1, 1, 0, 1, 1],
            [1, 1, 1, 1, 1, 0, 1, 1, 0, 1],
            [0, 1, 1, 1, 0, 1, 0, 1, 1, 1],
            [1, 0, 1, 1, 1, 1, 1, 1, 1, 0],
            [1, 1, 1, 1, 1, 0, 1, 0, 1, 1],
            [1, 0, 1, 1, 0, 1, 1, 1, 1, 0],
            [1, 1, 1, 0, 1, 1, 1, 1, 0, 1],
            [0, 1, 1, 1, 0, 1, 0, 1, 0, 1],
            [0, 1, 1, 0, 1, 1, 1, 0, 1, 1],
            [1, 0, 1, 1, 1, 0, 1, 1, 1, 1]
        ];

        $x1 = $A[0];
        $y1 = $A[1];
        $x2 = $B[0];
        $y2 = $B[1];

        $n = [];
        if ($x1 > $x2) {
            for ($i = $x1; $i >= $x2; $i--) {
                $p = $array[$i][$y1];
                array_push($n, [$i, $y1]);
                if ($p == 0) {
                    $i += 1;
                    if ($y1 < $y2) {
                        $y1 += 1;
                        $p = $array[$i][$y1];
                        array_push($n,  [$i, $y1]);
                        echo " $p [$i][$y1]";
                        echo "<br>";
                        if ($p == 0) {
                            $y1 -= 2;
                            $p = $array[$i][$y1];
                            array_push($n, [$i, $y1]);
                            echo " $p [$i][$y1]";
                            echo "<br>";
                            if ($p == 0) {
                                $y1 += 2;
                                $i += 1;
                                $p = $array[$i][$y1];
                                array_push($n,  [$i, $y1]);
                                echo " $p [$i][$y1]";
                                echo "<br>";
                            }
                        }
                    }
                } else {
                    array_push($n,  [$i, $y1]);
                    echo " $p [$i][$y1]";
                    echo "<br>";
                }
            }
        } else {
            for ($i = $x1; $i <= $x2; $i++) {
                $p = $array[$i][$y1];
                if ($p == 0) {
                    $i -= 1;
                    $y1 += 1;
                    $p = $array[$i][$y1];
                    array_push($n,  [$i, $y1]);
                    echo " $p [$i][$y1]";
                    echo "<br>";
                    if ($p == 0) {
                        $y1 -= 2;
                        $p = $array[$i][$y1];
                        array_push($n, [$i, $y1]);
                        echo " $p [$i][$y1]";
                        echo "<br>";
                        if ($p == 0) {
                            $y1 += 2;
                            $i -= 1;
                            $p = $array[$i][$y1];
                            array_push($n,  [$i, $y1]);
                            echo " $p [$i][$y1]";
                            echo "<br>";
                        }
                    }
                } else {
                    array_push($n, [$i, $y1]);
                    echo " $p [$i][$y1]";
                    echo "<br>";
                }
            }
        }

        if ($y1 < $y2) {
            for ($i = $y1; $i <= $y2; $i++) {
                $row = $n[count($n) - 1][0];
                $l = $array[$row][$i];
                echo " $l [$row][$i]";
                echo "<br>";
            }
        } else {
            for ($i = $y1; $i >= $y2; $i--) {
                $row = $n[count($n) - 1][0];
                $l = $array[$row][$i];
                echo " $l [$row][$i]";
                echo "<br>";
            }
        }
    }



    findPath([2, 8], [9, 1]);
    ?>
</body>

</html>