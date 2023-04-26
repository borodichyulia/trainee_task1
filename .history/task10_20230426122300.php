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
        private $argFirst, $argSecond, $result;

        function __construct($argFirst, $argSecond)
        {
            $this->argFirst = $argFirst;
            $this->argSecond =  $argSecond;
        }

        function add()
        {
            $this->result = $this->argFirst + $this->argSecond;
            return $this;
        }

        function multiply()
        {
            $this->result = $this->argFirst * $this->argSecond;
            return $this;
        }

        function divide()
        {
            $this->result = $this->argFirst / $this->argSecond;
            return $this;
        }

        function subtract()
        {
            $this->result = $this->argFirst - $this->argSecond;
            return $this;
        }

        function  addBy($addendum)
        {
            $this->result = $this->result / $addendum;
            return $this;
        }

        public function __toString()
        {
            return $this->result;
        }
    }

    $l = new Calculator(8, 3);

    echo $l->subtract()->addBy(10);


    ?>
</body>

</html>