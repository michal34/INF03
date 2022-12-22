<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <label for="phone">Phone number</label>
        <input type="number" name="phone" id="phone" required="true" />

        <label for="amout">Amout</label>
        <input type="number" name="amout" id="amout" required="true" />

        <label for="name">Name</label>
        <input type="text" name="name" id="name" required="true" />

        <input type="submit"/>
        <input type="reset"/>
    </form>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $link = new mysqli("localhost", "root", "", "sprawdzian");

            if($link == false) {
                die("ERROR: Could not connect. " . mysqli_connect_error());
            }

            $phone = $_POST["phone"];
            $amout = $_POST["amout"];
            $name = $_POST["name"];

            $query = "INSERT INTO zamowienia (sztuk, nazwa, telefon) VALUES ($amout, '$name', '$phone')";

            if (mysqli_query($link, $query)) {
                echo "<script>alert('Record created successfully')</script>";
            } else {
                echo "Error: " . $query . "<br>" . mysqli_error($link);
            }   

            echo '<script>window.location.href = "Zadanie3.php";</script>';
            mysqli_close($link);
            }
    ?>
</body>
</html>