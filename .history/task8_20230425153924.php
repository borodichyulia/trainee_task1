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
        private $arr, $rows, $column;

        function __construct($arr, $rows, $column)
        {
            $this->arr = $arr;
            $this->rows = $rows;
            $this->column = $column;
        }

        function additionMatrix($arrForAddition)
        {
            if ($this->rows == count($arrForAddition) && $this->column == count($arrForAddition[0])) {
                echo "Addition matrix<br>";
                for ($i = 0; $i < $this->rows; $i++) {
                    for ($j = 0; $j < $this->column; $j++) {
                        $this->arr[$i][$j] = $this->arr[$i][$j] + $arrForAddition[$i][$j];
                        print_r($this->arr[$i][$j] . " ");
                    }
                    echo "<br>";
                }
            } else {
                echo "Сложение данных матриц невозможно";
            }
        }

        function multiplicationByNumber($number)
        {
            echo "Multiplication by number<br>";
            for ($i = 0; $i < $this->rows; $i++) {
                for ($j = 0; $j < $this->column; $j++) {
                    $this->arr[$i][$j] = $this->arr[$i][$j] * $number;
                    print_r($this->arr[$i][$j] . " ");
                }
                echo "<br>";
            }
        }

        function printOutput()
        {
            echo "Print output<br>";
            for ($i = 0; $i < $this->rows; $i++) {
                for ($j = 0; $j < $this->column; $j++) {
                    print_r($this->arr[$i][$j] . " ");
                }
                echo "<br>";
            }
        }

        function multiplicationMatrix($arrForMatrix)
        {
            echo "Multiplication matrix<br>";
            $result = [];
            if ($this->column == count($arrForMatrix)) {
                for ($i = 0; $i < $this->rows; $i++) {
                    for ($j = 0; $j < count($arrForMatrix[2]); $j++) {
                        $result[$i][$j] = 0;
                        for ($k = 0; $k < $this->column; $k++) {
                            $result[$i][$j] += $this->arr[$i][$k] * $arrForMatrix[$k][$j];
                        }
                    }
                }
                print_r($result);
            } else {
                echo "Умножение данных матриц невозможно";
            }
        }
    }

    $a = new Matrix([[1, 2, 3], [4, 5, 6], [7, 8, 9]], 3, 3);

    $arrForCheck = [[1, 2, 3], [4, 5, 6], [7, 8, 9]];
    $a->additionMatrix($arrForCheck);
    // $a->multiplicationByNumber(2);
    // $a->printOutput();
    // $a->multiplicationMatrix($arrForCheck);
    ?>
</body>

</html>