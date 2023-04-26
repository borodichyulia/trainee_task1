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
                if ($l == 0) {
                    $i += 1;
                    $row += 1;
                    $l = $array[$row][$i];
                    echo " $l [$row][$i]";
                    echo "<br>";
                } else {
                    echo " $l [$row][$i]";
                    echo "<br>";
                }
            }
        } else {
            for ($i = $y1; $i >= $y2; $i--) {
                $row = $n[count($n) - 1][0];
                $l = $array[$row][$i];
                if ($l == 0) {
                    $i += 1;
                    $row += 1;
                    $l = $array[$row][$i];
                    echo " $l [$row][$i]";
                    echo "<br>";
                } else {
                    echo " $l [$row][$i]";
                    echo "<br>";
                }
            }
        }
    }

    // class Path
    // {
    //     public $x1, $y1, $x2, $y2, $n = [];
    //     public $array = [
    //         [0, 1, 0, 1, 1, 1, 1, 0, 1, 1],
    //         [1, 1, 1, 1, 1, 0, 1, 1, 0, 1],
    //         [0, 1, 1, 1, 0, 1, 0, 1, 1, 1],
    //         [1, 0, 1, 1, 1, 1, 1, 1, 1, 0],
    //         [1, 1, 1, 1, 1, 0, 1, 0, 1, 1],
    //         [1, 0, 1, 1, 0, 1, 1, 1, 1, 0],
    //         [1, 1, 1, 0, 1, 1, 1, 1, 0, 1],
    //         [0, 1, 1, 1, 0, 1, 0, 1, 0, 1],
    //         [0, 1, 1, 0, 1, 1, 1, 0, 1, 1],
    //         [1, 0, 1, 1, 1, 0, 1, 1, 1, 1]
    //     ];


    //     function __construct($x1, $y1, $x2, $y2)
    //     {
    //         $this->x1 = $x1;
    //         $this->y1 =  $y1;
    //         $this->x2 = $x2;
    //         $this->y2 =  $y2;
    //     }

    //     //if x1>x2
    //     function top()
    //     {
    //         for ($i = $this->x1; $i >= $this->x2; $i--) {
    //             $p = $this->array[$i][$this->y1];
    //             array_push($this->n, [$i, $this->y1]);
    //             if ($p == 0) {
    //                 $i += 1;

    //                 $this->y1 += 1;
    //                 $p = $this->array[$i][$this->y1];
    //                 array_push($this->n,  [$i, $this->y1]);
    //                 echo " $p [$i][$this->y1]";
    //                 echo "<br>";
    //                 if ($p == 0) {
    //                     $this->y1 -= 2;
    //                     $p = $this->array[$i][$this->y1];
    //                     array_push($this->n, [$i, $this->y1]);
    //                     echo " $p [$i][$this->y1]";
    //                     echo "<br>";
    //                     if ($p == 0) {
    //                         $this->y1 += 2;
    //                         $i += 1;
    //                         $p = $this->array[$i][$this->y1];
    //                         array_push($this->n,  [$i, $this->y1]);
    //                         echo " $p [$i][$this->y1]";
    //                         echo "<br>";
    //                     }
    //                 }
    //             } else {
    //                 array_push($this->n,  [$i, $this->y1]);
    //                 echo " $p [$i][$this->y1]";
    //                 echo "<br>";
    //             }
    //         }
    //     }
    //     //if x1<x2
    //     function bottom()
    //     {
    //         for ($i = $this->x1; $i <= $this->x2; $i++) {
    //             $p = $this->array[$i][$this->y1];
    //             if ($p == 0) {
    //                 $i -= 1;
    //                 $this->y1 += 1;
    //                 $p = $this->array[$i][$this->y1];
    //                 array_push($this->n,  [$i, $this->y1]);
    //                 echo " $p [$i][$this->y1]";
    //                 echo "<br>";
    //                 if ($p == 0) {
    //                     $this->y1 -= 2;
    //                     $p = $this->array[$i][$this->y1];
    //                     array_push($this->n, [$i, $this->y1]);
    //                     echo " $p [$i][$this->y1]";
    //                     echo "<br>";
    //                     if ($p == 0) {
    //                         $this->y1 += 2;
    //                         $i -= 1;
    //                         $p = $this->array[$i][$this->y1];
    //                         array_push($this->n,  [$i, $this->y1]);
    //                         echo " $p [$i][$this->y1]";
    //                         echo "<br>";
    //                     }
    //                 }
    //             } else {
    //                 array_push($this->n, [$i, $this->y1]);
    //                 echo " $p [$i][$this->y1]";
    //                 echo "<br>";
    //             }
    //         }
    //     }
    //     //if y1<y2
    //     function left()
    //     {
    //         for ($i = $this->y1; $i >= $this->y2; $i--) {
    //             $row = $this->n[count($this->n) - 1][0];
    //             $l = $this->array[$row][$i];
    //             echo " $l [$row][$i]";
    //             echo "<br>";
    //         }
    //     }
    //     //if y1<y2
    //     function right()
    //     {
    //         for ($i = $this->y1; $i <= $this->y2; $i++) {
    //             $row = $this->n[count($this->n) - 1][0];
    //             $l = $this->array[$row][$i];
    //             echo " $l [$row][$i]";
    //             echo "<br>";
    //         }
    //     }
    // }

    // $obj = new Path(2, 8, 9, 1);
    // echo $obj->bottom();
    // echo $obj->left();
    findPath([2, 8], [9, 1]);
    ?>
</body>

</html>