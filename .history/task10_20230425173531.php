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
    class Calculator
    {
        private $argFirst, $argSecond;

        function __construct($argFirst, $argSecond)
        {
            $this->argFirst = $argFirst;
            $this->argSecond =  $argSecond;
        }

        function add()
        {
            $resultOfAdd = $this->argFirst + $this->argSecond;
            return $resultOfAdd;
        }

        function multiply()
        {
            $resultOfMultiply = $this->argFirst * $this->argSecond;
            return $resultOfMultiply;
        }

        function divide()
        {
            $resultOfDivide = $this->argFirst / $this->argSecond;
            return $resultOfDivide;
        }

        function subtract()
        {
            $resultOfSubtract = $this->argFirst - $this->argSecond;
            echo $resultOfSubtract;
            $d = new Calculator($resultOfSubtract, $x = 3);
            return $d;
        }

        function  addBy($s)
        {
            $r = $this->argFirst / $s;
            return $r;
        }
    }

    $l = new Calculator(6, 3);

    echo $l->subtract();

    ?>
</body>

</html>