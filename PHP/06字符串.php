<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        $txt1 = "Hello World!";
        $txt2 = "Bang";
        echo $txt1 . " " . $txt2;
        echo "<br>";
        echo $txt1 ," " , $txt2;
        echo "<br>";

        echo strlen("Hello World!");
        echo "<br>";
        echo strlen($txt1);
        echo "<br>";

        /* 尋找字串 */
        echo strpos("Hello World!","World");
        echo "<br>";
        
    ?>
</body>
</html>