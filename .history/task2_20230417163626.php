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
    function BirthdayCountdown($birthday)
    {
        $birthdayArr = date_parse($birthday);
        print_r($birthdayArr);
    }
    BirthdayCountdown('12-02-2023');
    ?>
</body>

</html>