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
    function arrayDeleteElement($arr, $position)
    {
        array_splice($arr, $position, 1);
        print_r($arr);
    }
    $arr = [1, 2, 3, 4, 5, 6];
    arrayDeleteElement($arr, 2);
    ?>
</body>

</html>