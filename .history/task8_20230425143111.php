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
    // echo "Multiplication by number<br>";
    // class Matrix
    // {
    //     private $arr, $rows, $column;

    //     function __construct($arr, $rows, $column)
    //     {
    //         $this->arr = $arr;
    //         $this->rows = $rows;
    //         $this->column = $column;
    //     }

    //     function additionMatrix($arrForAddition)
    //     {
    //         echo "Addition matrix<br>";
    //         for ($i = 0; $i < count($this->arr); $i++) {
    //             for ($j = 0; $j < count($this->arr[$i]); $j++) {
    //                 $this->arr[$i][$j] = $this->arr[$i][$j] + $arrForAddition[$i][$j];
    //                 print_r($this->arr[$i][$j] . " ");
    //             }
    //             echo "<br>";
    //         }
    //     }

    //     function multiplicationByNumber($number)
    //     {
    //         echo "Multiplication by number<br>";
    //         for ($i = 0; $i < count($this->arr); $i++) {
    //             for ($j = 0; $j < count($this->arr[$i]); $j++) {
    //                 $this->arr[$i][$j] = $this->arr[$i][$j] * $number;
    //                 print_r($this->arr[$i][$j] . " ");
    //             }
    //             echo "<br>";
    //         }
    //     }

    //     function printOutput()
    //     {
    //         echo "Print output<br>";
    //         for ($i = 0; $i < count($this->arr); $i++) {
    //             for ($j = 0; $j < count($this->arr[$i]); $j++) {
    //                 print_r($this->arr[$i][$j] . " ");
    //             }
    //             echo "<br>";
    //         }
    //     }

    //     function multiplicationMatrix($arrForMatrix)
    //     {
    //         $result = [];
    //         for ($i = 0; $i < count($this->arr); $i++) {
    //             for ($j = 0; $j < count($arrForMatrix[0]); $j++) {
    //                 $result[$i][$j] = 0;
    //                 for ($k = 0; $k < count($this->arr); $k++) {
    //                     $result[$i][$j] += $this->arr[$i][$k] * $arrForMatrix[$k][$j];
    //                 }
    //             }

    //             echo "<br>";
    //         }
    //     }
    // }


    function multiplicationMatrix($arr, $arrForMatrix)
    {
        $result = [];
        echo count($arr[0]);
        echo count($arrForMatrix);
        for ($i = 0; $i < count($arr); $i++) {
            for ($j = 0; $j < count($arrForMatrix[2]); $j++) {
                $result[$i][$j] = 0;
                for ($k = 0; $k < count($arr[2]); $k++) {
                    $result[$i][$j] += $arr[$i][$k] * $arrForMatrix[$k][$j];
                }
            }

            echo "<br>";
        }
        print_r($result);
    }

    $arr = [[1, 2, 2], [3, 1, 1]];
    $arrForMatrix = [[4, 2], [3, 1], [1, 5]];
    multiplicationMatrix($arr, $arrForMatrix);
    ?>
</body>

</html>