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
    echo "Multiplication by number<br>";
    class Matrix
    {
        private $arr, $rows, $column;

        function __construct($arr, $rows, $column)
        {
            $this->arr = $arr;
            $this->rows = $rows;
            $this->column = $column;
        }

        function additionMatrix($arrForAddition)
        {
            echo "Addition matrix<br>";
            for ($i = 0; $i < count($this->arr); $i++) {
                for ($j = 0; $j < count($this->arr[$i]); $j++) {
                    $this->arr[$i][$j] = $this->arr[$i][$j] + $arrForAddition[$i][$j];
                    print_r($this->arr[$i][$j] . " ");
                }
                echo "<br>";
            }
        }

        function multiplicationByNumber($number)
        {
            echo "Multiplication by number<br>";
            for ($i = 0; $i < count($this->arr); $i++) {
                for ($j = 0; $j < count($this->arr[$i]); $j++) {
                    $this->arr[$i][$j] = $this->arr[$i][$j] * $number;
                    print_r($this->arr[$i][$j] . " ");
                }
                echo "<br>";
            }
        }

        function printOutput()
        {
        }

        function multiplicationMatrix()
        {
        }
    }


    ?>
</body>

</html>