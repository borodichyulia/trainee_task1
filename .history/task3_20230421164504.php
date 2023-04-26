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
    function addDigits($number)
    {
        $result = 0;
        $arrayResult = [];
        do {
            while ($number > 1) {
                $i = $number % 10;
                echo "i $i";
                echo "<br>";

                $result += $i;
                echo "result $result";
                echo "<br>";
                $number = ($number - $i) / 10;
                echo "number $number";
                echo "<br>";
            }
            $number = $result;
            echo $number;
        } while ($result >= 10);

        print_r($arrayResult);
    }

    addDigits(5689);
    ?>
</body>

</html>