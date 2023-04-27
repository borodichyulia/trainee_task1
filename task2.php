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
    function birthdayCountdown($birthday)
    {
        $birthdayArr = date_parse($birthday);
        $convertedBirthday = mktime(0, 0, 0, $birthdayArr["month"], $birthdayArr["day"],  $birthdayArr["year"]);
        $currentDay = time();
        $diffDays = $convertedBirthday - $currentDay;
        $numberFromSecondsToDays = 86400;
        $days = (int)($diffDays / $numberFromSecondsToDays);
        echo "До дня рождения осталось $days дня";
    }
    BirthdayCountdown('20-05-2023');
    ?>
</body>

</html>