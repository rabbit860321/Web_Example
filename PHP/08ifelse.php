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
        $d = date("d");
        /* 31 */
        echo $d;
        if($d > 20){
            echo "Hello World!";
        }else{
            echo "Bang";
        }

        $y = date("Y");
        echo $y;   //2019
        if($y > 2000){
            echo "2000年以上";
        }elseif($y > 3000){
            echo "3000年以上";
        }else{
            echo "查無資料";
        }
    
    ?>
</body>
</html>