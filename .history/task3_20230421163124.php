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
        $result = $number;
        $arrayResult = [];
        while ($result >= 10) {
            while ($number > 1) {
                $i = $number % 10;
                $result += $i;
                $number = ($number - $i) / 10;
            }
            array_push($arrayResult, $result);
        }

        print_r($arrayResult);
    }

    addDigits(5689);
    ?>
</body>

</html>