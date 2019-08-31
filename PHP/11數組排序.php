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
        $numbers = array(4,6,2,22,11);
        /* 升序 */
        sort($numbers);
        fun1($numbers);
        
        /* 降序 */
        rsort($numbers);
        fun1($numbers);
        
        $age = array("Peter"=>"35","Ben"=>"37","Joe"=>"43");

        /* value升序 */
        asort($age);
        fun2($age);
        
        /* value降序 */
        arsort($age);
        fun2($age);
        
        /* key升序 */
        ksort($age);
        fun2($age);

        /* key降序 */
        krsort($age);
        fun2($age);


        function fun1($arr){
            for($i = 0;$i<count($arr);$i++){
                echo $arr[$i]." ";
            }
            echo "<br>";
        }
        function fun2($arr){
            foreach($arr as $k => $v){
                echo $k . $v . " ";
            }
            echo "<br>";
        }
    ?>
</body>
</html>