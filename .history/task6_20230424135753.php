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
    function convertString($input)
    {
        $s = array(" ", "-", "_");
        $r = array("", "", "");
        $newPhrase = str_replace($s, $r, $input);
        echo $newPhrase;
    }

    convertString("               The quick-brown_fox jumps over the_lazy-dog       ");
    ?>
</body>

</html>