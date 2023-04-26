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
    class Matrix
    {
        public $arr, $rows, $column;

        function __construct($arr, $rows, $column)
        {
            $this->arr = $arr;
            $this->rows = $rows;
            $this->column = $column;
        }

        function additionMatrix($arr, $arrForAddition)
        {
            for ($i = 0; $i < count($arr); $i++) {
                for ($j = 0; $j < count($arr[$i]); $j++) {
                    $arr[$i][$j] = $arr[$i][$j] + $arrForAddition[$i][$j];
                    print_r($arr[$i][$j] . " ");
                }
                echo "<br>";
            }
        }

        function multiplicationByNumber()
        {
        }

        function printOutput()
        {
        }

        function multiplicationMatrix()
        {
        }
    }

    function additionMatrix($arr, $arrForAddition)
    {
        for ($i = 0; $i < count($arr); $i++) {
            for ($j = 0; $j < count($arr[$i]); $j++) {
                $arr[$i][$j] = $arr[$i][$j] + $arrForAddition[$i][$j];
                print_r($arr[$i][$j] . " ");
            }
            echo "<br>";
        }
    }

    $arr = [[1, 2, 3], [4, 5, 6], [7, 8, 9]];
    $arrForAddition = [[1, 2, 3], [4, 5, 6], [7, 8, 9]];
    additionMatrix($arr, $arrForAddition)
    ?>
</body>

</html>