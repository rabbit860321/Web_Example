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
        $txt = "Hello world!";
        $x = 5;
        $y = 10.5;

        function myTest(){
            $y = 10;
            echo "變量x為:$x";
            echo "<br>";
            echo "變量y為:$y";
            echo "<br>";
        }

        myTest();

        function myTest1(){
            global $x,$y;
            //global 关键字用于函数内访问全局变量。
            $y = $x+$y;
            // $GLOBALS['y'] = $GLOBALS['x']+$GLOBALS['y'];
        }
        myTest1();
        echo "變量y為:$y";
        echo "<br>";

        function myTest2(){
            static $z = 0;
            // 若希望局部變量不要被刪除 使用 static
            echo "變量z為:$z";
            $z++;
            echo "<br>";
        }
        myTest2();
        myTest2();
        myTest2();
    ?>
</body>
</html>