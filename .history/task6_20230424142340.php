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
    // function convertString($input)
    // {
    //     $search = array(" ", "-", "_");
    //     $replace = array("");
    //     $newPhrase = str_replace($search, $replace, $input);
    //     echo $newPhrase;
    // }

    // convertString("               The quick-brown_fox jumps over the_lazy-dog       ");

    $str = "jhf jknjds mlk";
    // for($i=0; $i<strlen($str); $i++){
    //     if($str[$i]==" " && $str[$i+1]=="")
    // }
    $pattern = '/ \w/';
    $replacement = "D";
    $a = strlen($str);
    $g = preg_replace($pattern, $replacement, $str);
    // $a = strtoupper($str[0]);
    echo $g;
    ?>
</body>

</html>