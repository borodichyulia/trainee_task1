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
    //     function convertString($input)
    //     {
    //         $pattern = '/[ -_]\w/';
    //         $replacement = '/\W/';
    //         $g = preg_replace($pattern, $replacement, $input);
    //         echo $g;

    // for($i=0;$i<strlen($input), $i++){
    //     if($input[$i]==" " && $input[$i+1]=='/\W/'){
    //         strtoupper($input[$i+1]);
    //     }
    // }

    //         $search = array(" ", "-", "_");
    //         $replace = array("");
    //         $newPhrase = str_replace($search, $replace, $g);
    //         echo $newPhrase;
    //     }

    //     convertString("               The quick-brown_fox jumps over the_lazy-dog       ");
    $input = 'jkdkj ijff uuvvndk';

    for ($i = 0; $i < strlen($input); $i++) {
        if ($input[$i] == " " && $input[$i + 1] == '/\W/') {
            $a = strtoupper($input[$i + 1]);
            echo $a;
            echo "hello <br>";
        }
        $input[$i];
        echo "hello <br>";
    }
    // echo $input;
    ?>
</body>

</html>