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
    //if|else
    function whetherNumberIf(int $inputNumber)
    {
        $nameTask = "whetherNumberIf: ";
        if ($inputNumber <= 10) echo $nameTask . "Equal or less than 10";
        elseif ($inputNumber > 10 && $inputNumber <= 20) echo $nameTask . "More than 10";
        elseif ($inputNumber > 20 && $inputNumber <= 30) echo $nameTask . "More than 20";
        else echo "More than 30";
        echo "<br>";
    }
    whetherNumberIf(8);

    //ternary
    function whetherNumberTernary(int $inputNumber)
    {
        $nameTask = "whetherNumberTernary: ";
        $result = $inputNumber <= 10 ? "Equal or less than 10" : ($inputNumber > 10 && $inputNumber <= 20 ? "More than 10" : ($inputNumber > 20 && $inputNumber <= 30 ? "More than 20" : "More than 30"));
        echo $nameTask . $result;
        echo "<br>";
    }
    whetherNumberTernary(21);

    //switch
    function whetherNumberSwitch(int $inputNumber)
    {
        $nameTask = "whetherNumberSwitch: ";
        switch ($inputNumber) {
            case  $inputNumber <= 10:
                echo $nameTask . "Equal or less than 10";
                break;
            case $inputNumber > 10 && $inputNumber <= 20:
                echo $nameTask . "More than 10";
                break;
            case $inputNumber > 20 && $inputNumber <= 30:
                echo $nameTask . "More than 20";
                break;
            default:
                echo $nameTask . "More than 30";
                break;
        }
        echo "<br>";
    }
    whetherNumberTernary(21);
    ?>

</body>

</html>