<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ex3</title>
</head>
<body>
    <h1>for九九乘法表</h1>
    <hr>
    <div class="b">
    <?php
        for($i=1;$i<10;$i++){
            for($j=1;$j<10;$j++){
                // echo $j,"*",$i,"=",$i*$j,"&nbsp;";
                printf("%d*%d=%02d&nbsp;&nbsp;",$j,$i,$i*$j);
            }
            echo "<br>";
        }
    ?>
    </div>
</body>
</html>