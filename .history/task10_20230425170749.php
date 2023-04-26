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
    }

    ?>
</body>

</html>