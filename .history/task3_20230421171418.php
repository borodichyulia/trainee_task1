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
            while ($number > 0) {
                if ($number < 10) {
                    $i = $number;
                } else {
                    $i = $number % 10;
                }

                $result += $i;
                $number = ($number - $i) / 10;
            }
            $number = $result;
            $result = 0;
            array_push($arrayResult, $number);
        } while ($number >= 10);

        echo '<pre>';
        print_r($arrayResult);
        echo '</pre>';
    }

    addDigits(7478);
    ?>
</body>

</html>