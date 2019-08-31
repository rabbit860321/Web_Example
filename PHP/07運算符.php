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
        $x = 10;
        $y = 6;

        echo ($x + $y);
        echo '<br>';

        echo ($x - $y);
        echo '<br>';

        echo ($x * $y);
        echo '<br>';

        echo ($x / $y);
        echo '<br>';

        echo ($x % $y);
        echo '<br>';
        
        echo -$x;
        echo '<br>';
        
        $z = 10;
        echo ++$z;  //11
        echo '<br>';
        
        $a = 10;
        echo $a++;  //10
        echo '<br>';
        
        $x = 100;
        $y = "100";
        
        var_dump($x == $y);  //true
        var_dump($x === $y); //false
        var_dump($x != $y);  //false
        var_dump($x !== $y); //true
        
        $a = 50;
        $b = 90;
        var_dump($a > $b);  //false
        var_dump($a < $b);
        
        $x = array("a" => "red","b"=>"green");
        $y = array("c" => "blue","d" => "yellow");
        $z = $x + $y; 
        var_dump($z);
        var_dump($x == $y);
        var_dump($x === $y);
        var_dump($x != $y);
        
        $test = 'YaoRen';
        $username = isset($test) ? $test : 'nobody';
        /* isset 用來檢查變數是否設置 */
        echo $username;
        
        // PHP 5.3+ 版本写法
        $test = null;
        $username = $test ?: 'nobody';
        echo $username;
        echo '<br>';
        
    ?>
</body>
</html>