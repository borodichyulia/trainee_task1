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
        public $firstName, $lastName, $group, $averageMark;

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
            return $scholarshipAmount;
        }
    }

    class Aspirant extends Student
    {
        public $researchWork;

        function __construct($firstName, $lastName, $group, $averageMark, $researchWork)
        {
            parent::__construct($firstName, $lastName, $group, $averageMark);
            $this->researchWork = $researchWork;
        }

        function  getScholarship()
        {
            $scholarshipAmount = $this->averageMark == 5 ? '200$' : '180$';
            return $scholarshipAmount;
        }
    }


    $a = new Aspirant('Olya', 'Polyakina', '8', 4, 'test1, test2');
    $b = new Aspirant('Ksusha', 'Verd', '9', 5, 'test1, test2, test3');
    $c = new Student('Nikita', 'Stash', '3', 4);
    $d = new Student('Igor', 'Kerch', '3', 5);
    $e = new Student('Petya', 'Ivanov', '7', 4);

    echo $a->getScholarship();
    echo "<br>";
    echo $c->getScholarship();


    $arr = [$a, $b, $c, $d, $e];
    echo '<pre>';
    print_r($arr);
    echo '</pre>';

    ?>
</body>

</html>