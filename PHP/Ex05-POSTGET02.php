<?php
    echo "ID:",$_POST["ID"];
    echo "<br>";
    echo "password:",$_POST["psw"];
    echo "<hr>";
    ob_start();
    setcookie("ID",$_POST["ID"],time()+3600);
    setcookie("psw",$_POST["psw"],time()+3600);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>
    <a href="Ex05-POSTGET03.php">cookie</a>
</body>
</html>