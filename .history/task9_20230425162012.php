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
    class Student
    {
        private $firstName, $lastName, $group, $averageMark;

        function __construct($firstName, $lastName, $group, $averageMark)
        {
            $this->firstName = $firstName;
            $this->lastName = $lastName;
            $this->group = $group;
            $this->averageMark = $averageMark;
        }

        function  getScholarship()
        {
            $scholarshipAmount = $this->averageMark == 5 ? '100$' : '80$';
            echo "Scholarship amount: $scholarshipAmount";
        }
    }

    $a = new Student('Yul', 'Bor', '5', 3);
    $a->getScholarship();
    ?>
</body>

</html>