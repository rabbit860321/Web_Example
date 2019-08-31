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
        $x = 75;
        $y = 25;

        function addition(){
            $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
        }
        addition();

        echo $z;
        echo "<br>";
        
        echo $_SERVER['PHP_SELF'];
        echo "<br>";
        echo $_SERVER['SERVER_NAME'];
        echo "<br>";
        echo $_SERVER['HTTP_HOST'];
        echo "<br>";
        echo $_SERVER['HTTP_USER_AGENT'];
        echo "<br>";
        echo $_SERVER['SCRIPT_NAME'];
    ?>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        Name: <input type="text" name="fname">
        <input type="submit">
    </form>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        Age: <input type="text" name="fage">
        <input type="submit">
    </form>
    <a href="12超級全局變量.php?subject=PHP&name=bang">TEST $GET</a>
    <?php
        $name = $_REQUEST['fname'];
        echo $name;
        $age = $_POST['fage'];
        echo $age;
        echo $_GET['subject'] . $_GET['name'];
    ?>
</body>
</html>