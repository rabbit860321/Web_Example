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
        $cars = array("Volvo","BMW","Toyota");
        echo $cars[0] . "," . $cars[1] . "," . $cars[2];
        echo "<br>";
        echo count($cars);
        echo "<br>";
        
        for($i = 0;$i < count($cars);$i++){
            echo $cars[$i];
            echo "<br>";
        }
        
        
        $age = array("Peter"=>"35","Ban"=>"37","Joe"=>"43");
        /* 關聯數組 */
        echo "Peter " . $age["Peter"] . "歲.";
        echo "<br>";
        
        foreach($age as $x=>$x_value){
            echo "Key=" . $x . ",Value" . $x_value;
            echo "<br>";
        }
    ?>
</body>
</html>