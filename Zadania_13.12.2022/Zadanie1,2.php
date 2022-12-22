<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        <?php
            echo date("Y-m-d H:i:s");
        ?>
    </h1>

    <form action="" method="POST">
        <label for="name">Your name</label>
        <input name="name" type="text" id="name" />

        <label for="name">Your age</label>
        <input name="age" type="number" id="age" />

        <input type="submit" value="Send" />
        <input type="reset" />

    </form>
    <p style="color: red">
        <?php
            if(isset($_POST["name"]) && isset($_POST["age"]))
            {
                echo("Your name is ". $name = $_POST["name"]);
                echo("Your age is " .$age = $_POST["age"]);
            }
        ?>
</p>
</body>
</html>