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
        $i = $number % 10;
        $result = $number;
        $arrayResult = [];
        while ($result >= 10) {
            while ($i > 0) {
                $i = $number % 10;
                $result += $i;
            }
            array_push($arrayResult, $i);
        }

        print_r($arrayResult);
    }
    ?>
</body>

</html>