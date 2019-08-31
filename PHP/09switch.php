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
        $fav = "red";

        switch($fav){
            case "red":
                echo "紅色";
                break;
            case "blue:":
                echo "藍色";
                break;
            case "green":
                echo "綠色";
                break;
            default:
                echo "野";
        }
    ?>
</body>
</html>