<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Wynajem pokoi</title>
        <link rel="stylesheet" href="./styl2.css" />
    </head>
    <body>
        <div class="baner">
            <h1>Pensjonat pod dobrym humorem</h1>
        </div>
        <div class="container">
            <div class="blok_lewy">
                <a href="./index.html">GŁÓWNA</a>
                <img src="./1.PNG" alt="pokoje" />
            </div>
            <div class="blok_srodkowy">
                <a href="./cennik.php">CENNIK</a>
               <form action="" method="POST">
                <div>

                    <label for="numer">Numer pokoju</label>
                    <input name="numer" required />
                </div>
                <div>
                    <label for="cena">Cena pokoju</label>
                    <input name="cena" required />
                </div>
                <div>
                    <label for="date">Data wynajmu</label>
                    <input name="date" required />
                </div>
                <div>
                    <input type="submit" value="Submittuj" />
                    <input type="reset" value="Reset" />
                </div>
            </form>
            <?php

                if(isset($_POST['numer']) && isset($_POST['cena']) && isset($_POST['date']) && ($_SERVER['REQUEST_METHOD'] === 'POST')) {
                
                    $db = mysqli_connect("localhost", "root", "", "hotel");
                    $numer = $_POST['numer'];
                    $cena = $_POST['cena'];
                    $date = $_POST['date'];

                    $query = "INSERT INTO pokoj (numer, cena, dataWynajmu) VALUES ( '$numer', $cena, '$date')";

                    mysqli_query($db, $query);
                    
                    mysqli_close($db);
                }

            ?>
            </div>
            <div class="blok_prawy">
                <a href="./kalkulator.html">KALKULATOR</a>
                <img src="./3.PNG" alt="pokoje" />
            </div>
        </div>
        <div class="stopka"><p>Stronę opracował:</p></div>
    </body>
</html>
