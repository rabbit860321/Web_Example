<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ex04-function</title>
</head>
<body>
    <?
        $date = getdate();
        echo "現在日期:",$date["year"],"年",$date["mon"],"月",$date["mday"],"日";
        echo "<br>";
        echo "今年還有",365-$date["yday"],"天";
        echo "<hr>";

        function Fibonacci($num){
            if($num < 2 ){
                return $num;
            }else{
                return Fibonacci($num-1) + Fibonacci($num-2);
            }
        }

        $num = 10;
        echo "num=",$num;
        echo "<br>";
        echo "Fibonacci(",$num,")=",Fibonacci($num);
    ?>
</body>
</html>