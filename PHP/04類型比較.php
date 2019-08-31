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
        if(42 == "42"){
            echo '1、值相等';
        }

        echo '<br>';

        if(42 === "42"){
            echo '2、類型相等';
            echo '<br>';
        }else{
            echo '3、不相等';
            echo '<br>';
        }

        echo '0 == false:';
        var_dump(0 == false);
        echo '0 === false:';
        var_dump(0 === false);

        echo '0 == null:';
        var_dump(0 == null);
        echo '0 === null:';
        var_dump(0 === null);

        echo 'false == null';
        var_dump(false == null);
        echo 'false === null';
        var_dump(false === null);

        echo '"0" == false:';
        var_dump("0" == false);
        echo '"0" === false:';
        var_dump("0" === false);
    ?>
</body>
</html>