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
        $x = 123;
        var_dump($x);
        echo "<br>";
        
        $x = -456;
        var_dump($x);
        echo "<br>";

        $x = 0x8C;
        var_dump($x);
        echo "<br>";

        $x = 047;
        var_dump($x);
        echo "<br>";

        $x = 3.14;
        var_dump($x);
        echo "<br>";

        $x = 2.4e3;
        var_dump($x);
        echo "<br>";

        $x = 8E-5;
        var_dump($x);
        echo "<br>";

        $cars = array("Volvo","BMW","Toyota");
        var_dump($cars);
        echo "<br>";

        
    ?>
</body>
</html>