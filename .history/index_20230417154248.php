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
    //TASK1
    //if|else
    function whetherNumber(int $inputNumber)
    {
        if ($inputNumber <= 10) echo "Equal or less than 10";
        elseif ($inputNumber > 10 && $inputNumber <= 20) echo "More than 10";
        elseif ($inputNumber > 20 && $inputNumber <= 30) echo "More than 20";
        else echo "More than 30";
    }

    whetherNumber(30);


    ?>

</body>

</html>