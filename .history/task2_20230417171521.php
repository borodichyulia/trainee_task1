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
        $convertedBirthday = mktime(0, 0, 0, $birthdayArr["month"], $birthdayArr["day"],  $birthdayArr["year"]);
        $currentDay = time();
        $diff_days = $convertedBirthday - $currentDay;
        echo "$convertedBirthday . OOOOOO . $currentDay . OOOOO .$diff_days";
    }
    BirthdayCountdown('20-04-2023');
    ?>
</body>

</html>