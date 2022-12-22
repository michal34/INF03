<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <input id="zmienna1" name="zmienna1" type="number"/>
        <input id="zmienna2" name="zmienna2" type="number"/>
        <input type="submit"/>
    </form>
    <?php 
        $zmienna1 = $_GET["zmienna1"];
        $zmienna2 = $_GET["zmienna2"];

        if ($zmienna2 == 0) {
            echo "<h1>Nie dzieli się przez 0</h1>";
        } else {
            echo $zmienna1 / $zmienna2;
        }
    ?>
</body>
</html>