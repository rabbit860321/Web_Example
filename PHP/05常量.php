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
        /* 區分大小寫 */
        define("Hello","Hello World!");
        echo Hello;
        echo HELLO;

        /* 不區分大小寫 */
        define("Bang","BangBangBang",true);
        echo Bang;
        echo BANG;

        function myTest(){
            echo Hello;
            /* 常量是全局的 */
        }
        myTest();
    ?>
</body>
</html>