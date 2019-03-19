<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ex02</title>
</head>
<body>
    <h1>巢狀for</h1>
    <hr>
    <?php
        for($i=0;$i<5;$i++){
            for($j=$i;$j<5-1;$j++){
                echo "&nbsp&nbsp";
            }
            for($k=0 ; $k< ($i*2-1) ; $k++){
                echo "*";
            }
            echo "<br>";
        }

        for($x=0;$x<=2;$x++){
            for($y=0;$y<=$x;$y++){
                echo "&nbsp&nbsp";
            }
            for($h=5-($x*2);$h>=1;$h--){
                echo "*";
            }
            echo "<br>";
        }
    ?>
</body>
</html>