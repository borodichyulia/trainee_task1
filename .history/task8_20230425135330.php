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
    // class Matrix
    // {
    //     private $arr, $rows=count($arr), $column=count($arr[0]);

    //     function __construct($arr, $rows, $column)
    //     {
    //         $this->arr = $arr;
    //         $this->rows = $rows;
    //         $this->column = $column;
    //     }

    //     function additionMatrix($arrForAddition)
    //     {
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
    //     }

    //     function multiplicationMatrix()
    //     {
    //     }
    // }

    function multiplicationByNumber($arr, $number)
    {
        for ($i = 0; $i < count($arr); $i++) {
            for ($j = 0; $j < count($arr[$i]); $j++) {
                $arr[$i][$j] = $arr[$i][$j] * $number;
                print_r($arr[$i][$j] . " ");
            }
            echo "<br>";
        }
    }
    $arr = [[1, 2, 3], [1, 2, 3], [1, 2, 3]];
    $number = 2;
    multiplicationByNumber($arr, $number)
    ?>
</body>

</html>