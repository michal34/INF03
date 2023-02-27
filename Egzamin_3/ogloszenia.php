<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8" />
        <title>Portal ogłoszeniowy</title>
        <link rel="stylesheet" href="./styl1.css" />
    </head>
    <body>
        <header class="baner">
            <h1>Portal ogłoszeniowy</h1>
        </header>
        <div class="container">
            <div class="panel_lewy">
                <h2>Kategorie ogłoszeń</h2>
                <ol>
                    <li>Książki</li>
                    <li>Muzyka</li>
                    <li>Filmy</li>
                </ol>
                <img width="200px" height="300px" src="./ksiazki.jpg" />
                <table>
                    <tr>
                        <td>1</td>
                        <td>2</td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>5</td>
                        <td>6</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>5</td>
                        <td>6</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>5</td>
                        <td>6</td>
                    </tr>
                </table>
            </div>
            <div class="panel_prawy">
                <h2>Ogłoszenia kategorii książek</h2>
                <?php 
                    $db = mysqli_connect("localhost", "root", "", "ogloszenia");

                    if (!$db) {
                        die("Something went wrong");

                        $sql1 = "SELECT id, tytul, tresc FROM ogloszenia WHERE kategoria = 1;";
                        $row = mysqli_query($db, $sql1);

                        while($row) {
                            echo("<h3>" . $row['id'] . "-" . $row['tytul'] . "</h3>");
                            echo("<p>" . $row['tresc'] . "</p>");

                            $sql2 = "SELECT uz.telefon FROM ogloszenia as og JOIN uzytkownik AS uz ON og.uzytkownik = uz.id WHERE og.id = " . $row['id'] . ";";
                            $result2 = mysqli_query($db, $sql2);
                            $tel = mysqli_fetch_assoc($result2);

                            echo("<p>" . $tel['telefon'] . "</p>");

                        }
                        mysqli_close($db);
                    }
                ?>
            </div>
        </div>
        <footer class="stopka">
            <p>Stronę opracował 12312312312</p>
        </footer>
    </body>
</html>
