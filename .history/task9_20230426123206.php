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

        public function __toString()
        {
            return $this;
        }
    }

    // $s = (Student) new Aspirant('Kir', 'Ostap', '8', 4, 'test1')
    // $a = 2;

    // $a = new Student('Yul', 'Bor', '5', 5);
    // echo $a->getScholarship();

    $a = new Aspirant('Kir', 'Ostap', '8', 4, 'test1');
    echo $a;
    ?>
</body>

</html>